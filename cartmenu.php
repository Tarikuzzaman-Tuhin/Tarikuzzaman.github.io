<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petorg.Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-paw"></i> Petorg </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#shop">shop</a>
        <a href="#services">services</a>
        <a href="#plan">plan</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="post_view.html" class="fas fa-shopping-cart"><div class="box"></div></a>

        <div class="fas fa-user" id="login-btn"></div>
    </div>


    

    <form action="" class="login-form">
        <h3>sign in</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="password" name="" placeholder="enter your password" id="" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <div class="links">
            <a href="#">forget password</a>
            <a href="#">sign up</a>
        </div>
    </form>

</header>

<!-- header section ends -->

<section id="blog-home"class="pt-5 mt-5 container">
    <h2 class="font-weight-blod-pt-5">Shopping Cart</h2>
    <hr>

	
<?php

	// $product_id = $_GET["product_id"];

	//  $product_name = $_GET["product_name"];

	//  $category= $_GET["category"];

	//  $price = $_GET["price"];

	require_once('db_connect.php');
    
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

    $results = mysqli_query($connect,"SELECT * FROM cart")
        or die("Can not connect");
	echo "<table class='ui unstackable celled collapsing table' > \n";
	echo "<thead> <tr><th>product_id</th> <th>product_name</th> <th>category</th> <th>price</th> <th>Delete</th>  </tr> </thead> <tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $product_id </td>";
		echo "<td> $product_name </td>";
        echo "<td> $category </td>";
		echo "<td> $price </td>";
		
		echo "<td> <a href = 'delete.php?product_id=$product_id'> Remove From Cart </a> </td>";
		//echo "<td> <a href = 'update_input.php?code=$code &name=$name &address=$address &phone_number=$phone_number'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody> </table> \n";

?>

</section>

<div class="button1"><a href="index.php#shop">
<button type="button1">Add more item</button>  </a></div>
<div class="button2"><a href="Home.html">
<button type="button2">Place Order</button>  </a></div>
		
	
        <script src="js/script.js"></script>

</body>
</html>