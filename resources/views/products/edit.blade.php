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
    <h1>EDIT PRODUCT!!!</h1>
    <a class="btn btn-primary" style="margin: 10px 10px 10px 0px" href="{{ route('product.index') }}">DATA</a>

    <div>
        <form action="{{ route('product.update', ['product' => $product]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="">Name</label>
                <input type="text" name="name" id="" placeholder="Name" value="{{ $product->name }}">
            </div>

            <div>
                <label for="">Quantity</label>
                <input type="text" name="quantity" id="" placeholder="Quantity"
                    value="{{ $product->quantity }}"">
            </div>

            <div>
                <label for="">Price</label>
                <input type="text" name="price" id="" placeholder="Price"value="{{ $product->price }}"">
            </div>

            <div>
                <label for="">Description</label>
                <input type="text" name="description" id="" placeholder="Description" value="{{ $product->description }}">
            </div>
            <button class="btn btn-success" type="submit"
                    value="update">Update</button>
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
