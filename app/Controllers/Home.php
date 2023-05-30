<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $infoprofil = new MahasiswaModel();
        return view('Beranda', [
            "nama" => $infoprofil -> getnama(),
            "nim" => $infoprofil -> getnim()
        ]);
    }

    public function profil()
    {
        return view('Profil');
    }
}