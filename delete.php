<?php
include 'dbcon.php';
$Id=$_GET['Id'];

$deletequery="DELETE FROM registration WHERE Id='$Id'";
$query=mysqli_query($con,$deletequery);

if($query){
?>
<script>
	alert('Data deleted successfully');
</script>
<?php
header('location:select.php');
}else
{
?>
  <script>
	alert('Data not deleted');
  </script>
<?php
}
?>