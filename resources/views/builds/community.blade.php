@extends('layouts.app')

@section('title', 'Build Komunitas')

@section('content')
<h1 class="text-3xl font-extrabold mb-2">Build Komunitas</h1>
<p class="text-gray-400 mb-6">Build yang sudah dipublikasikan oleh pemain lain, diurutkan dari rating tertinggi.</p>

<form method="GET" action="{{ route('builds.community') }}" class="flex flex-wrap gap-3 mb-6">
    <select name="resonator_id" class="bg-[#1A1D2A] border border-gray-700 rounded px-3 py-2">
        <option value="">Semua resonator</option>
        @foreach ($resonators as $resonator)
            <option value="{{ $resonator->id }}" @selected($resonatorId == $resonator->id)>{{ $resonator->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="bg-blue-600 hover:bg-blue-500 font-bold py-2 px-4 rounded transition">Filter</button>
</form>

@if ($builds->isEmpty())
    <p class="text-gray-400" data-test="empty-community">Belum ada build yang dipublikasikan.</p>
@else
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($builds as $build)
            <a href="{{ route('builds.show', $build) }}" class="block bg-[#1A1D2A] border border-gray-800 hover:border-blue-500 rounded-lg p-5 transition">
                <h2 class="text-lg font-bold text-blue-300">{{ $build->title }}</h2>
                <p class="text-sm text-gray-400">{{ $build->resonator->name }} · Lv. {{ $build->level }} · S{{ $build->sequence }}</p>
                <p class="text-sm text-gray-500 mt-2">
                    oleh {{ $build->user->name }} ·
                    @if ($build->ratings_count > 0)
                        ★ {{ number_format($build->ratings_avg_score, 1) }} ({{ $build->ratings_count }})
                    @else
                        belum dinilai
                    @endif
                </p>
            </a>
        @endforeach
    </div>
@endif
@endsection
