<html>
<head>
<title>form</title>
<center>
<h1><font face="vernada" color="light blue">PASSENGER DETAILS CONFIRMATION</font></h1>
</center>
<form action="samplemail.php" method="POST">
<br>
<label>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="varchar" size="40" name="name" required></label><br>
<p>Mail id:&nbsp;&nbsp;&nbsp;<input type="email" name="mail" required="required"<br>
<br>
<br>
Phone Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" pattern="[0-9]{10}" name="phone" required="required"></p>
<center>
<br>
<input type="submit" value="submit" name="submit">
</center>
<a href="login.php"><h1 align="right"><font face="verdana" color="sky blue">LOG OUT</font></h1></a>
</form>
</head>
</html>