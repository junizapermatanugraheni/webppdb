<?php

namespace App\Http\Controllers;

use App\Models\MJurusan;
use Illuminate\Contracts\Session\Session ;
use Illuminate\Http\Request;

class MasterJurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MJurusan::orderBy('id', 'asc')->paginate(5);
        return view('admin.master_jurusan')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_mjurusan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           
        $request->validate(
            [
                "nama_jurusan" => 'required',
               
            ],
            [
                'nama_jurusan.required' => 'Nama jurusan harus diisi',
              
            ]
        );
        $data = [
            "nama_jurusan" => $request->nama_jurusan,
           
        ];
        MJurusan::create($data);
        return redirect()->to('mjurusan')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = MJurusan::where('id',$id)->first();
        return view('admin.edit_mjurusan')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                "nama_jurusan" => 'required',
                
            ],
            [
                'nama_jurusan.required' => 'Nama jurusan harus diisi',
               
            ]
        );
        $data = [
            "nama_jurusan" => $request->nama_jurusan,
           
        ];
        MJurusan::where('id',$id)->update($data);
        return redirect()->to('mjurusan')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MJurusan::where('id',$id)->delete();
        return redirect()->to('mjurusan')->with('success', 'Data Berhasil Dihapus');
        
    }
}
