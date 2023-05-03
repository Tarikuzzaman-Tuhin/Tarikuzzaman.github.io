<?php
function sendOTP($email, $otp){
    require('phpmailer/class.phpmailer.php');
    require('phpmailer/class.smtp.php');

    $message_body= "One Time password for PHP login authentication is:<br/><br/>". $otp;
    $mail= new PHPMailer();
    $mail->AddReplyTo('farhan.alvi.0310@gmail.com', "Farhan");
                            $mail-> SetFrom('farhan.alvi.0310@gmail.com', "Farhan");
                            $mail->AddAddress($email);
                            $mail->Subject= "OTP to log in";
                            $mail->MsgHTML($message_body);
                            $result=$mail->Send();
                            if(!$result){
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            }else{
                                return $result;
                            }
}

?>