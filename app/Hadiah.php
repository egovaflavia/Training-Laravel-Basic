<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    protected $fillabel = ['nama_hadiah'];

    public function anggota()
    {
        return $this->belongsToMany('App\Anggota');
    }
}
