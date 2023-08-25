<?php

namespace App\Http\Controllers;

use App\Models\daftarsiswa;
use Illuminate\Http\Request;

class DaftarSiswaController extends Controller
{
    function index()
    {
        $data = daftarsiswa::orderBy('total','desc')
        ->orderBy('nilai_mtk','desc')
        ->orderBy('nilai_ipa','desc')
        ->orderBy('nilai_binggris','desc')
        ->get();
        
       
        return view('admin/daftar_calon_siswa')->with('data', $data);
    }
}
