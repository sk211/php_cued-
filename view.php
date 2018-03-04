<?php 

$con = mysqli_connect('localhost', 'root', '', 'shop');
$id = $_GET['id'];
$products = $con->query("select * from products where id=$id");
$product = $products->fetch_object();

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
 				<h2>student information</h2>
 				<a href="index.php" class=" btn btn-primary" >Home page</a>
 				
 			</div>
 			<table class="table table-dark">
 				
 					
 				
 				<tr>
 					<th>Tritle</th>
 					<td><?php echo $product->title; ?></td>
 				</tr>
 				<tr>
 					<th>price</th>
 					<td><?php echo $product->price; ?></td>
 				</tr>
 			
 			</table>
 		</div>
 	</div>
 </body>
 </html>