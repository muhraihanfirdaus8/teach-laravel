<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // KODE $fillable DILETAKKAN DI SINI
    protected $fillable = [
        'nama', 'nim', 'prodi', 'angkatan',
        'ipk', 'email', 'github', 'bio',
        'user_id',   
    ];
}