<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = [
        'nama',
        'username',
        'password',
        'jabatan',
        'status'
    ];
    protected $hidden = [
        'password'
    ];
}
