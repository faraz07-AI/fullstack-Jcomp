

<?php
  require "header.php";
?>

   <main>
        <link rel="stylesheet" href="ind.css">
        <?php
          if(isset($_SESSION['uid'])){
           echo '<p><h1><center> do you wanna really log out !!!!.if so please press the log out button on the top.<p>and thank u for visiting our website!!</p> have a great day</center></h1></p>';
          }         
      else{
        echo '<p><h1><center>you are logged out!!!</center></h1></p>';
         }
       ?>
    </main>

<?php
  require "footer.php";
?>
