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
    <a href="/pegawai/tambah" class="btn btn-primary my-3">Tambah</a>
    <form action="/pegawai/cari" method="GET">
        <div class="form-group">
            <label for="cari">Cari</label>
            <input type="text" class=" col-md-4 form-control" name="cari" id="cari">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Cari</button>
        </div>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($pegawai))
            @foreach($pegawai as $no => $row)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jabatan }}</td>
                <td>{{ $row->umur }}</td>
                <td>{{ $row->alamat }}</td>
                <td width="200">
                    <a href="pegawai/{{ $row->id }}/edit" class="btn btn-warning">Edit</a>
                    <a href="pegawai/{{ $row->id }}/delete" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <th colspan="5">Data Kosong</th>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="info">
        Halaman : {{ $pegawai->currentPage() }} <br>
        Jumlah : {{ $pegawai->total() }} <br>
        Data per halaman : {{ $pegawai->perPage() }} <br>
        <br>
    </div>
    {{ $pegawai->links() }}
</body>

</html>
