<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function proses(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required'
        ]);

        $file = $request->file('file');
        echo "File Name : " . $file->getClientOriginalName();
        echo "<br>";
        echo "File Ext : " . $file->getClientOriginalExtension();
        echo "<br>";
        echo "File Real Path : " . $file->getRealPath();
        echo "<br>";
        echo "File Size : " . $file->getSize();
        echo "<br>";
        echo "File MIME Type : " . $file->getMimeType();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $file->getClientOriginalName());
    }
}
