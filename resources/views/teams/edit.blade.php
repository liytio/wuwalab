@extends('layouts.app')

@section('title', 'Edit Tim')
@section('width', 'max-w-3xl')

@section('content')
<h1 class="text-3xl font-extrabold mb-6">Edit Tim</h1>

@include('teams._form', [
    'action' => route('teams.update', $team),
    'method' => 'PUT',
    'submitLabel' => 'Simpan Perubahan',
])
@endsection
