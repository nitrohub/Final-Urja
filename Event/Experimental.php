<?php
session_start();
if(!$_SESSION['user_name'])
{
	unset($_SESSION['name']);
	header('Location:../Login.php');
}
else{
 unset($_SESSION['user_name']);
 header('Location:../Event/MoreEvents.php');
}
?>

