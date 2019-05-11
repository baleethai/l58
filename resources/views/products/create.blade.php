<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body>

	<form action="{{ route('products.store') }}" method="POST" accept-charset="utf-8">
		@csrf
		<p>Product 1: <input type="text" name="name[]" value="a"> Price : <input type="text" name="price[]" value="100"></p>
		<p>Product 2: <input type="text" name="name[]" value="b"> Price : <input type="text" name="price[]" value="200"></p>
		<input type="submit" value="submit">
	</form>

</body>
</html>