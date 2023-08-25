<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function auth()
    {
        return view('admin/login_admin');
    }
    public function login(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'password' => 'required',
            ],
            [
                'name.required' => 'Username Wajib Diisi',
                'password.required' => 'Password Wajib Diisi'
            ]
        );

        $infologin = [
            'name' => $request->name,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            } elseif (Auth::user()->role == 'kepsek') {
                return redirect('kepsek');
            }
        } else {
            return redirect('auth')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('auth');
    }
    public function admin()
    {
        // dd(auth()->user());
        return view('admin/dashboard_admin');
    }
    public function kepsek()
    {
        return view('admin/dashboard_admin');
    }
    public function dashboard()
    {
        // dd(auth()->user());
        return view('admin/dashboard_admin');
    }
    public function daftarsiswa()
    {
        return view('admin/daftar_calon_siswa');
    }
    public function masterpetunjuk()
    {
        return view('admin/m_petunjuk');
    }
    public function masterinformasi()
    {
        return view('admin/master_informasi');
    }
}
