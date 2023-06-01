<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>
</div>
<form action="{{ route('pro.update',['product' => $product ])}}" method="post">
    @csrf
    @method('put')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="name">
    </div>
    <div><label>Brand</label>
        <input type="text" name="brand" placeholder="Brand">
    </div>
    <div>
        <input type="submit" value="Update Product"/>
    </div>
</form>

</body>
</html>