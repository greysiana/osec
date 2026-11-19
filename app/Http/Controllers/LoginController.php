<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cari username di database
        $pegawai = DB::table('pegawai')->where('username', $request->username)->first();

        // Periksa username dan password
        if ( $pegawai && Hash::check($request->password, $pegawai->password) && strtolower($pegawai->jabatan) === 'admin' && strtolower($pegawai->status) === 'aktif') 
        {
            // Simpan informasi login ke session
            $request->session()->regenerate();
            session([
                'admin_login' => true,
                'id_pegawai' => $pegawai->id_pegawai,
                'nama' => $pegawai->nama,
                'username' => $pegawai->username,
                'jabatan' => $pegawai->jabatan,
            ]);
            return redirect()->route('admin.data-pegawai');
        }
        return back()->with('error', 'Username atau password salah, atau akun tidak aktif/tidak memiliki akses.');
    }

    // Halaman dashboard
    public function dataPegawai()
    {
        if (!session('admin_login')) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu.');
        }
        return view('admin.data-pegawai');
    }

     public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

  
}
