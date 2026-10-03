@extends('layouts.app')

@section('title', 'Build Saya')

@section('content')
<div class="flex flex-wrap gap-4 justify-between items-center mb-6">
    <h1 class="text-3xl font-extrabold">Build Saya</h1>
    <a href="{{ route('builds.create') }}" class="bg-blue-600 hover:bg-blue-500 font-bold py-2 px-4 rounded transition">+ Buat Build</a>
</div>

<div class="flex flex-wrap gap-2 mb-6 text-sm">
    @foreach (['' => 'Semua', 'draft' => 'Draft', 'published' => 'Published', 'archived' => 'Archived'] as $value => $label)
        <a href="{{ route('builds.index', $value ? ['status' => $value] : []) }}"
            class="px-3 py-1 rounded border {{ ($status ?? '') === $value ? 'border-blue-500 text-blue-400' : 'border-gray-700 text-gray-400 hover:text-white' }}">
            {{ $label }}
        </a>
    @endforeach
</div>

@if ($builds->isEmpty())
    <p class="text-gray-400" data-test="empty-builds">Belum ada build. Mulai dengan membuat build pertamamu.</p>
@else
    <div class="space-y-3">
        @foreach ($builds as $build)
            <div class="bg-[#1A1D2A] border border-gray-800 rounded-lg p-4 flex flex-wrap gap-4 items-center justify-between">
                <div>
                    <a href="{{ route('builds.show', $build) }}" class="text-lg font-bold text-blue-300 hover:text-blue-200">{{ $build->title }}</a>
                    <p class="text-sm text-gray-400">
                        {{ $build->resonator->name }} · Lv. {{ $build->level }} · S{{ $build->sequence }} · Echo cost {{ $build->totalEchoCost() }}/12
                        @if ($build->ratings_avg_score)
                            · ★ {{ number_format($build->ratings_avg_score, 1) }}
                        @endif
                    </p>
                </div>
                @include('builds._status-badge', ['status' => $build->status])
            </div>
        @endforeach
    </div>
@endif
@endsection
