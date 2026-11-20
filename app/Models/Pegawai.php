<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'id_jabatan',
        'kode_pegawai',
        'status_kepegawaian',
        'status',
        'tanggal_masuk',
        'username',
        'password'
    ];
    protected $hidden = [
        'password'
    ];
    public function jabatan()
    {
        return $this->belongsTo(
            Jabatan::class,
            'id_jabatan',
            'id_jabatan'
        );
    }
}
