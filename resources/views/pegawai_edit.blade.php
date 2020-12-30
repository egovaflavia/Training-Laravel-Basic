<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="container">
    <div class="mt-5"></div>
    <h1>Edit Data Pegawai</h1>
    <a href="/pegawai" class="btn btn-primary my-5">Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="/pegawai/update/{{ $pegawai->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama') }}
                    </div>
                    @endif
                    <label for="">Nama</label>
                    <input value="{{ $pegawai->nama }}" type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    @if($errors->has('alamat'))
                    <div class="text-danger">
                        {{ $errors->first('alamat') }}
                    </div>
                    @endif
                    <label for="">Alamat</label>
                    <input value="{{ $pegawai->alamat }}" type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
