<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('customer.store') }}" method="post">
        @csrf

        <input type="text" name="nama_customer" placeholder="Masukan nama customer">
        <input type="text" name="alamat" placeholder="Masukan alamat customer">
        <select name="jenis_kelamin">
            <option value="L">Laki Laki</option>
            <option value="P">Perempuan</option>
        </select>
        <button type="submit">submit</button>
    </form>
</body>

</html>
