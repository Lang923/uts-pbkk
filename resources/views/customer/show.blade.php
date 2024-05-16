<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('customer.index') }}">kembali</a>

    <h1>{{ $data->nama_customer }}</h1>
    <h1>{{ $data->alamat }}</h1>
    <h1>
        @if ($data->jenis_kelamin == 'L')
            <h1>Laki-Laki</h1>
            @else
            <h1>Perempuan</h1>
        @endif


    </h1>
</body>
</html>