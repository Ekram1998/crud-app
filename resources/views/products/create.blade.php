<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <h1>Create a Product</h1>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Your Name">
        </div>

        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" placeholder="Enter Quentity">
        </div>

        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Enter Price">
        </div>

        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Write Description">
        </div>
        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>
</html>