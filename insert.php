<?php 
 
 	$title = $_POST['title'];
 	$price = $_POST['price'];
	$con = mysqli_connect('localhost', 'root', '', 'shop');
	$mysql =("insert into products (title, price) values('$title', '$price')");

 ?>