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
if(isset($_POST['pay']))
{
$cardhname=$_POST['cardhname'];
$cardno=$_POST['cardno'];
$expdate=$_POST['expdate'];
$cvc=$_POST['cvc'];

$sql="INSERT INTO payment(cardhname,cardno,expdate,cvc)VALUES('$cardhname','$cardno','$expdate','$cvc')";
if($conn->query($sql)===TRUE)
{	
?>
	<script>

	alert('data inserted');

	</script>
<?php
}else
{
?>
	<script>

	alert("Error");

</script>
<?php
}
}
header("refresh:0;url=home.html");
?>