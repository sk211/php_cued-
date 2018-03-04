<?php 
$connect = mysqli_connect('localhost', 'root', '', 'shop');
$products = $connect->query('select * from products order by id desc');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="bootstrap.min.css">
 </head>
 <body  class="bg-white" >
 	<div class="container">
 		<table class="table table-bordered bg ">
 			<div class="bg-info mt-5 text-white">
 			<h3>Products list</h3>
 			<a href="from.php" class="btn btn-outline-danger mb-3">Add products</a>
 			<tr>
 				<td>Title</td>
 				<td>Price</td>
 				<td>Action</td>
 			</tr>
 			<?php while ($product= $products->fetch_object()): ?>
 			<tr>
 				<td><?php echo $product->title ?>
 					
 				</td>
 				<td><?php echo $product->price ?>
 					
 				</td>
 				<td>
 					<a href="edit.php?id=<?php echo $product->id?>" class="btn btn-success" >edit</a>
 					<a href="view.php?id=<?php echo $product->id?>" class="btn btn-danger">view</a>
 					<a onclick="return confirm('Are you sure you want to delete this document?')" href="delete.php?id=<?php echo $product->id?>" class="btn btn-primary">Delete</a>
 					
 				</td>
 			</tr>
 		<?php endwhile; ?>
 		</div>
 		</table>
 	</div>
 </body>
 </html>