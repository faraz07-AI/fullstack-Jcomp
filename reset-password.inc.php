<?php

if(isset($_POST["submit"])){


$selector=$_POST["selector"];
$validate=$_POST["validate"];
$password=$_POST["password"];
$repassword=$_POST["repeat-password"];

if(empty($password)||empty($repassword)){
header("Location: ../includes/create-new-password.php?newpassword=empty");
exit();
}
else if($password!=$repassword){
header("Location: ../includes/create-new-password.php?newpassword=passwordnotmatched");
exit();
}

$currentdate=date("U");

require 'dbc.inc.php';

$sql="SELECT * FROM pwdreset WHERE pwdselector=? OR pwdexpires >=?;";
$stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "something went wrong";
         exit();
        } else{
     mysqli_stmt_bind_param($stmt,"ss",$selector,$currentdate);
     mysqli_stmt_execute($stmt);
     
     $result=mysqli_stmt_get_result($stmt);
     if(!$row=mysqli_fetch_assoc($result)){
          echo "no result found re submit the form " ;
          exit();
       } else{
          $tokenbin=hex2bin($validate);
           $checktoken=password_verify($tokenbin,$row['pwdtoken']);
        if($checktoken===false){
            echo  "something is went wrong ";
            exit();
           } elseif ($checktoken===true){
            $tokenemail=$row['pwdemail'];
            $sql="SELECT *FROM users WHERE emailuser=?;";
           $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "something went wrong";
         exit();
        } else{
        mysqli_stmt_bind_param($stmt,"s",$tokenemail);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
       if(!$row=mysqli_fetch_assoc($result)){
          echo "no result found re submit the form " ;
         exit();       
         }else {
                       
            $sql="UPDATE users SET passuser=? WHERE emailuser=?";
             $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
             echo "something went wrong";
              exit();
               } else{

              $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt,"ss",$hashedpassword,$tokenemail);
              mysqli_stmt_execute($stmt);
             
             $sql="DELETE  FROM pwdreset WHERE pwdemail=?";
             $stmt=mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt,$sql)){
               echo "something went wrong";
             exit();
               } else{
               mysqli_stmt_bind_param($stmt,"s",$tokenemail);
                mysqli_stmt_execute($stmt);
                 header("Location: ../includes/signup.php?newpassword=succesfullyupdated");
                 exit();
                }
              }

             }
         }


}
}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
  }
else{
header("Location: ../includes/index.php");
exit();
}

?>

