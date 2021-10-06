<?php

require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';


$mail = new PHPMailer\PHPMailer\PHPMailer();
                            
//Set PHPMailer to use SMTP.
$mail->IsSMTP(); 
$mail->charset="UFT-8";           
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPDebug = 2; 
$mail->SMTPAuth = true; 
echo !extension_loaded('openssl')?"Not Available":"Available";
$mail->SMTPAutoTLs = false;                          
//Provide username and password     
                         
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = 'tls';                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->addAddress("gurramkondafaraz@gmail.com", "faraz");

$mail->From = "gurramkondafaraz@gmail.com";
$mail->FromName = "gurramkondafaraz";
$mail->Username = "gurramkondafaraz@gmail.com";                 
$mail->Password = "passwordpassword";  


$mail->isHTML(true);

$mail->Subject = "reset your password for author:faraz";
$mail->Body = "<i>message:here below the link given:</i>
  <i>header:From:gurramkondafaraz@gmail.com</i>
  <i>header:reply-to:gurramkondafaraz@gmail.com</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}