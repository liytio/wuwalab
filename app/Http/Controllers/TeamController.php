<?php

namespace App\Http\Controllers;

use App\Models\Resonator;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $teams = $request->user()->teams()->with(['member1', 'member2', 'member3'])->latest()->get();

        return view('teams.index', ['teams' => $teams, 'max' => Team::MAX_PER_USER]);
    }

    public function create(Request $request)
    {
        if ($request->user()->teams()->count() >= Team::MAX_PER_USER) {
            return redirect()->route('teams.index')->with('error', 'Batas maksimal ' . Team::MAX_PER_USER . ' tim sudah tercapai.');
        }

        return view('teams.create', ['team' => new Team(), 'resonators' => Resonator::orderBy('name')->get()]);
    }

    public function store(Request $request)
    {
        if ($request->user()->teams()->count() >= Team::MAX_PER_USER) {
            return redirect()->route('teams.index')->with('error', 'Batas maksimal ' . Team::MAX_PER_USER . ' tim sudah tercapai.');
        }

        $team = new Team($this->validated($request));
        $team->user_id = $request->user()->id;
        $team->save();

        return redirect()->route('teams.index')->with('success', 'Tim "' . $team->name . '" berhasil dibuat.');
    }

    public function edit(Request $request, Team $team)
    {
        $this->authorizeOwner($request, $team);

        return view('teams.edit', ['team' => $team, 'resonators' => Resonator::orderBy('name')->get()]);
    }

    public function update(Request $request, Team $team)
    {
        $this->authorizeOwner($request, $team);

        $team->update($this->validated($request));

        return redirect()->route('teams.index')->with('success', 'Tim berhasil diperbarui.');
    }

    public function destroy(Request $request, Team $team)
    {
        $this->authorizeOwner($request, $team);

        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Tim berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:40'],
            'member1_id' => ['required', 'integer', 'exists:resonators,id'],
            'member2_id' => ['required', 'integer', 'exists:resonators,id', 'different:member1_id'],
            'member3_id' => ['required', 'integer', 'exists:resonators,id', 'different:member1_id', 'different:member2_id'],
        ], [
            'different' => 'Setiap anggota tim harus resonator yang berbeda.',
        ]);
    }

    private function authorizeOwner(Request $request, Team $team): void
    {
        abort_if($team->user_id !== $request->user()->id, 403, 'Kamu bukan pemilik tim ini.');
    }
}
