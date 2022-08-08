<?php



?>
<html>
<head>
<style>
body{
background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVmAbXTwe7dCvUm7LyTCpXsYDT4bdJzOZoZA&usqp=CAU");
background-size:cover;
}
.button1 {
  max-width:200px;
  background-color: green;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-family: inherit;
  display: flex;
  font-size: 10px;
  padding: 8px 35px 8px 35px;
  cursor: pointer;
  margin: 0 auto;
  color:white;
  weight: 50%;
}
.button2 {
  max-width:200px;
  background-color: red;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-family: inherit;
  display: flex;
  font-size: 10px;
  padding: 8px 35px 8px 35px;
  cursor: pointer;
  margin: 0 auto;
  color:white;
  weight: 50%;
}
.button3 {
  max-width:200px;
  background-color: black;
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
h2
{color:white}
.box{  
  margin: 0 auto;
  justify-content: center;
  background-color:black;
  opacity: 0.9;
  border-radius: 5px;
  padding: 10px 0px 10px 20px;
  width: 50%;
  height: 5%; 
}
table, th, td {
	font-family: arial, sans-serif;
  border: 1px solid black;
  border-collapse: collapse;
    background-color: #dddddd;
}
</style>
</head>
<body>
<table align="center" border="2" >
<h2 class="box"><center>Registration List</center></h2>
<tr>
<th>ID</th>
<th>Username</th>
<th>Password</th>
<th>ConfirmPassword</th>
<th>Firstname</th>
<th>Lastname</th>
<th>DateOfBirth</th>
<th>PhoneNumber</th>
<th>EmailId</th>
<th>City</th>
<th>Pincode</th>
<th>State</th>
<th colspan="2">Operations</th>
</tr>
<?php
include 'dbcon.php';
$selectquery="select * from registration";
$query=mysqli_query($con,$selectquery);

while($result=mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['Id'];?></td>
<td><?php echo $result['username'];?></td>
<td><?php echo $result['password'];?></td>
<td><?php echo $result['conpass'];?></td>
<td><?php echo $result['fname'];?></td>
<td><?php echo $result['lname'];?></td>
<td><?php echo $result['DOB'];?></td>
<td><?php echo $result['phno'];?></td>
<td><?php echo $result['email'];?></td>
<td><?php echo $result['city'];?></td>
<td><?php echo $result['pincode'];?></td>
<td><?php echo $result['state'];?></td>
<td><a href="update.php?Id=<?php echo $result['Id'];?>"><button name="update" class="button1" value="Update">UPDATE</button></a></td>
<td><a href="delete.php?Id=<?php echo $result['Id'];?>"><button name="delete" class="button2" value="Delete">DELETE</button></a></td>
</tr>
<?php
}
?>

</table>
<a href="home.html"><input type="button" name="back" class="button3" value="NEXT PAGE"></button></a>
</body>
</html>
