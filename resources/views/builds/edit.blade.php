@extends('layouts.app')

@section('title', 'Edit Build')
@section('width', 'max-w-3xl')

@section('content')
<h1 class="text-3xl font-extrabold mb-6">Edit Build</h1>

@include('builds._form', [
    'action' => route('builds.update', $build),
    'method' => 'PUT',
    'submitLabel' => 'Simpan Perubahan',
])
@endsection
