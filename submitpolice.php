<?php
if(isset($_POST["submit"]))
{

require 'dbc.inc.php';

$uname=$_POST['username'];
$email=$_POST['email'];
$mobilenum=$_POST['mobilenumber'];
$height=$_POST['height'];
$weigth=$_POST['weigth'];
$date=$_POST['date'];
$address=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];

if(empty($uname)||empty($email)){
header("Location: ../includes/addpolice.php?error=emptydfields&uname");
exit();
}

else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/",$uname)){
header("Location: ../includes/addpolice.php?error=invalidename&duname");
exit();
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
header("Location: ../includes/addpolice.php?error=invalidemail&uname");
exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/",$uname)){
header("Location: ../includes/addpolice.php?error=invaliduname&ename");
exit();
}
   else{
      $sql="SELECT username FROM police WHERE username='$username'";
      $stmt=mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location: ../includes/addpolice.php?error=sqlerror");
       exit();
        }
      else {
      mysqli_stmt_bind_param($stmt,"s",$uname);
       mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
       $checkresult=mysqli_stmt_num_rows($stmt);
   if($checkresult >0){
    header("Location: ../includes/addpolice.php?error=usertaken&ename");
    exit();
    }
   else
   {
     $sql="INSERT INTO police(username,emailid,mobilenumber,height,weight,u_date,address,country,state) VALUES('$uname','$email','$mobilenum','$height','$weigth','$date','$address','$country','$state');";
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
     header("Location: ../includes/addpolice.php?error=sqlerror");
     exit();
      }
     else {
      
      mysqli_stmt_bind_param($stmt,"sssssssss",$uname,$email,$mobilenum,$height,$weigth,$date,$address,$country,$state);
      mysqli_stmt_execute($stmt);
       header("Location: ../includes/addpolice.php?addingsuccess=success");
       exit();
      }

    }

   }

}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else{
header("Location../includes/addpolice.php");
exit();
}
