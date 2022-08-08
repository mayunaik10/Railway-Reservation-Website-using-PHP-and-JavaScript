<?php
$servername="localhost";
$username="root";
$password="";
$dbname="WBP-Project";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:" .$conn->connect_error);
}
if(isset($_POST['submit']))
{
$quota=$_POST['quota'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$class=$_POST['class'];
$deptdate=$_POST['deptdate'];

$sql="INSERT INTO booking(quota,source,destination,class,deptdate)VALUES('$quota','$source','$destination','$class','$deptdate')";
if($conn->query($sql)===TRUE)
{
	echo "New record inserted succesfully";
}
else
{
	echo"Error:" . $sql ."<br" .$conn->error;
}
}
header("refresh:0;url=payment.html");
?>