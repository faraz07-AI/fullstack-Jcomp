<?php
  session_start();
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
  <a href="my.html" class="myclass">career</a>
   <nav>
     <ul>
     <li><a href="index.php">HOME</a></li>
     <li><a href="#">PORTFOLIC</a></li>
     <li><a href="#">ABOUT ME</a></li>
     <li><a href="#">CONTACT US</a></li>
    </ul>
  <div>
   <?php
     if(isset($_SESSION['uid'])){
         echo '<form action="logout.php" method="post">
        <button type="submit" name="logout-submit" class="mycla">Logout</button>
       </form>';
      }
     
     else{
        echo '<form action="login.php" method="post">
       <input class="login" type="text"  name="mailuid" placeholder="username/E-mail">
       <input class="password"type="password"  name="pwd" placeholder="password">
      <button type="submit" name="login-submit" class="myclas">Login</button>
      </form>
      <t><a href="signup.php" class="header-signup">signup</a></t>';
         }
    ?>
   </div>
   </nav>
</header>
</body>
</html>
    