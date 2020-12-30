<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $fillable = ['nomor_telepon', 'pengguna_id'];

    public function pengguna()
    {
        return $this->belongsTo('App\Pengguna');
    }
}
