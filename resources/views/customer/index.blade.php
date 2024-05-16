<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('customer.create') }}">tambah data</a>
    @foreach ($datas as $data )
    <h1>{{ $data->nama_customer}}</h1>
        <a href="{{ route('customer.show',$data) }}">detail</a>
        <a href="{{ route('customer.edit',$data) }}">edit</a>

        <form action="{{ route('customer.destroy',$data) }}" method="post">
            @method('delete')
            @csrf
        <button type="submit" >delete</button>
        </form>
    @endforeach
</body>
</html>