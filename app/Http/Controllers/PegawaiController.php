<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        // Mengambil data pegawai dengan model eloquent
        $pegawai = Pegawai::all();
        // Mengirim data ke view
        return view('pegawai', compact('pegawai'));
    }

    public function tambah()
    {
        return view('pegawai_tambah');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama' => 'required',
                'alamat' => 'required',
            ]
        );

        Pegawai::create(
            [
                'nama' => $request->nama,
                'alamat' => $request->alamat,
            ]
        );

        return redirect('/pegawai');
    }
}
