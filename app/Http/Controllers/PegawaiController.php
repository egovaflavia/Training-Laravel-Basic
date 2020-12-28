<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function injek()
    {
        // Menggunakan query
        // $s = DB::table('tblpegawai')->insert([
        //     'nama' => 'Dummy',
        //     'jabatan' => 'Dummy',
        //     'umur' => 24,
        //     'alamat' => 'Dummy',
        // ]);

        // Menggunakan Eloquent
        $s = Pegawai::create([
            'nama' => 'Dummy',
            'jabatan' => 'Dummy',
            'umur' => 24,
            'alamat' => 'Dummy',
        ]);
        if ($s) {
            return 'Success';
        } else {
            return 'Failed';
        }
    }

    public function index()
    {
        // mengambil data dari tabel
        $pegawai = DB::table('tblpegawai')->get();

        return view('index', compact('pegawai'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('tblpegawai')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = DB::table('tblpegawai')->where('id', $id)->first();
        return view('edit', compact('pegawai'));
    }

    public function update(Request $request)
    {
        DB::table('tblpegawai')
            ->where('id', $request->id)
            ->update(
                [
                    'nama' => $request->nama,
                    'jabatan' => $request->jabatan,
                    'umur' => $request->umur,
                    'alamat' => $request->alamat,
                ]
            );

        return redirect('pegawai');
    }

    public function delete($id)
    {
        DB::table('tblpegawai')
            ->where('id', $id)
            ->delete();
        return redirect()->back();
    }
}
