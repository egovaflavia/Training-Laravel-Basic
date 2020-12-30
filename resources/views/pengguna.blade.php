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
    <h1>Data Pegawai</h1>
    <div class="body">
        <div class="card-body">
            <a href="/pegawai/tambah" class="btn btn-primary my-3">Tambah</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nomor Telpon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengguna as $no => $p)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->telepon->nomor_telepon }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
