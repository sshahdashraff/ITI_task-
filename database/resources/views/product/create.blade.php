<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="product_name">Product Name</label>
        <input type="text" name="product_name" id="product_name" value="{{ old('product_name') }}"><br>

        <label for="product_price">Product Price</label>
        <input type="number" name="product_price" id="product_price" value="{{ old('product_price') }}"><br>

        <label for="product_availability">product availability</label>
        <input type="text" name="product_availability" id="product_availability"
            value="{{ old('product_availability') }}">
        <br>

        <label for="category_id">Category ID</label>
        <input type="number" name="category_id" id="category_id" value="{{ old('category_id') }}"><br>
        <!-- <input type="file" name="photo"><br> -->

        <input type="submit">
        @if ($errors->any())
        <div>

            @foreach ($errors->all() as $error)
            <h2> {{ $error }}</h2>
            @endforeach
        </div>
        @endif
    </form>
</body>


</html>
