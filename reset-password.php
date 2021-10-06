<?php 
  require 'header.php';
?>
<html>
<head>
<style>
h2,h3{
color:green;
text-align:center;
}
.tab{
   height:300px;
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
<form action="reset-request.php" method="POST">
<table style="width:70%" class="tab" cellspacing=2>

<tr><td><h2>recovery password<h2></td></tr>
<tr><td><input type="email" class="class" placeholder="enter your email please"  name="useremail">
</td></tr>
<tr><td><button type="submit" name="SET" class="butt">recovery the password by mail</button>
</td></tr>
</table>
</form>
<?php
if(isset($_GET["reset"])){
if($_GET["reset"]=="successful"){
      echo  '<h3>yeah!check your email or gmail</h3>';
 }
}
?>
</body>
</html>
<?php
  require "footer.php";
?>