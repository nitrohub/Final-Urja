
<?php
include('../db/udb.php');
session_start();
$E_id=$_GET['E_id'];
echo $E_id;
$query="DELETE FROM registration WHERE registration.E_id = '$E_id'";
$result=mysqli_query($con,$query);
if($con->error)
{
	die("$con->error");
}
header('Location:Dashboard1.php');
?>