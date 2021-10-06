<?php
//<?php 
  $database = mysqli_connect('localhost', 'root', '', 'loginsystem');
 // $username = "";
  //$email = "";
  
//include("dbc.inc.php");
if (isset($_POST['submit']))
 {
$m=$_POST['mail'];
$n=$_POST['name'];
$p=$_POST['phone'];
$sql = "INSERT INTO feedback (mail,name,password) VALUES ('$m','$n','$p')";
    $from=" ";
    $to=$_POST['mail'];
    $subject="Railway Ticket Booking";
    $message="Your Ticket has been Booked Successfully";
    if(mail($to,$subject,$message,$from)){
      echo "<h1>Your Ticket is Booked Successfully</h1>";
    }
    else{
      echo "not sent";
    }
}
?>