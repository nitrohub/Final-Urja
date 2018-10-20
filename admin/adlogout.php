<!-- Coming from logout link of admin pages -->
<?php
session_start();
unset($_SESSION['alname']);
header('Location:adLogin.php');
?>