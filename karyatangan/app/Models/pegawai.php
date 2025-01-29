<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $fillable = [
        'nama_pegawai',
        'jabatan',
        'foto_pegawai',
    ];
}
