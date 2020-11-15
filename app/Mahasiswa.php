<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $fillable=[
        'nim_mahasiswa',
        'nama_mahasiswa',
        'alamat_mahasiswa',
    ];
}
