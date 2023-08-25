<?php

namespace App\Http\Controllers;

use App\Models\MJurusan;
use App\Models\ModelFormPendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Helpers\Helper;

class CalonSiswaController extends Controller
{
    public function index()
    {
        return view('siswa/login_siswa');
    }
    public function login_siswa(Request $request)
    {

        $db = 
        $request->validate([
            'nik' => 'required',
            'tgllahir' => 'required',
        ], [
            'nik.required' => 'nik harus diisi',
            'tgllahir.require' => 'Tanggal Lahir harus diisi',
        ]);


        $infologin = $request->only('nik','tgllahir');

        if (Auth::guard('calonsiswa')->attempt($infologin)) {
            return redirect('siswa/pendaftaran')->with('Success', 'Berhasil Login');
        } else {
            return redirect('siswa')->withErrors('NIK dan Tanggal Lahir Tidak Ditemukan');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('siswa')->with('Success', 'Berhasil Logout');
    }


    public function form_pendaftaran()
    {
        $jurusan = MJurusan::all();
        return view('siswa/form_pendaftaran', compact('jurusan'));
    }

    public function create(Request $request)
    {
        
        // Session::flash('nopendaftaran', $request->Helper::IDGenerator(new ModelFormPendaftaran, 'nopendaftaran', 2, 'PPDB23'));
        Session::flash('nik', $request->nik);
        Session::flash('tgllahir', $request->tgllahir);
        Session::flash('tmplahir', $request->tmplahir);
        Session::flash('nmlengkap', $request->nmlengkap);
        Session::flash('nisn', $request->nisn);
        Session::flash('alamat', $request->alamat);
        Session::flash('notelp_siswa', $request->notelp_siswa);
        Session::flash('jnskelamin', $request->jnskelamin);
        Session::flash('agama', $request->agama);
        Session::flash('asal_sekolah', $request->asal_sekolah);
        Session::flash('alamat_sekolah', $request->alamat_sekolah);
        Session::flash('nmortu', $request->nmortu);
        Session::flash('alamat_ortu', $request->alamat_ortu);
        Session::flash('pekerjaan_ortu', $request->pekerjaan_ortu);
        Session::flash('notlp_ortu', $request->notlp_ortu);
        Session::flash('nilai_bindo', $request->nilai_bindo);
        Session::flash('nilai_binggris', $request->nilai_binggris);
        Session::flash('nilai_mtk', $request->nilai_mtk);
        Session::flash('nilai_ipa', $request->nilai_ipa);
        Session::flash('doc_nilaiujian', $request->file('doc_nilaiujian')->store('public'),);
        Session::flash('idjurusan', $request->idjurusan);
        Session::flash('doc_ketlulus', $request->file('doc_ketlulus')->store('public'));
        Session::flash('doc_foto', $request->file('doc_foto')->store('public'));
        Session::flash('doc_lainnya',  $request->file('doc_lainnya')->store('public'));

        $request->validate([
            'nik' => 'required',
            'tgllahir' => 'required',
            'nmlengkap' => 'required',
            'nisn' => 'required',
            'alamat' => 'required',
            'notelp_siswa' => 'required',
            'tmplahir' => 'required',
            'jnskelamin' => 'required',
            'agama' => 'required',
            'asal_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'nmortu' => 'required',
            'alamat_ortu' => 'required',
            'pekerjaan_ortu' => 'required',
            'notlp_ortu' => 'required',
            'nilai_bindo' => 'required',
            'nilai_binggris' => 'required',
            'nilai_mtk' => 'required',
            'nilai_ipa' => 'required',
            'doc_nilaiujian' => 'required|mimes:jpeg,pdf,jpg,png',
            'idjurusan' => 'required',
            'doc_ketlulus' => 'required|mimes:jpeg,pdf,jpg,png',
            'doc_foto' => 'required|mimes:jpeg,pdf,jpg,png',
            'doc_lainnya' => 'mimes:jpeg,pdf,jpg,png',
        ], [
            'nik.required' => 'NIK harus diisi',
            'tgllahir.required' => 'Tanggal Lahir harus diisi',
            'nmlengkap.required' => 'Nama harus diisi',
            'nisn.required' => 'NISN  harus diisi',
            'alamat.required' => 'Alamat  harus diisi',
            'notelp_siswa.required' => 'No Telepon Siswa harus diisi',
            'tmplahir.required' => 'Tempat Lahir harus diisi',
            'jnskelamin.required' => 'Jenis Kelamin harus diisi',
            'agama.required' => 'Agama harus diisi',
            'asal_sekolah.required' => 'Asal Sekolah harus diisi',
            'alamat_sekolah.required' => 'Alamat Sekolah harus diisi',
            'nmortu.required' => 'Nama Orang Tua  harus diisi',
            'alamat_ortu.required' => 'Alamat Orang Tua harus diisi',
            'pekerjaan_ortu.required' => 'Pekerjaan Orang Tua harus diisi',
            'notlp_ortu.required' => 'No Telepon Orang Tua harus diisi',
            'nilai_bindo.required' => 'Nilai Bahasa Indonesia harus diisi',
            'nilai_binggris.required' => 'Nilai Bahasa Inggris harus diisi',
            'nilai_mtk.required' => 'Nilai Matematika harus diisi',
            'nilai_ipa.required' => 'Nilai IPA harus diisi',
            'doc_nilaiujian.required' => 'Scan Document Nilai harus diupload dengan format jpeg,pdf,jpg,png',
            'doc_nilaiujian.mimes' => 'doc_nilaiujian Format yang diperbolehkan jpeg,pdf,jpg',
            'idjurusan.required' => 'Pilihan Jurusan harus diisi',
            'doc_ketlulus.required' => 'Document Surat Keterangan Lulus harus diupload dengan format jpeg,pdf,jpg,png',
            'doc_ketlulus.mimes' => 'doc_ketlulus Format yang diperbolehkan jpeg,pdf,jpg',
            'doc_foto.required' => 'doc_foto Document Foto harus diupload dengan format jpeg,pdf,jpg,png',
            'doc_foto.mimes' => 'doc_foto Format yang diperbolehkan jpeg,pdf,jpg,png',

        ]);

        $nopendaftaran = Helper::IDGenerator(new ModelFormPendaftaran, 'nopendaftaran', 2, 'PPDB23');
       
        $data = [
            'nopendaftaran' => $request->$nopendaftaran->nopendaftaran ?? $nopendaftaran,
            'nik' => $request->nik,
            'tgllahir' => $request->tgllahir,
            'tmplahir' => $request->tmplahir,
            'nmlengkap' => $request->nmlengkap,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'notelp_siswa' => $request->notelp_siswa,
            'jnskelamin' => $request->jnskelamin,
            'agama' => $request->agama,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'nmortu' => $request->nmortu,
            'alamat_ortu' => $request->alamat_ortu,
            'pekerjaan_ortu' => $request->pekerjaan_ortu,
            'notlp_ortu' => $request->notlp_ortu,
            'nilai_bindo' => $request->nilai_bindo,
            'nilai_binggris' => $request->nilai_binggris,
            'nilai_mtk' => $request->nilai_mtk,
            'nilai_ipa' => $request->nilai_ipa,
            'doc_nilaiujian' => $request->file('doc_nilaiujian')->store('public'),
            'idjurusan' => $request->idjurusan,
            'doc_ketlulus' => $request->file('doc_ketlulus')->store('public'),
            'doc_foto' => $request->file('doc_foto')->store('public'),
            'doc_lainnya' => $request->file('doc_lainnya')->store('public'),
        ];

        ModelFormPendaftaran::create($data);

        return redirect('siswa')->with('Berhasil melakukan registrasi');
    }

    public function pendaftaran()
    {
        return view('siswa/pendaftaran_siswa');
    }
}
