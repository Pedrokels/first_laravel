<h1>PRODUCT</h1>
<div>INDEX</div>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title of the document</title>
</head>

<body>

    <h1>Product</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>QTY</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td><a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('product.destroy', ['product' => $product]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>

        <a href="{{ route('product.create') }}">Add a data</a>
    </div>

</body>

</html>
