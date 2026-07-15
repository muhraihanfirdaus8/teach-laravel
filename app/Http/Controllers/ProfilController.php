<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa;

class ProfilController extends Controller {
    public function index() {
        $mahasiswas = Mahasiswa::orderBy('ipk', 'desc')->get();
        return view('profil', compact('mahasiswas'));
    }

    public function show($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('profil-detail', compact('mahasiswa'));
    }
}