@extends('layouts.app')

@section('title', 'Reset Password')
@section('width', 'max-w-md')

@section('content')
<div class="bg-[#1A1D2A] border border-gray-800 rounded-xl p-8 shadow-lg">
    <h1 class="text-2xl font-extrabold mb-6">Buat Password Baru</h1>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-5" novalidate>
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div>
            <label for="email" class="block text-sm font-semibold text-gray-300 mb-1">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email', $email) }}"
                class="w-full bg-[#11131a] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            @include('partials.field-error', ['name' => 'email'])
        </div>

        <div>
            <label for="password" class="block text-sm font-semibold text-gray-300 mb-1">Password Baru</label>
            <input id="password" name="password" type="password" autofocus
                class="w-full bg-[#11131a] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            <p class="mt-1 text-xs text-gray-500">Minimal 8 karakter, berisi huruf dan angka.</p>
            @include('partials.field-error', ['name' => 'password'])
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-semibold text-gray-300 mb-1">Konfirmasi Password Baru</label>
            <input id="password_confirmation" name="password_confirmation" type="password"
                class="w-full bg-[#11131a] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 font-bold py-2 rounded transition">Simpan Password</button>
    </form>
</div>
@endsection
