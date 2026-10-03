@extends('layouts.app')

@section('title', 'Lupa Password')
@section('width', 'max-w-md')

@section('content')
<div class="bg-[#1A1D2A] border border-gray-800 rounded-xl p-8 shadow-lg">
    <h1 class="text-2xl font-extrabold mb-2">Lupa Password</h1>
    <p class="text-sm text-gray-400 mb-6">Masukkan email akunmu. Kami akan mengirim link untuk membuat password baru.</p>

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5" novalidate>
        @csrf

        <div>
            <label for="email" class="block text-sm font-semibold text-gray-300 mb-1">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" autofocus
                class="w-full bg-[#11131a] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            @include('partials.field-error', ['name' => 'email'])
        </div>

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 font-bold py-2 rounded transition">Kirim Link Reset</button>
    </form>

    <p class="mt-6 text-sm text-gray-400 text-center">
        <a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-300">← Kembali ke Login</a>
    </p>
</div>
@endsection
