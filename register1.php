<html>
<head>
<style>
body{
background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSJfbaEGJtPapLT1_w-Wze6Zl3fsW5La1tG0A&usqp=CAU");
background-size:cover;
}
h1{
color:white; text-align:center; 
}
td{
color:white; font-size:20px;
}
caption{
font-size:25px;color:white;
}
p{
text-align:center;
}

.box{  
  margin: 0 auto;
  justify-content: center;
  background-color:black;
  opacity: 0.8;
  border-radius: 5px;
  padding: 10px 0px 10px 20px;
  width: 50%;
  height: 5%; 
}
.box1{  
  margin: 0 auto;
  justify-content: center;
  background-color:grey;
  opacity: 0.8;
  border-radius: 5px;
  padding: 10px 0px 10px 20px;
  width: 50%;
  height:3%; 
}
h1{
  font-family: monospace, san-serif;
  text-align: center;
  font-size: 30px;
   margin: 0 auto;
   color:white;
}
.button {
  max-width:200px;
  background-color: green;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-family: inherit;
  display: flex;
  font-size: 15px;
  padding: 8px 35px 8px 35px;
  cursor: pointer;
  margin: 0 auto;
  color:white;
  weight: 50%;
}
.button3 {
  max-width:200px;
  background-color: red;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-family: inherit;
  display: flex;
  font-size: 15px;
  padding: 8px 35px 8px 35px;
  cursor: pointer;
  margin: 0 auto;
  color:white;
  weight: 50%;
}
.button1 {
  max-width:200px;
  background-color: yellow;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-family: inherit;
  display: flex;
  font-size: 15px;
  padding: 8px 35px 8px 35px;
  cursor: pointer;
  margin: 0 auto;
  color:white;
  weight: 50%;
}
</style>
<script type="text/javascript">
function pincheck()
{ 
var number = document.getElementById("pin").value;
var rel =/^[0-9]+$/;
if(!rel.test(number))
{ 
document.getElementById("message4").style.color="red";
document.getElementById("message4").innerHTML="<strong>*Invalid pin</strong>";
return true;
}
else {
document.getElementById("message4").style.color="black";
document.getElementById("message4").innerHTML="<strong>valid</strong>";
return false;
}	
}  

function phonecheck()
{ 
var number = document.getElementById("phone").value;
var rel =/^[0-9]+$/;
if(!rel.test(number))
{ 
document.getElementById("message3").style.color="red";
document.getElementById("message3").innerHTML="<strong>*Invalid number</strong>";
return true;
}
else {
document.getElementById("message3").style.color="black";
document.getElementById("message3").innerHTML="<strong>valid</strong>";
return false;
}	
}

function checkFirst()
{ 
var fName = document.getElementById("fname").value;
var rel = /^[a-zA-Z\s\'\-]{2,15}$/;
if(!rel.test(fName))
{ 
document.getElementById("message1").style.color="red";
document.getElementById("message1").innerHTML="<strong>*Invalid name</strong>";
return true;
}
else {
document.getElementById("message1").style.color="black";
document.getElementById("message1").innerHTML="<strong>valid</strong>";
return false;
}	
}

function checkSec()
{
var lName = document.getElementById("lname").value;
var rel = /^[a-zA-Z\s\'\-]{2,15}$/;
if(!rel.test(lName))
{
document.getElementById("message2").style.color="red";
document.getElementById("message2").innerHTML="<strong>*Invalid name</strong>";
return true;
}
else {
document.getElementById("message2").style.color="black";
document.getElementById("message2").innerHTML="<strong>valid</strong>";
return false;
}	
}
display()
{
	alert("Record subnitted successfully");
}
display1()
{
	alert("Registration successfull");
}
</script>
</head>
<body>

 <header class="box"><h1> Individual Registration</h1>  </header>
<form action="register.php" method="post" name="user"  onsubmit="display()" >

<table align="center">
<tr>
<td>Username</td>
<td><input type="text" name="user" id="user" autocomplete="off" >
</td>
</tr>
<tr>
<td> Password</td>
<td><input type="password" name="pass"  id="pass" autocomplete="off"  onclick="checkpass()">
</td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="conpass"   id="conpass" autocomplete="off" onblur="passcheck()">
<span id="passconf" style="font-size: 75%"> </td>
</tr>
</table><br><br>


<table align="center">
<caption><header class="box1"><b>Personal Details</b></header></caption>
<tr>
<td>Name</td>
<td><input type="text" name="fname" class="form-control" id="fname" autocomplete="off"   placeholder="First Name"   onblur="checkFirst();"/>
<span id="message1" style="font-size: 75%"></span></td>
<td><input type="text" name="lname" class="form-control" id="lname" autocomplete="off"  placeholder="Last Name" onblur="checkSec();"/>
<span id="message2"  style="font-size: 75%"></span></td>
</tr>
</td>
</tr>
<tr>

<tr>
<td>Date Of Birth</td>
<td><input type="date" name="bdate"   id="destination" size="5"  autocomplete="off" >
</td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text" name="phone"   id="phone" placeholder="xxx-xxx-xxxx"  autocomplete="off"  maxlength="10" onblur="phonecheck()">
<span id="message3" style="font-size: 75%"></span></td>
</tr>
<tr>
<td>Email Id</td>
<td><input type="email" name="email"  id="email"  autocomplete="off" onblur="emailcheck()"></td>
</tr>
</table><br><br>

<table align="center">
<caption><header class="box1"><b>Residential Address</b></header></caption>
<tr>
<td>City</td>
<td><input type="text"  name="city" id="city"  autocomplete="off"  > 
</td>
<td>Pin Code</td>
<td><input type="text" name="pin" class="form-control" step="6" id="pin"  autocomplete="off"  maxlength="6" onblur="pincheck()"> 
<span id="message4" style="font-size: 75%"></span></td>
</td>
</tr>
<tr>
<td>State</td>
<td><input type="text"  name="state" id="state"  autocomplete="off"  > 
</tr>
</table><br>

<table align="center"><br>
<td><p>	<button name="insert" class="button" onclick="display()" value="INSERT">SUBMIT</button></p></td>
<td><button name="display" class="button1" value="Display"><a href="select.php">CHECK DETAILS</a></button></td>
<td><P><input type="reset" class="button3" value="RESET"></P></td>
</tr>
</table><br>

</form>
		
<script type="text/javascript">
function  passcheck()
{
var pass = document.getElementById('pass').value;
var confirmpass = document.getElementById('conpass').value;
if(pass!=confirmpass)
{
document.getElementById("passconf").style.color="red";
document.getElementById('passconf').innerHTML="*Passwords are not matching";
return false;
}
else{
document.getElementById("passconf").style.color="black";
document.getElementById('passconf').innerHTML="valid";
return true;
}
}

function display()
{
alert("Thank you for registration");
}
</script>
</body>
</html>

