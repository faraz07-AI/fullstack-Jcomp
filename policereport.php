<html>
<head>
<title>my web application</title>
<style>

.place{
border:1px solid black;
border-radius:15px;
text-align:center;
}
.button{
background-color:black;
border-radius:15px;
color:white;
text-align:center;
}
.place:hover{
width:250px;
}
</style>
</head>
<body>
<form action="polreport.php" method="post">
<input type="text" placeholder="search here" class="place" name="place">
<button type="submit" name="submit" class="button" >search</button>
</form>
</body>
</html>