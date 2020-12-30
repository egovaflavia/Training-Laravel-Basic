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
    <h1>Flash Session</h1>
    <div class="body">
        <div class="card-body">
            <div class="my-3">
                <a href="/flash" class="btn btn-primary">Clear</a>
                <a href="/flash/success" class="btn btn-success">Success</a>
                <a href="/flash/info" class="btn btn-info">Info</a>
                <a href="/flash/danger" class="btn btn-danger">Danger</a>
            </div>
            <h2>Notif di bawah</h2>
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
            @endif
            @if($message = Session::get('info'))
            <div class="alert alert-info">
                {{ $message }}
            </div>
            @endif
            @if($message = Session::get('danger'))
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @endif
        </div>
    </div>
</body>

</html>
