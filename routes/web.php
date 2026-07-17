<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route tambahan dari praktikum sebelumnya
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/mahasiswa/{id}', [ProfilController::class, 'show'])->name('mahasiswa.show'); 

// Route CRUD Mahasiswa yang diproteksi (Tahap 2 Praktikum)
Route::resource('mahasiswas', MahasiswaController::class)->middleware('auth');