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
    <h1>Upload Foto</h1>
    <div class="body">
        <div class="card-body">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($error->all as $error)
                {{ $error }}
                @endforeach
            </div>
            @endif

            <form enctype="multipart/form-data" action="/proses" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input class="form-control-file" type="file" name="file">
                </div>

                <div class="form-group">
                    <label for="Keterangan">Keterangan</label>
                    <textarea name="keterangan" id="Keterangan" class="form-control" cols="30" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Upload</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
