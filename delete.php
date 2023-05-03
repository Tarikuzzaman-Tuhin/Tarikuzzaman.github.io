<?php

	$product_id = $_GET["product_id"];

	// $product_name = $_GET["product_name"];

	// $category= $_GET["category"];

	// $price = $_GET["price"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM cart WHERE product_id=$product_id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href='cartmenu.php'>READ all records</a>";

?>