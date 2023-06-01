<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is Index</h1>
    <div>
        @if(session()->has('success'))
        <div> {{ session('success') }} </div>
        @endif
    </div>
    <div>
        <a href="{{ route('pro.create') }}">Create a Product</a>
    </div><br>
    
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->brand }}</td>
                <td>
                    <a href="{{ route('pro.edit', ['product' => $product])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('pro.delete', ['product'=> $product]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>