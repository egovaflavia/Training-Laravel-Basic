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
    <form class="" action="/pegawai/tambah/proses" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input class="form-control" type="text" name="nama" id="nama" placeholder="nama">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="jabatan" id="jabatan" placeholder="jabatan">
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="umur" id="umur" placeholder="umur">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="alamat" id="alamat" placeholder="alamat">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</body>

</html>
