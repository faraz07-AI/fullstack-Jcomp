<html>
<head>
<style>
body {
    background: url("ph.jfif") no-repeat center center fixed;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
}
.cha {
text-align:center;
}
</style>

</head>

<body>
<form action="submitc.php"  method="post">

<table style="width:40%"  border=0  align="center"  cellspacing=5>
<tr><td><p><h1><font color="red">CRIMINAL REGISTRATION FORM</font></h1></p></tr></td>
<tr>
<td>
<p><label><b>name</b></label></td><td>
<input type="username" placeholder="enter name" name="username"  id="f1" required></p>
</td></tr>
<tr>
<td>
<p><label><b>mobile number</b></label></td><td>
<input type="number" placeholder="enter number" name="mobilenumber" id="f2" required></p>
</td></tr>
<tr>
<td>
<p><label><b>height</b></label></td><td>
<input type="double" placeholder="enter number" name="heigth" id="f3" min="0" value="0" step="any"  required></p>
</td></tr>
<tr><td>
<p><label><b>weight</b></label></td><td>
<input type="double" placeholder="enter weight" name="weight" id="f4" min="0" value="0" step="any" required></p>
</td></tr>
<tr>
<td>
<p><label><b>email</b></label></td><td>
<input type="email" placeholder="enter email" name="email" id="f5"  required></p>
</td></tr>
<tr><td>
<p><label><b>date of birth</b></label></td><td>
<input type="date" placeholder="enter date of birth" name="date" id="f6"  required></p>
</tr></td>
<tr><td>
<p><label><b>address</b></label></td><td>
<textarea name="address" form="usrform" id="f7" >enter the address...........</textarea></p>
</td></tr>
<tr><td>
<p><label><b>country<b></td><td>
<select id="f8" name="country">
<option value="india">india</option>
<option value="china">china</option>
     <option value="japan">japan</option>
     <option value="russia">russia</option>
     <option value="north korea">northkorea</option>
     <option value="south korea">southkorea</option>
     <option value="pakistan">pakistan</option>
     <option value="srilanka">srilanka</option>
     <option value="australia">austraila</option>
     <option value="england">england</option>
     <option value="america">america</option>    
</select></p>
</td></tr>
<tr><td>
<p>
<label for="state"><b>state</b></label></td><td>
<select id="f9" name="state">
     <option value="uttar pradesh"> uttar pradesh</option>
     <option value="kerala"> kerala</option>
     <option value="maharashtra">maharashtra</option>
     <option value="rajasthan">rajasthan</option>
     <option value="tamil nadu">tamilnadu</option>
     <option value="jammu and kashmir">jammuandkashmir </option>
     <option value="karanataka">karanataka</option>
     <option value="gujarat">gujarat</option>
     <option value="punjab">punjab</option>
     <option value="bihar">bihar</option>
     <option value="andra pradesh"> andra pradesh</option>
     <option value="goa"> goa</option>
     <option value="telangana"> telengana</option>
     <option value="madhya pradesh">madhyapradesh</option>
     <option value="west bengal"> westbengal</option>
     <option value="haryana"> haryana</option>
     <option value="odisha">odisha</option>
     <option value="jharkhand"> jarkhand</option>
     <option value="nagaland"> nagaland</option>
     <option value="assam"> assam</option>
     <option value="manipur">manipur</option>
     <option value="uttarakhand">uttarakhand</option>
     <option value="himachal pradesh">himachalpradesh</option>
     <option value="chattishgarh"> chhattishgarh</option>
     <option value="tripura"> tripura</option>
     <option value="sikkim">sikkim</option>
     <option value="arunachal pradesh"> arunachalpradesh</option>
     <option value="megalaya">megalaya</option>
</select>
</td></tr>
<tr>
<td>
</p>
<tr>
<td><div class="cha"><button type="submit" name="submit" >submit</button>
<button type="button"  onclick="reset()">reset</button>
</td>
</tr>
</table>
</div>
<script>
function reset(){
var a=document.getElementById("f1").value;
var b=document.getElementById("f2").value;
var c=document.getElementById("f3").value;
var d=document.getElementById("f4").value;
var e=document.getElementById("f5").value;
var f=document.getElementById("f6").value;
var g=document.getElementById("f7").value;
var h=document.getElementById("f8").value;
var i=document.getElementById("f9").value;
if(a==""||b==""||c==""||d==""||e==""||f==""||g==""||h==""||i==""){
alert("please fill the details mentioned");
}

else{
a="";
b="";
c="";
d="";
e="";
f="";
g="";
h="";
i="";
document.getElementById("f1").value=a;
document.getElementById("f2").value=b;
document.getElementById("f3").value=c;
document.getElementById("f4").value=d;
document.getElementById("f5").value=e;
document.getElementById("f6").value=f;
document.getElementById("f7").value=g;
document.getElementById("f8").value=h;
document.getElementById("f9").value=i;
}
}
</script>
</form>
</body>
</html>