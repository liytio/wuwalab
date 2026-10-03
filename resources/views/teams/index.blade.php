@extends('layouts.app')

@section('title', 'Tim Saya')

@section('content')
<div class="flex flex-wrap gap-4 justify-between items-center mb-6">
    <div>
        <h1 class="text-3xl font-extrabold">Tim Saya</h1>
        <p class="text-sm text-gray-400" data-test="team-count">{{ $teams->count() }} / {{ $max }} tim</p>
    </div>
    @if ($teams->count() < $max)
        <a href="{{ route('teams.create') }}" class="bg-blue-600 hover:bg-blue-500 font-bold py-2 px-4 rounded transition">+ Buat Tim</a>
    @endif
</div>

@if ($teams->isEmpty())
    <p class="text-gray-400" data-test="empty-teams">Belum ada tim. Susun tim pertamamu dari 3 resonator.</p>
@else
    <div class="space-y-3">
        @foreach ($teams as $team)
            <div class="bg-[#1A1D2A] border border-gray-800 rounded-lg p-4 flex flex-wrap gap-4 items-center justify-between">
                <div>
                    <h2 class="text-lg font-bold text-blue-300">{{ $team->name }}</h2>
                    <p class="text-sm text-gray-400">{{ $team->members()->pluck('name')->join(' · ') }}</p>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('teams.edit', $team) }}" class="text-sm bg-blue-600 hover:bg-blue-500 py-1 px-3 rounded transition">Edit</a>
                    <form method="POST" action="{{ route('teams.destroy', $team) }}" onsubmit="return confirm('Hapus tim ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm bg-red-700 hover:bg-red-600 py-1 px-3 rounded transition">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endif
@endsection
