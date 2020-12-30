<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function tampil(Request $request)
    {
        if ($request->session()->has('nama')) {
            echo $request->session()->get('nama');
        } else {
            return abort(403, 'Gada Session njir');
        }
    }

    public function buat(Request $request)
    {
        $request->session()->put('nama', 'Egova');

        echo "Data telah di tambahkan ke session";
    }

    public function hapus(Request $request)
    {
        $request->session()->forget('nama');

        echo "Datah session telah di hapus";
    }
}
