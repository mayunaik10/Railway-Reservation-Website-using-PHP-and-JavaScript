<?php 
include 'dbcon.php';

if(isset($_POST['insert']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$conpass=$_POST['conpass'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$bdate=$_POST['bdate'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$state=$_POST['state'];

$insertquery="INSERT INTO registration(username,password,conpass,fname,lname,DOB,phno,email,city, pincode, state)VALUES('$user','$pass','$conpass','$fname','$lname','$bdate','$phone','$email','$city','$pin','$state')";
$query=mysqli_query($con,$insertquery);
if($con){
?>
<script>
	alert('Data submitted successfully');
</script>

<?php
header("refresh:0;url=register1.php");
}else{
	?>
  <script>
	alert('Data not inserted');
  </script>
  <?php
}
}
?>