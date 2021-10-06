<?php
   
if(isset($_POST["SET"])){
 $selector=bin2hex(random_bytes(8));

 $token=random_bytes(32);
  
 $url="localhost/includes/create-new-password.php?selector=".$selector."&validate=".bin2hex($token);
 $expire= date("U") + 1800;
 require 'dbc.inc.php';
 
  $email= $_POST["useremail"];
if(empty($email)){
header("Location:../includes/reset-password.php?flieds=empty flieds");
exit();
}

$sql="DELETE  FROM pwdreset WHERE pwdemail=?";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "something went wrong";
    exit();
}
else{
     mysqli_stmt_bind_param($stmt,"s",$email);
     mysqli_stmt_execute($stmt);
}
  $sql="INSERT INTO pwdreset(pwdemail,pwdselector,pwdtoken,pwdexpires) VALUES(?,?,?,?);";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "something went wrong";
         exit();
        }
       else{
         $hashedtoken=password_hash($token,PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt,"ssss",$email,$selector,$hashedtoken,$expire);
          mysqli_stmt_execute($stmt);
     }  
mysqli_stmt_close($stmt);
mysqli_close($conn);
       
 
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

$mail->addAddress($email, "faraz");

$mail->From = "gurramkondafaraz@gmail.com";
$mail->FromName = "gurramkondafaraz";
$mail->Username = "gurramkondafaraz@gmail.com";                 
$mail->Password = "passwordpassword";  


$mail->isHTML(true);

$mail->Subject = "reset your password for author:faraz";
$mail->Body = "<i>message:here below the link given:</i>
  <i>header:From:gurramkondafaraz@gmail.com</i>
  <i>header:reply-to:gurramkondafaraz@gmail.com</i>
   <i>message:<a href=$url>. $url . </a></p></i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
}
else{
header("Location: ../includes/index.php");
}

?>
