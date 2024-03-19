<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>Product list</h2>
    <a href="{{ url('/product-create') }}" class="btn btn-success">Add New</a>
<table class="table table-hover d-flex">
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>price</th>
        <th>Action</th>
    </tr>

    @foreach($products as $key => $pro)
    <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $pro->name }}</td>
        <td>{{ $pro->price }}</td>
        <td>edit delete</td>
    </tr>
    @endforeach
</table>
</body>
</html>




