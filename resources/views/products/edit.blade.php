<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title of the document</title>
</head>

<body>

    <h1>Update a product</h1>
    <form method="POST" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" value="{{ $product->name }}" />
        </div>

        <div>
            <label for="qty">Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{ $product->qty }}" />
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Price" value="{{ $product->price }}" />
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Description" value="{{ $product->name }}" />
        </div>

        <div>
            <input type="submit" value="Update">
        </div>
    </form>

</body>

</html>
