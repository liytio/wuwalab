@extends('layouts.app')

@section('title', $build->title)

@section('content')
@php
    $isOwner = auth()->id() === $build->user_id;
    $statusLabels = ['draft' => 'Kembalikan ke Draft', 'published' => 'Publikasikan', 'archived' => 'Arsipkan'];
@endphp

<div class="bg-[#1A1D2A] border border-gray-800 rounded-xl p-8">
    <div class="flex flex-wrap gap-4 justify-between items-start mb-6">
        <div>
            <h1 class="text-3xl font-extrabold">{{ $build->title }}</h1>
            <p class="text-gray-400 mt-1">oleh {{ $build->user->name }}</p>
        </div>
        @include('builds._status-badge', ['status' => $build->status])
    </div>

    <dl class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-[#11131a] rounded p-3">
            <dt class="text-xs text-gray-500">Resonator</dt>
            <dd class="font-bold"><a href="{{ route('resonators.show', $build->resonator) }}" class="text-blue-300 hover:text-blue-200">{{ $build->resonator->name }}</a></dd>
        </div>
        <div class="bg-[#11131a] rounded p-3">
            <dt class="text-xs text-gray-500">Level</dt>
            <dd class="font-bold" data-test="build-level">{{ $build->level }}</dd>
        </div>
        <div class="bg-[#11131a] rounded p-3">
            <dt class="text-xs text-gray-500">Sequence</dt>
            <dd class="font-bold">S{{ $build->sequence }}</dd>
        </div>
        <div class="bg-[#11131a] rounded p-3">
            <dt class="text-xs text-gray-500">Senjata</dt>
            <dd class="font-bold">{{ $build->weapon_name ?: '-' }}</dd>
        </div>
    </dl>

    <div class="mb-6">
        <h2 class="text-sm font-semibold text-gray-400 mb-2">Susunan Echo (total cost {{ $build->totalEchoCost() }}/12)</h2>
        <div class="flex gap-2">
            @foreach ($build->echo_costs as $cost)
                <span class="w-10 h-10 flex items-center justify-center rounded bg-yellow-900/50 text-yellow-300 font-bold">{{ $cost }}</span>
            @endforeach
        </div>
    </div>

    @if ($build->notes)
        <div class="mb-6">
            <h2 class="text-sm font-semibold text-gray-400 mb-2">Catatan</h2>
            <p class="text-gray-200 whitespace-pre-line">{{ $build->notes }}</p>
        </div>
    @endif

    <p class="text-sm text-gray-400" data-test="rating-summary">
        Rating:
        @if ($build->ratings_count > 0)
            ★ {{ number_format($build->ratings_avg_score, 1) }} dari {{ $build->ratings_count }} penilaian
        @else
            belum ada penilaian
        @endif
    </p>
</div>

@if ($isOwner)
    <div class="mt-6 flex flex-wrap gap-3">
        @foreach (\App\Models\Build::TRANSITIONS[$build->status] ?? [] as $target)
            <form method="POST" action="{{ route('builds.status', $build) }}">
                @csrf
                @method('PATCH')
                <input type="hidden" name="status" value="{{ $target }}">
                <button type="submit" class="bg-green-700 hover:bg-green-600 font-bold py-2 px-4 rounded transition">{{ $statusLabels[$target] }}</button>
            </form>
        @endforeach

        @if ($build->isEditable())
            <a href="{{ route('builds.edit', $build) }}" class="bg-blue-600 hover:bg-blue-500 font-bold py-2 px-4 rounded transition">Edit</a>
        @endif

        <form method="POST" action="{{ route('builds.destroy', $build) }}" onsubmit="return confirm('Hapus build ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-700 hover:bg-red-600 font-bold py-2 px-4 rounded transition">Hapus</button>
        </form>
    </div>
@elseif (auth()->check() && $build->status === 'published')
    <form method="POST" action="{{ route('builds.rate', $build) }}" class="mt-6 bg-[#1A1D2A] border border-gray-800 rounded-xl p-6 flex flex-wrap items-end gap-4">
        @csrf
        <div>
            <label for="score" class="block text-sm font-semibold text-gray-300 mb-1">Beri rating (1 - 5)</label>
            <input id="score" name="score" type="number" value="{{ old('score', $myRating) }}"
                class="w-24 bg-[#11131a] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            @include('partials.field-error', ['name' => 'score'])
        </div>
        <button type="submit" class="bg-yellow-600 hover:bg-yellow-500 font-bold py-2 px-4 rounded transition">
            {{ $myRating ? 'Ubah Rating' : 'Kirim Rating' }}
        </button>
    </form>
@elseif (! auth()->check())
    <p class="mt-6 text-sm text-gray-400"><a href="{{ route('login') }}" class="text-blue-400">Login</a> untuk memberi rating.</p>
@endif
@endsection
