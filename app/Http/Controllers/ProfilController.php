<?php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama'     => 'Muhammad Raihan Firdaus',
            'nim'      => '3337250128',
            'prodi'    => 'Informatika',
            'angkatan' => 2025,
            'ipk'      => 3.95,
            'email'    => 'muhraihanfirdaus8@gmail.com',
            'github'   => 'muhraihanfirdaus8.com/rhaan.fds',
            'skill'    => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Git'],
            'bio'      => 'Mahasiswa Informatika UNTIRTA yang semangat belajar.',
        ];

        return view('profil', compact('mahasiswa'));
    }
}