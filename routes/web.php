<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MahasiswaController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/mahasiswa/{id}', [ProfilController::class, 'show'])->name('mahasiswa.show'); 

Route::resource('mahasiswas', MahasiswaController::class);