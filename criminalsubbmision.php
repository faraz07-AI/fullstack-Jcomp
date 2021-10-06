<?php


include_once 'dba.inc.php';

$uname=$_POST['uname'];
$email=$_POST['email'];
$mobilenum=$_POST['mobilenum'];
$height=$_POST['height'];
$weigth=$_POST['weigth'];
$date=$_POST['date'];
$address=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];


$sql="INSERT INTO users (idusers,username,emailid,mobilenumber,height,weight,u_date,address,country,state) VALUES('$uname','$email','$mobilenum','$height','$weigth','$date','$address','$country','$state');";
mysqli_query($conn,$sql);

header("Location: ../includes/addcriminals.php?submit=success");