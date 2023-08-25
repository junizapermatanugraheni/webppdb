<?php

namespace App\Http\Controllers;

use App\Models\daftarsiswa;
use Illuminate\Http\Request;

class DaftarSiswaController extends Controller
{
    function index()
    {
        $data = daftarsiswa::all();
        $rank = daftarsiswa::orderBy('nilai_bindo')->get();
        return view('admin/daftar_calon_siswa')->with('data', $data);
    }
}
