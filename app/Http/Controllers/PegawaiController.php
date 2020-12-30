<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use PDF;

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

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);

        return view('pegawai_edit', compact('pegawai'));
    }

    public function update($id, Request $request)
    {
        $this->validate(
            $request,
            [
                'nama' => 'required',
                'alamat' => 'required',
            ]
        );

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();

        return redirect('/pegawai');
    }

    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect('/pegawai');
    }

    public function cetak()
    {
        $pegawai = Pegawai::all();
        $pdf = PDF::loadView('pegawai_pdf', compact('pegawai'));
        return $pdf->download('laporan-pegawai-pdf');
    }
}
