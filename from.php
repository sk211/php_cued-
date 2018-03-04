<?php 

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$title = $_POST['title'];
 	$price = $_POST['price'];
	$con = mysqli_connect('localhost', 'root', '', 'shop');
	$con->query("insert into products (title, price) values ('$title', '$price')");
	header("Location: /");	
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="bootstrap.min.css">
 </head>
 <body>
 	<div class="container">
 		<div class="card">
 			<div class="card-header">
 				<h2>Add a products</h2>
 				<a href="index.php" class="btn btn-primary">Home page</a>
 			</div>
 			<div class="card-body">
 				<form method="post">
 					<div class="form-group">
 						<label for="title">Title</label>
 						<input type="text" name="title" id="title" class="form-control">
 					</div>
 					<div class="form-gropu">
 						<label for="price">Price</label>
 						<input type="text" name="price" id="price" class="form-control">
 					</div>
 					<div class="form-group">
 						<button type="submit" class="btn btn-outline-success">Add a Product</button>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </body>
 </html>