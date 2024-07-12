<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>CREATE PRODUCT!!!</h1>
    <a class="btn btn-primary" style="margin: 10px 10px 10px 0px" href="{{ route('product.index') }}">DATA</a>
    <div>
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" id="" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="">Quantity</label>
                <input class="form-control" type="text" name="quantity" id="" placeholder="Quantity">
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input class="form-control" type="text" name="price" id="" placeholder="Price">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <input class="form-control" type="text" name="description" id="" placeholder="Description">
            </div>
            <button style="margin: 10px 0px 10px 10px" class="btn btn-primary" type="submit"
                value="SAVE">SAVE</button>
        </form>
    </div>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>

</html>
