<html>
<body>
 
<p><h1><font color="red">PRISON FORM</font></h1></p>
<body style="background-color:grey;"> 
<form action="submitcprison.php" method="post" >
<table style="width:40%" align="center" border=0 cellspacing=4>
tr><td>
<label><b>user name</b></label></td></tr><tr><td>
<input type="text" placeholder="enter the username" name="username"  id="f1" required></td></tr></p>
<tr><td>
<label><b>category name</b></label></td></tr><tr><td>
<input type="text" placeholder="enter the username" name="categoryname"  id="f1" required></p></td></tr>
<tr><td>
<label><b>prison name</b></label></td></tr><tr><td>
<input type="text" placeholder="enter the prison name " name="prisonname" id="f2"  required></td></tr></p>
<tr><td><label><b>description</b></label></td></tr><tr><td>
<textarea name="description" form="usrform" id="f3" >enter the description..................................................................................................................................</textarea></td></tr></p>
</p>
<tr><td>
<button type="submit" name="submit">submit</button>
<button type="submit" onclick="reset()">reset</button></td></tr>
</table>
<script>
function reset(){
var a=document.getElementById("f1").value;
var b=document.getElementById("f2").value;
var c=document.getElementById("f3").value;
if(a==""||b==""||c==""){
alert("please fill the details mentioned");
}

else{
a="";
b="";
c="";
document.getElementById("f1").value=a;
document.getElementById("f2").value=b;
document.getElementById("f2").value=c;
}
}
</script>
</form>
</body>
</html>