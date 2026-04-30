<?php

use Illuminate\Support\Facades\Route;
use App\Models\Resonator; // Memanggil model Resonator

Route::get('/', function () {
    // Mengambil semua data dari tabel resonators
    $resonators = Resonator::all(); 
    
    // Mengirim data tersebut ke halaman 'welcome'
    return view('welcome', compact('resonators')); 
});

// Route untuk halaman detail berdasarkan ID
Route::get('/resonator/{id}', function ($id) {
    // Cari karakter berdasarkan ID, jika tidak ada maka tampilkan 404
    $resonator = Resonator::findOrFail($id);
    
    return view('detail', compact('resonator'));
});

// Route untuk halaman Beginner Guide
Route::get('/beginner-guide', function () {
    return view('beginner-guide');
});

// Route untuk halaman Tier List
Route::get('/tier-list', function () {
    return view('tier-list');
});

// Route untuk halaman Daftar Senjata
Route::get('/daftar-senjata', function () {
    return view('daftar-senjata');
});

// Route untuk halaman Echo System & Stats
Route::get('/echo-system', function () {
    return view('echo-system');
});

// Route untuk halaman Team Tier List
Route::get('/team-tier-list', function () {
    return view('team-tier-list');
});