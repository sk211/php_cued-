<?php 
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'shop');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title=$_POST['title'];
	$price = $_POST['price'];
	$con->query("update products set title ='$title', price='$price' where id=$id ");
	header('location: /');
}
$products = $con->query("select * from products where id = $id");
$product = $products->fetch_object();


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit page</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="bg-info">
			<h2><?php echo $product->title ?></h2>
		</div>
		<form method="post" class="mt-3">
			<div class="form-group">
			<label for="title">Title</label>
			<input value="<?php echo $product->title ?>" class="form-control" id="title" name="title"	type="text" >
		</div>
		<div class="from-group">
			<label for="price">price</label>
			<input value="<?php echo $product->price ?>" class="form-control" id="price" name="price"	type="text" >
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-warning">update product</button></div>
			</form>
	</div>
</body>
</html>