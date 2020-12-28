<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="container col-md-6">
    <div class="mt-5"></div>
    <h1>Tambah Data Pegawai</h1>
    <a href="pegawai" class="btn btn-primary my-3">Kembali</a>
    <form class="" action="/pegawai/edit/proses" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $pegawai->id }}">
        <div class="form-group">
            <input value="{{ $pegawai->nama }}" class="form-control" type="text" name="nama" id="nama" placeholder="nama">
        </div>
        <div class="form-group">
            <input value="{{ $pegawai->jabatan }}" class="form-control" type="text" name="jabatan" id="jabatan" placeholder="jabatan">
        </div>
        <div class="form-group">
            <input value="{{ $pegawai->umur }}" class="form-control" type="number" name="umur" id="umur" placeholder="umur">
        </div>
        <div class="form-group">
            <input value="{{ $pegawai->alamat }}" class="form-control" type="text" name="alamat" id="alamat" placeholder="alamat">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</body>

</html>
