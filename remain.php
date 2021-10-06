<?php
 require "header.php";
?>

    <html>
     <head>
     <style>
        .tab{
   margin-top:20px;
 border:1px solid white;
   font-family:Arial, Helvetica, sans-serif;
   font-style:italic;
   color:black;
   font-size:lighter;
   margin-left:auto;
   margin-right:auto;
   box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   background-color:rgb(240, 240, 240);
   border-radius:20px;
}
 .butt{
width:100%;
border-radius:10px;
height:50px;
background-color:black;
color:white;
text-align:center;
}
body{
background-color:snow;
}
.class{
margin-left:135px;
text-align:center;
border-radius:15px;
width:70%;
height:50px;
}
</style>
</head>
    <body>
<html>
     <head>
     <style>
        .tab{
   margin-top:20px;
 border:1px solid white;
   font-family:Arial, Helvetica, sans-serif;
   font-style:italic;
   color:black;
   font-size:lighter;
   margin-left:auto;
   margin-right:auto;
   box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   background-color:rgb(240, 240, 240);
   border-radius:20px;
}
 .butt{
width:100%;
border-radius:10px;
height:50px;
background-color:black;
color:white;
text-align:center;
}
body{
background-color:snow;
}
.class{
margin-left:135px;
text-align:center;
border-radius:15px;
width:70%;
height:50px;
}
</style>
</head>
    <body>
   <form action ="reset-password.inc.php"  method="POST">
   <table style="width:70%" cellspacing=2>
   <tr><td><input type = "hidden"  class="class" name="selector" value="<?php echo $selector?>" ></td></tr>
   <tr><td><input type = "hidden"  class="class" name="validate" value="<?php echo $validate ?>" ></td></tr>
   <tr><td><input type = "password"  class="class" name="password" placeholder="enter the password"></td></tr>
    <tr><td><input type = "password" class="class" name="repeat-password" placeholder="enter the repeate password"></td></tr>
   <tr><td> <button type="submit" class="butt" name="submit">submit</button></td></tr>
     </table>
     </form>
       </body>
          </html>
         

