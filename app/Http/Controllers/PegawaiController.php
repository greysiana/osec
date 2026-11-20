<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::with('jabatan')
        ->select(
            'nama',
            'username',
            'id_jabatan',
            'status'
        )->get();
        $pegawaiTetap = Pegawai::where('status_kepegawaian','tetap')->count();
        $pegawaiKontrak = Pegawai::where('status_kepegawaian','kontrak')->count();
        $pegawaiMagang = Pegawai::where('status_kepegawaian','magang')->count();
        return view('admin.data-pegawai', compact('pegawai', 'pegawaiTetap', 'pegawaiKontrak', 'pegawaiMagang'));
    }

    public function create()
    {
        $jabatan = Jabatan::all();
        return view('admin.data-pegawai.input-pegawai', compact('jabatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'id_jabatan' => 'required|exists:jabatan,id_jabatan',
            'status_kepegawaian' => 'required|in:tetap,kontrak,magang',
            'status' => 'required|in:aktif,tidak_aktif',
            'tanggal_masuk' => 'required|date',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $pegawaiTerakhir = Pegawai::orderBy('id_pegawai','desc')->first();
        $nomor = $pegawaiTerakhir ? (int) substr($pegawaiTerakhir->kode_pegawai, 4) + 1 : 1;
        $kodePegawai = 'PGWC' . str_pad($nomor, 3, '0', STR_PAD_LEFT);

        $namaDepan = strtolower(explode(' ', trim($request->nama))[0]);
        $username = $namaDepan . str_pad($nomor,3,'0', STR_PAD_LEFT);

        Pegawai::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_jabatan' => $request->id_jabatan,
            'kode_pegawai' => $kodePegawai,
            'username' => $username,
            'status_kepegawaian' => $request->status_kepegawaian,
            'status' => $request->status,
            'tanggal_masuk' => $request->tanggal_masuk,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.data-pegawai')->with('success', 'Data pegawai berhasil ditambahkan.');
    }
}
