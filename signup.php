<?php 
  require 'header.php';
?>

<html>
<head>
      <title>MY WEB APPLICATION</title>
    <h1><font color="red"><marquee>WELCOME TO CRIMINAL RECORD MANAGEMENT SYSTEM</marquee></font></h1>
<style>
a:link{
text-decoration:none;
color:green;
text-align:center;
}
body {
background-color:snow;
}
section{
margin-left:70%;
text-align:center;
color:black;
}

.tab{
   border:1px solid white;
   font-family:Arial, Helvetica, sans-serif;
   font-style:italic;
   color:red;
   font-size:lighter;
   margin-left:auto;
   margin-right:auto;
   box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   background-color:rgb(240, 240, 240);
   border-radius:20px;
}
.btt{
   background-color:rgb(0, 0, 0);
   color:rgb(255,255,255);
   width:150px;  
   text-align:center;
   margin-left:40%; 
   border-radius:10px;
   height:40px;
}
.btn{
   background-color:rgb(0, 0, 0);
   color:rgb(255,255,255);
   width:150px;  
   text-align:center;
   margin-left:40%; 
   border-radius:10px;
   height:40px;
}
</style>
</head>

<body>
<form action="signup.inc.php" method="post">

<table class=tab cellspacing=2>
<tr><td><section><h1>Sign up</h1></section></td></tr>


<tr><td>
<p><label><b>username</b></label></td><td>
<input type="username" placeholder="enter username" name="uname" id="f1"  required></p></td></tr>
<tr><td><p><label><b>email</b></label></td><td>
<input type="email" placeholder="enter email" name="ename" id="f2"  required></p></td></tr>
<tr><td><p><label><b>password</b></label></td><td>
<input type="password" placeholder="enter password" name="password" id="f3" required></p></td></tr>
<tr><td><p><label><b>conform password</b></label></td><td>
<input type="password" placeholder="enter password" name="repeatpassword" id="f4" required></p></td></tr>
<div>
<tr><td>
<button class=btt type="submit" name="Signup">sign up</button></td></tr>
<tr><td>
<button class=btn type="button" onclick="reset()">reset</button>
</td></tr></div>
<script>
function reset(){
var a=document.getElementById("f1").value;
var b=document.getElementById("f2").value;
var c=document.getElementById("f3").value;
var d=document.getElementById("f4").value;
if(a==""||b==""||c==""||d==""){
alert("please fill the details");
}
else{ 
a="";
b="";
c="";
d="";
document.getElementById("f1").value=a;
document.getElementById("f2").value=b;
document.getElementById("f3").value=c;
document.getElementById("f4").value=d;
}
}
</script>
<tr><td><a href="reset-password.php">forget password?</a></td></tr>
<tr><td>
 <?php
  if(isset($_GET["password"])){
     if($_GET["password"]=="succesfullyupdated"){
      echo  '<h3>yeah!check your email or gmail</h3>';
    }
  }
     ?>
</td>
</tr>
</table>
</form>
</body>
</html>

<?php
  require "footer.php";
?>