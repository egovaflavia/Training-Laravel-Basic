<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h5>
    </center>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $no => $p)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
