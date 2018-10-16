<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/regist.css">
</head>
  <?php include ('../db/udb.php');?>
<body>
<?php
  session_start();
  if(isset($_POST['submit']))
  {
    $id=$_POST['id'];
    $nam=$_POST['name'];
    $user=$_POST['user'];
    $pass=$_POST['psw'];
    $query=mysqli_query($con,"INSERT INTO admini(A_username,Adname,A_password) VALUES('$user','$nam','$pass')");
    $_SESSION['aname'] = $nam;
	header('location:AdminDash.php');
  }

        	
?>
<div align="center">
<form action=" " method="POST">
  <div  class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Admin Id</b></label>
    <input id="text" type="text" placeholder="Enter Id" name="id" required>
    <label><b>Admin Username</b></label>
    <input type="email" name="user" placeholder="Enter Username" required="true">
    <label><b>Name</b>
     <input type="text" placeholder="Admin Name" name="name" required>
    </label>
    <label for="psw"><b>Password</b></label>
    <input id="psw" type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input id="psw-repeat" type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <input type="submit" class="registerbtn" name="submit" value="Register"/>
  </div>

  
  <div class="container signin">
    <p>Already have an account? <a href="adlogin.php">Sign in</a></p>
  </div>
</form>
</div>
</body>
</html>
