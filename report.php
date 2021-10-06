
<?php

if(isset($_POST['submit'])){

require 'dbc.inc.php';

$username=$_POST['place'];

  if(empty($username)){
   header("Location: ../includes/criminalreport.php?error=emptyfields");
   exit();
   }
   else{
     $sql="SELECT * FROM userlist WHERE username='$username'";
     $result=mysqli_query($conn,$sql);
      $resultcheck=mysqli_num_rows($result);
      if($resultcheck >0){
        while($row=mysqli_fetch_assoc($result)){
              echo "<table border='1' cellpadding='10'>";
              echo "<tr><th>username</th><th>email id</th><th>mobilenumber</th><th>height</th><th>weight</th><th>date</th><th>address</th><th>country</th><th>state</th></tr>";
              echo "<tr>";
              echo "<td> ".$row['username']."</td>";
              echo "<td>".$row['emailid']."</td>";
              echo "<td>".$row['mobilenumber']."</td>";
              echo "<td>".$row['height']."</td>";
              echo "<td>".$row['weight']."</td>";
              echo "<td>".$row['u_date']."</td>";
              echo "<td>".$row['address']."</td>";
               echo "<td>".$row['country']."</td>";
               echo "<td>".$row['state']."</td>";
              echo "</tr>";
              echo"</table>";
         exit();
         }     
        }
       else{
       header("Location: ../includes/criminalreport.php?error=nouser");
       exit();

     }

      }
      
   }
   
else{
     header("Location: ../includes/criminalreport.php");
     exit();
}
