<?php

    include "mail_function.php";
    date_default_timezone_set("Asia/Dhaka");
$success="";
$error_message="";
$conn=mysqli_connect("localhost","root","","email_otp");

if(!empty($_POST["submit_email"])){
    $result = mysqli_query($conn, "SELECT * FROM registered_users WHERE email= '" .$_POST["email"] . "'");
    $count= mysqli_num_rows($result);
    if($count>0){
        //generate otp
        $otp= rand(100000, 999999);

        //send otp
        $mail_status= sendOTP($_POST["email"],otp);

        if($mail_status==1){
            $result= mysqli_query($conn, "INSERT INTO 
            otp_expiry(id,otp, is_expired,create_at) VALUES (NULL,'" . $otp . "', 0, '" . date(
                "Y-m-d H:i:s")."')" );
            $current_id = mysqli_insert_id($conn);


            if(!empty($current_id)){
                $success=1;
            }
        }
    } else{
        $error_message= "Email not exist!";

    }
}

if(!empty($_POST["submit_otp"])){
    $result = mysqli_query($conn, "SELECT * FROM otp_expiry WHERE otp=" . $_POST["otp"] . " AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
    $count= mysqli_num_rows($result);
    if(!empty($count)){
        $result= mysqli_query($conn, "UPDATE otp_expiry SET is_expired=1 WHERE otp='" . $_POST["otp"] . "'");
        $success=2; 
    }else {
        $success=1;
        $error_message= "Invaild OTP";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
        <label>Email:</label>
        <input type="email" name="email" placeholder="@gmail.com">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
