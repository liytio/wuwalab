<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Resonator;
use App\Rules\ValidEchoLoadout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BuildController extends Controller
{
    // Daftar build milik user yang sedang login
    public function index(Request $request)
    {
        $status = $request->query('status');

        $builds = $request->user()->builds()
            ->with('resonator')
            ->withAvg('ratings', 'score')
            ->when(in_array($status, array_keys(Build::TRANSITIONS), true), fn ($q) => $q->where('status', $status))
            ->latest()
            ->get();

        return view('builds.index', compact('builds', 'status'));
    }

    // Build yang sudah dipublikasikan oleh semua user
    public function community(Request $request)
    {
        $resonatorId = $request->integer('resonator_id') ?: null;

        $builds = Build::where('status', Build::STATUS_PUBLISHED)
            ->with(['resonator', 'user'])
            ->withAvg('ratings', 'score')
            ->withCount('ratings')
            ->when($resonatorId, fn ($q) => $q->where('resonator_id', $resonatorId))
            ->orderByDesc('ratings_avg_score')
            ->latest()
            ->get();

        return view('builds.community', [
            'builds' => $builds,
            'resonators' => Resonator::orderBy('name')->get(),
            'resonatorId' => $resonatorId,
        ]);
    }

    public function create(Request $request)
    {
        return view('builds.create', [
            'build' => new Build(['resonator_id' => $request->integer('resonator_id') ?: null, 'level' => 90, 'sequence' => 0]),
            'resonators' => Resonator::orderBy('name')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $build = new Build($this->validated($request));
        $build->user_id = $request->user()->id;
        $build->status = Build::STATUS_DRAFT;
        $build->save();

        return redirect()->route('builds.show', $build)->with('success', 'Build berhasil disimpan sebagai draft.');
    }

    public function show(Request $request, Build $build)
    {
        // Build yang belum dipublikasikan hanya bisa dilihat pemiliknya
        if ($build->status !== Build::STATUS_PUBLISHED && $build->user_id !== $request->user()?->id) {
            abort(404);
        }

        $build->load(['resonator', 'user'])->loadAvg('ratings', 'score')->loadCount('ratings');

        $myRating = $request->user()
            ? $build->ratings()->where('user_id', $request->user()->id)->value('score')
            : null;

        return view('builds.show', compact('build', 'myRating'));
    }

    public function edit(Request $request, Build $build)
    {
        $this->authorizeOwner($request, $build);

        if (! $build->isEditable()) {
            return redirect()->route('builds.show', $build)
                ->with('error', 'Hanya build berstatus draft yang bisa diedit. Ubah status ke draft terlebih dahulu.');
        }

        return view('builds.edit', [
            'build' => $build,
            'resonators' => Resonator::orderBy('name')->get(),
        ]);
    }

    public function update(Request $request, Build $build)
    {
        $this->authorizeOwner($request, $build);

        if (! $build->isEditable()) {
            return redirect()->route('builds.show', $build)
                ->with('error', 'Hanya build berstatus draft yang bisa diedit.');
        }

        $build->update($this->validated($request));

        return redirect()->route('builds.show', $build)->with('success', 'Build berhasil diperbarui.');
    }

    public function destroy(Request $request, Build $build)
    {
        $this->authorizeOwner($request, $build);

        $build->delete();

        return redirect()->route('builds.index')->with('success', 'Build berhasil dihapus.');
    }

    // Mengubah status build sesuai aturan di Build::TRANSITIONS
    public function updateStatus(Request $request, Build $build)
    {
        $this->authorizeOwner($request, $build);

        $data = $request->validate([
            'status' => ['required', Rule::in(array_keys(Build::TRANSITIONS))],
        ]);

        if (! $build->canTransitionTo($data['status'])) {
            return back()->with('error', "Status tidak bisa diubah dari {$build->status} ke {$data['status']}.");
        }

        $build->status = $data['status'];
        $build->save();

        return back()->with('success', 'Status build diubah menjadi ' . $build->status . '.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'resonator_id' => ['required', 'integer', 'exists:resonators,id'],
            'title' => ['required', 'string', 'min:3', 'max:50'],
            'level' => ['required', 'integer', 'between:1,90'],
            'sequence' => ['required', 'integer', 'between:0,6'],
            'weapon_name' => ['nullable', 'string', 'max:100'],
            'echo_costs' => ['required', 'array', new ValidEchoLoadout()],
            'notes' => ['nullable', 'string', 'max:500'],
        ]);

        $data['echo_costs'] = ValidEchoLoadout::normalize($data['echo_costs']);

        return $data;
    }

    private function authorizeOwner(Request $request, Build $build): void
    {
        abort_if($build->user_id !== $request->user()->id, 403, 'Kamu bukan pemilik build ini.');
    }
}
