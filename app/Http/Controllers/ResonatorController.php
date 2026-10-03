<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Resonator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResonatorController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->validate([
            'q' => ['nullable', 'string', 'max:50'],
            'element' => ['nullable', 'string', 'max:30'],
            'weapon_type' => ['nullable', 'string', 'max:30'],
            'rarity' => ['nullable', 'integer', Rule::in([4, 5])],
        ]);

        $resonators = Resonator::filter($filters)
            ->withCount(['builds as published_builds_count' => fn ($q) => $q->where('status', Build::STATUS_PUBLISHED)])
            ->orderBy('name')
            ->get();

        return view('welcome', [
            'resonators' => $resonators,
            'filters' => $filters,
            'elements' => Resonator::distinct()->orderBy('element')->pluck('element'),
            'weaponTypes' => Resonator::distinct()->orderBy('weapon_type')->pluck('weapon_type'),
        ]);
    }

    public function show($id)
    {
        // Cari karakter berdasarkan ID, jika tidak ada maka tampilkan 404
        $resonator = Resonator::findOrFail($id);

        return view('detail', compact('resonator'));
    }
}
