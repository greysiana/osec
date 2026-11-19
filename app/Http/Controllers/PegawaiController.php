<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::select(
            'nama',
            'username',
            'jabatan',
            'status'
        )->get();
        $pegawaiTetap = Pegawai::where('status_kepegawaian','tetap')->count();
        $pegawaiKontrak = Pegawai::where('status_kepegawaian','kontrak')->count();
        $pegawaiMagang = Pegawai::where('status_kepegawaian','magang')->count();
        return view('admin.data-pegawai', compact('pegawai', 'pegawaiTetap', 'pegawaiKontrak', 'pegawaiMagang'));
    }

    public function create()
    {
        return view('admin.data-pegawai.input-pegawai');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
        ]);
    }
}
