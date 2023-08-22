<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages/home');
    }
    public function petunjuk()
    {
        return view('pages/petunjuk');
    }
    public function pageinformasi()
    {
        return view('pages/informasi');
    }
    public function pengumuman()
    {
        return view('pages/pengumuman');
    }

}
