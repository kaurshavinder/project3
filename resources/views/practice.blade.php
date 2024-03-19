<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


{{--<!-- blade pe do tarika 
    01. {{ route('routeName') }}

    02. {{ url('/url') }} -->--}}


    <form action="{{ url('/product-store') }}" method="post" enctype="multipart/form-data">
        @csrf 
        test1: <input type="text" name="test1"> <br>
        test2: <input type="text" name="test2"> <br>
        image: <input type="text" name="image"><br>
        <button class="btn btn-success">Save</button>
    </form>

    </form>
</body>
</html>