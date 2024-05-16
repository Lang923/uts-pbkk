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

    <form action="{{ route('customer.update',$data) }}" method="post">
        @method('patch')
        @csrf
        <input type="text" name="nama_customer" value="{{ $data->nama_customer }}">
        <input type="text" name="alamat" value="{{ $data->alamat }}">
        <select name="jenis_kelamin">
            <option value="L">Laki Laki</option>
            <option value="P">Perempuan</option>
        </select>
        <button type="submit">submit</button>
    
    </form>
</body>
</html>