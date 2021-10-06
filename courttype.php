<html>
<body>

<p><h1><font color="red">Court entry FORM</font></h1></p>
<body style="background-color:grey;"> 
<form action="submitcourttype.php" method="post" >
<table style="width:40%" align="center" border=0 cellspacing=4>
<tr><td>
<p>
<label><b>court type</b></label></td></tr><tr><td>
<select name="court" id="f2">
<option value="supreme court">supreme court</option>
<option value="high court">high court</option>
<option value="district court">district court</option>
<option value="subordinate court">suboridinate court</option>
</select></td></tr></p>
<tr><td>
<label><b>username</b></label></td></tr><tr><td>
<input type="text" placeholder="enter court name" name="courtname" id="f3" required></td></tr></p>
<tr><td><label><b>place</b></label></td></tr><tr><td>
<input type="text" placeholder="enter the place" name="placename" id="f4" required></tr></td></p>
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