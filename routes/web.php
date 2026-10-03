<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\BuildRatingController;
use App\Http\Controllers\ResonatorController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

// Beranda: daftar resonator dengan pencarian dan filter
Route::get('/', [ResonatorController::class, 'index'])->name('home');

// Route untuk halaman detail berdasarkan ID
Route::get('/resonator/{id}', [ResonatorController::class, 'show'])->name('resonators.show');

// Route untuk halaman Beginner Guide
Route::get('/beginner-guide', function () {
    return view('beginner-guide');
})->name('beginner-guide');

// Route untuk halaman Tier List
Route::get('/tier-list', function () {
    return view('tier-list');
})->name('tier-list');

// Route untuk halaman Daftar Senjata
Route::get('/daftar-senjata', function () {
    return view('daftar-senjata');
})->name('daftar-senjata');

// Route untuk halaman Echo System & Stats
Route::get('/echo-system', function () {
    return view('echo-system');
})->name('echo-system');

// Route untuk halaman Team Tier List
Route::get('/team-tier-list', function () {
    return view('team-tier-list');
})->name('team-tier-list');

// Autentikasi: hanya untuk pengunjung yang belum login
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/forgot-password', [PasswordResetController::class, 'request'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'email'])->name('password.email');
    Route::get('/reset-password/{token}', [PasswordResetController::class, 'edit'])->name('password.reset');
    Route::post('/reset-password', [PasswordResetController::class, 'update'])->name('password.update');
});

// Build komunitas bisa dilihat siapa saja
Route::get('/builds/community', [BuildController::class, 'community'])->name('builds.community');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::resource('builds', BuildController::class)->except('show');
    Route::patch('/builds/{build}/status', [BuildController::class, 'updateStatus'])->name('builds.status');
    Route::post('/builds/{build}/rating', [BuildRatingController::class, 'store'])->name('builds.rate');

    Route::resource('teams', TeamController::class)->except('show');
});

// Detail build: publik untuk build published, pemilik untuk draft/archived
Route::get('/builds/{build}', [BuildController::class, 'show'])->name('builds.show');
