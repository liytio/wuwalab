@extends('layouts.app')

@section('title', 'Login')
@section('width', 'max-w-md')

@section('content')
<div class="bg-[#1A1D2A] border border-gray-800 rounded-xl p-8 shadow-lg">
    <h1 class="text-2xl font-extrabold mb-6">Login ke WutheringWK</h1>

    <form method="POST" action="{{ route('login') }}" class="space-y-5" novalidate>
        @csrf

        <div>
            <label for="email" class="block text-sm font-semibold text-gray-300 mb-1">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" autofocus
                class="w-full bg-[#11131a] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            @include('partials.field-error', ['name' => 'email'])
        </div>

        <div>
            <label for="password" class="block text-sm font-semibold text-gray-300 mb-1">Password</label>
            <input id="password" name="password" type="password"
                class="w-full bg-[#11131a] border border-gray-700 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
            @include('partials.field-error', ['name' => 'password'])
        </div>

        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2 text-gray-400">
                <input type="checkbox" name="remember" class="accent-blue-500"> Ingat saya
            </label>
            <a href="{{ route('password.request') }}" class="text-blue-400 hover:text-blue-300">Lupa password?</a>
        </div>

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 font-bold py-2 rounded transition">Login</button>
    </form>

    <p class="mt-6 text-sm text-gray-400 text-center">
        Belum punya akun? <a href="{{ route('register') }}" class="text-blue-400 hover:text-blue-300">Daftar di sini</a>
    </p>
</div>
@endsection
