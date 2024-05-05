<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>

<body>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <h1>Edit a Product</h1>
    <form action="{{route('product.update', ['product'=>$product])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Your Name" value="{{ $product->name }}">
        </div>

        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" placeholder="Enter Quentity" value="{{ $product->qty }}">
        </div>

        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Enter Price" value="{{ $product->price }}">
        </div>

        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Write Description"
                value="{{ $product->description }}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>

</html>
