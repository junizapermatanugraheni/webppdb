<?php

namespace App\Http\Controllers;

use App\Models\MJurusan;
use Illuminate\Http\Request;

class MasterJurusanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $m_jurusans = MJurusan::orderBy('id', 'asc')->paginate(10);
        return view('admin.master_jurusan', compact('m_jurusans'));
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.add_mjurusan');
    }
    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_jurusan'     => 'required',

        ]);
        //create post
        MJurusan::create($request->all());

        //redirect to index
        return redirect()->route('m_jurusans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * edit
     *
     * @param  App\Models\MJurusan  $jurusan
     * @return void
     */
    public function edit(MJurusan $jurusan)
    {
        return view('admin.edit_mjurusan', compact('jurusan'));
    }

     /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  App\Models\MJurusan  $jurusan
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, MJurusan $jurusan)
    {
        $request->validate([
            'nama_jurusan' => 'required',
        ]);
        
        $jurusan->fill($request->post())->save();

        return redirect()->route('m_jurusans.index')->with('success','Company Has Been updated successfully');
    }
    /**
     * destroy
     *
     *@param  App\Models\MJurusan  $jurusan
     * @return void
     */
    public function destroy(MJurusan $jurusan)
    {
        //delete post
        $jurusan->delete();

        //redirect to index
        return redirect()->route('m_jurusans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
