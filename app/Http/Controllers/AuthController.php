<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_siswa()
    {
        return view('auth/login_siswa');
    }
    public function identitas_siswa()
    {
        return view('auth/form_identitas');
    }
    public function nilai_siswa()
    {
        return view('auth/form_nilai');
    }
    public function jurusan_siswa()
    {
        return view('auth/form_jurusan');
    }
    public function dokumen_siswa()
    {
        return view('auth/form_dokumen');
    }
  
}
