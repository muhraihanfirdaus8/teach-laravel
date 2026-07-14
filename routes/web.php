<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProfilController;

// Route baru yang kita tambahkan
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');