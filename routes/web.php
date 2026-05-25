<?php
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profile');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/visualisasi', function () {
    return view('visualisasi');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::post('/kirim-pesan',
[KontakController::class, 'kirim']);