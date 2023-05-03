<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petorg.Shop</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
        <a href="cartmenu.php" class="fas fa-shopping-cart"><div class="box"></div></a>

        <!-- <div class="fas fa-user" id="login-btn"></div> -->
            <a href="login_index.php" class="fas fa-user" id="login-btn"></a>
       
    <!-- </div> -->


    

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
            <a href="loginfile.php">sign up</a>
        </div>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3> <span>Hi</span> welcome to our petorg </h3>
        <a href="#shop" class="btn">shop now</a>
    </div>

    <img src="image/bottom_wave.png" class="wave" alt="">

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/about_img.png" alt="">
    </div>

    <div class="content">
        <h3>premium <span>pet food</span> manufacturer</h3>
        <p>  Voff have gathered Europe’s most successful natural pet food brands under one roof, spearheading the future of pet food. In our top of the range factories across Europe, Voff produces and sells natural pet food including raw (BARF), natural air-dried treats and high quality bird food that are minimally processed and made from natural ingredients.</p>
        
    </div>

</section>

<!-- about section ends -->

<!-- dog and cat food banner section starts -->

<div class="dog-food">

    <div class="image">
        <img src="Shopping/image/dog_food.png" alt="">
    </div>

    <div class="content">
        <h3> <span>air dried</span> dog food </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat iure illo, repudiandae rem porro sunt.</p>
        <div class="amount">$15.00 - $30.00</div>
        <a href="#Shop"> <img src="Shopping/image/shop_now_dog.png" alt=""> </a>
    </div>

</div>

<div class="cat-food">

    <div class="content">
        <h3> <span>air dried</span> cat food </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat iure illo, repudiandae rem porro sunt.</p>
        <div class="amount">$15.00 - $30.00</div>
        <a href="#shop"> <img src="Shopping/image/shop_now_cat.png" alt=""> </a>
    </div>

    <div class="image">
        <img src="Shopping/image/cat_food.png" alt="">
    </div>

</div>

<!-- dog and cat food banner section ends -->

<!-- shop section starts  -->

<section class="shop" id="shop">

    <h1 class="heading"> our <span> products </span> </h1>

       <?php
   
     echo '<div class="box-container">';

       
         require_once('db_connect.php');
         $connect = mysqli_connect( HOST, USER, PASS, DB )
        or die("Can not connect");

    
      $results = mysqli_query( $connect, "SELECT * FROM product" )
        or die("Can not execute query");


    //   echo "<table class='ui unstackable celled collapsing table' style='margin: 0 auto;'> \n";
    //      echo "<thead> <tr><th>code</th> <th>name</th> <th>address</th> <th>phone_number</th> <th>Delete</th> <th>Update</th> </tr> </thead> <tbody> \n";

        while( $rows = mysqli_fetch_array( $results ) ) 
     {
        extract( $rows );


        echo '<div class="box">';
        echo '<div class="icons">';
        
             echo   "<a href='cart.php?product_id=$product_id &product_name=$product_name &category=$category &price=$price' class='fas fa-shopping-cart'></a>";
             echo '<form action="Shopping/cart.php" method="get">';
               // <!--<a href="#" class="fas fa-heart"></a>  -->;
              // echo'  <a href="#" class="fas fa-eye"></a>';
           echo '</div>';
            echo '<div class="image">';
             echo   "<img src='$image' alt=''>";
            echo '</div>';
           echo '<div class="content">';
              echo "<h3>$product_name</h3>";
               echo "<div class='amount'>BDT $price</div>";
           echo '</div>';
             echo'</div>';   
             echo'</form>';     
        // echo "<tr>";
        // echo "<td> $product_id </td>";
        // echo "<td> $product_name </td>";
        // echo "<td> $category </td>";
        // echo "<td> $price</td>";
        // // echo "<td> <a href = 'delete.php?code=$code'> Delete </a> </td>";
        // // echo "<td> <a href = 'update_input.php?code=$code &name=$name &address=$address &phone_number=$phone_number'> Update </a> </td>";
        // echo "</tr> \n";
     }

        //  echo "</tbody> </table> \n";

        ?>

       

    </div>

</section>

<!-- shop section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-dog"></i>
            <h3>Boarding</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-cat"></i>
            <h3>Adoption</h3>
            <a href="Adoption/Adoption.php" class="btn">Click Here</a>
        </div>

        <div class="box">
            <i class="fas fa-bath"></i>
            <h3>spa & grooming</h3>
            <a href="../Pet org/Grooming.php" class="btn">click here</a>
        </div>

        <div class="box">
            <i class="fas fa-drumstick-bite"></i>
            <h3>healthy meal</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-baseball-ball"></i>
            <h3>activity exercise</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>medical help</h3>
            <a href="Medical Help/newindex.html" class="btn">Click here</a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- plan section starts  -->

<section class="plan" id="plan">

    <h1 class="heading"> choose a <span>plan</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 1 day </h3>
            <i class="fas fa-bicycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>$</span>50</div>
            <a href="#" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 10 days </h3>
            <i class="fas fa-motorcycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>$</span>350</div>
            <a href="#" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 30 days </h3>
            <i class="fas fa-car-side icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet grooming <span class="fas fa-check"></span> </p>
                <p> pet exercise <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>$</span>650</div>
            <a href="#" class="btn"> choose plan </a>
        </div>

    </div>

</section>

<!-- plan section ends -->

<section class="contact" id="contact">

    <div class="image">
        <img src="Shopping/image/contact_img.png" alt="">
    </div>

    <form action="">
        <h3>contact us</h3>
        <input type="text" placeholder="your name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="tumber" placeholder="your number" class="box">
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!--<section class="footer">

    <img src="image/top_wave.png" alt="">

    <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

    <div class="credit"> <span>  </span> | all rights reserved! </div>

</section>-->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>