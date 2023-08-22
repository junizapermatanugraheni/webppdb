<?php

namespace App\Http\Controllers;

use App\Models\ModelInformasi;
use Illuminate\Contracts\Session\Session ;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelInformasi::orderBy('id', 'asc')->paginate(5);
        return view('admin.master_informasi')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_informasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           
        $request->validate(
            [
                "nama_jurusan" => 'required',
                "kuota" => 'required',
                "akreditasi" => 'required',
                "jmlkelas" => 'required',
            ],
            [
                'nama_jurusan.required' => 'Nama jurusan harus diisi',
                'kuota.required' => 'Kuota harus diisi',
                'akreditasi.required' => 'Akreditasi harus diisi',
                'jmlkelas.required' => 'Jumlah Kelas harus diisi',
            ]
        );
        $data = [
            "nama_jurusan" => $request->nama_jurusan,
            "kuota" => $request->kuota,
            "akreditasi" => $request->akreditasi,
            "jmlkelas" => $request->jmlkelas,
        ];
        ModelInformasi::create($data);
        return redirect()->to('informasi')->with('success', 'Data Berhasil Ditambahkan');
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
        $data = ModelInformasi::where('id',$id)->first();
        return view('admin.edit_informasi')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                "nama_jurusan" => 'required',
                "kuota" => 'required',
                "akreditasi" => 'required',
                "jmlkelas" => 'required',
            ],
            [
                'nama_jurusan.required' => 'Nama jurusan harus diisi',
                'kuota.required' => 'Kuota harus diisi',
                'akreditasi.required' => 'Akreditasi harus diisi',
                'jmlkelas.required' => 'Jumlah Kelas harus diisi',
            ]
        );
        $data = [
            "nama_jurusan" => $request->nama_jurusan,
            "kuota" => $request->kuota,
            "akreditasi" => $request->akreditasi,
            "jmlkelas" => $request->jmlkelas,
        ];
        ModelInformasi::where('id',$id)->update($data);
        return redirect()->to('informasi')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ModelInformasi::where('id',$id)->delete();
        return redirect()->to('informasi')->with('success', 'Data Berhasil Dihapus');
        
    }
}
