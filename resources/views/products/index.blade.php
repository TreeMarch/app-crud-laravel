<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>PRODUCT</h1>
    <div>INDEX PAGE</div>
    <div>
        @if (session()->has('success'))
            <div style="color: rgb(35, 176, 35)">{{ session('success') }}</div>
        @endif
    </div>
    <div>
        <a class="btn btn-primary" style="margin: 10px 10px 10px 0px" href="{{ route('product.create') }}">CREATE A
            PRODUCT</a>
    </div>
    <div>
        <table class="table table-striped">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td style="display: flex;text-align:center">
                        <button class="btn btn-info" type="submit">
                            <a style="color:#fff;underline:none"
                                href="{{ route('product.edit', ['product' => $product]) }}">EDIT</a>
                        </button>
                        <form action="{{ route('product.clear', ['product' => $product]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger type="submit">DELETE</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
