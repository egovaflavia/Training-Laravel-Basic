<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "tblpegawai";
    protected $fillable = ['nama', 'jabatan', 'umur', 'alamat'];
}
