<?php
if(isset($_POST["submit"]))
{

require 'dbc.inc.php';

$uname=$_POST['username'];
$email=$_POST['categoryname'];
$address=$_POST['prisonname'];
$country=$_POST['description'];


if(empty($uname)||empty($email)){
header("Location: ../includes/addprison.php?error=emptydfields&uname");
exit();
}

else if(!preg_match("/^[a-zA-Z0-9]*$/",$uname)){
header("Location: ../includes/addprison.php?error=invaliduname&ename");
exit();
}
   else{
      $sql="SELECT username FROM prison WHERE username='$uname'";
      $stmt=mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location: ../includes/addprison.php?error=sqlerror");
       exit();
        }
      else {
      mysqli_stmt_bind_param($stmt,"s",$uname);
       mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
       $checkresult=mysqli_stmt_num_rows($stmt);
   if($checkresult >0){
    header("Location: ../includes/addprison.php?error=usertaken&ename");
    exit();
    }
   else
   {
     $sql="INSERT INTO prison(username,categroy,prisonname,description) VALUES('$uname','$email','$address','$country');";
    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
     header("Location: ../includes/addprison.php?error=sqlerror");
     exit();
      }
     else {
      
       mysqli_stmt_bind_param($stmt,"ssss",$uname,$email,$address,$country);
        mysqli_stmt_execute($stmt);
       header("Location: ../includes/addprison.php?addingsuccess=success");
       exit();
      }

    }

   }

}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else{
header("Location../includes/addprison.php");
exit();
}
