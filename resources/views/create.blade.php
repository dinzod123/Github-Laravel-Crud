<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Page</h1>
    <div>
		@if($errors->any())
		<ul>
			@foreach($errors->all() as $error)
				<li> {{$error}} </li>
			@endforeach
		</ul>
		@endif
	</div>
    <form action="{{ route('pro.store')}}" method="post">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div><label>Brand</label>
            <input type="text" name="brand" placeholder="Brand">
        </div>
        <div>
            <input type="submit" value="Save a new Product"/>
        </div>
    </form>

</body>
</html>