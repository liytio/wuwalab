@extends('layouts.app')

@section('title', 'Buat Build')
@section('width', 'max-w-3xl')

@section('content')
<h1 class="text-3xl font-extrabold mb-6">Buat Build Baru</h1>

@include('builds._form', [
    'action' => route('builds.store'),
    'method' => 'POST',
    'submitLabel' => 'Simpan sebagai Draft',
])
@endsection
