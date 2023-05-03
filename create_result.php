<?php

	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];

	$password = $_GET["password"];

	$email = $_GET["email"];

	$username = $_GET["username"];

	

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, DB ,USER, PASS)

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO users (`first_name`,`last_name`,`password`,`email`,`username`,`user_id`,9) VALUES ( $first_name, $last_name , $password,$email,$username,NULL,NULL )" )

		or die("Can not execute query");



	echo "<p>User is creating sucessfully</p>";


	echo "<p><a href=login_index.php> Go to Login page </a>";

?>