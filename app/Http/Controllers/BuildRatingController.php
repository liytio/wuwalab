<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\BuildRating;
use Illuminate\Http\Request;

class BuildRatingController extends Controller
{
    public function store(Request $request, Build $build)
    {
        $data = $request->validate([
            'score' => ['required', 'integer', 'between:1,5'],
        ]);

        if ($build->status !== Build::STATUS_PUBLISHED) {
            return back()->with('error', 'Hanya build yang sudah dipublikasikan yang bisa diberi rating.');
        }

        if ($build->user_id === $request->user()->id) {
            return back()->with('error', 'Kamu tidak bisa memberi rating pada build milikmu sendiri.');
        }

        // Rating ulang akan menimpa rating sebelumnya
        BuildRating::updateOrCreate(
            ['build_id' => $build->id, 'user_id' => $request->user()->id],
            ['score' => $data['score']]
        );

        return back()->with('success', 'Terima kasih, rating kamu tersimpan.');
    }
}
