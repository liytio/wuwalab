@extends('layouts.app')

@section('title', 'Buat Tim')
@section('width', 'max-w-3xl')

@section('content')
<h1 class="text-3xl font-extrabold mb-6">Buat Tim Baru</h1>

@include('teams._form', [
    'action' => route('teams.store'),
    'method' => 'POST',
    'submitLabel' => 'Simpan Tim',
])
@endsection
