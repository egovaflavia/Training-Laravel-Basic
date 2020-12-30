<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillabel = ['nama'];

    public function hadiah()
    {
        return $this->belongsToMany('App\Hadiah');
    }
}
