<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title of the document</title>
</head>

<body>

    <h1>Create a product</h1>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>

        <div>
            <label for="qty">Qty</label>
            <input type="text" name="qty" placeholder="Qty" />
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Price" />
        </div>

        <div>
            <label for="description">Price</label>
            <input type="text" name="description" placeholder="Description" />
        </div>

        <div>
            <input type="submit" value="Save a new product">
        </div>
    </form>

</body>

</html>
