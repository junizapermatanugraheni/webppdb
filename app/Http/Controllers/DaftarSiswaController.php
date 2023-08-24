<?php

namespace App\Http\Controllers;

use App\Models\daftarsiswa;
use Illuminate\Http\Request;

class DaftarSiswaController extends Controller
{
    function index()
    {
        $data = daftarsiswa::all();
        return view('admin/daftar_calon_siswa')->with('data', $data);
    }
}
