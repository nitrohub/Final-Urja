<!-- Arriving from admin dashboard -->

<?php
include('../db/udb.php');
session_start();
if(isset($_GET['E_id']))
{
$E_id=$_GET['E_id'];
echo $E_id;
$query="DELETE FROM registration WHERE registration.E_id = '$E_id'";
$result=mysqli_query($con,$query);
if($con->error)
{
	die("$con->error");
}
header('Location:AdminDash.php');
}elseif (isset($_GET['sid']))
{
	$S_id=$_GET['sid'];
echo $S_id;
$query="DELETE FROM student WHERE student.S_id = '$S_id'";
$result=mysqli_query($con,$query);
if($con->error)
{
	die("$con->error");
}
$query1="DELETE FROM registration WHERE registration.S_id = '$S_id'";
$result1=mysqli_query($con,$query1);
if($con->error)
{
	die("$con->error");
}
header('Location:AdminDash.php');
}
?>