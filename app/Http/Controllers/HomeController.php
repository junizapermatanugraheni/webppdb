<?php

namespace App\Http\Controllers;

use App\Models\ModelInformasi;
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
        $data = ModelInformasi::all();
        return view('pages/informasi')->with('data', $data);
    }
    public function pengumuman()
    {
        return view('pages/pengumuman');
    }
    

}
