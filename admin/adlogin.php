<?php
 session_start();
 if(isset($_SESSION['alname']))
 {
  header("location:AdminDash.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/regist.css">
</head>
    <style type="text/css">
        #wh{
            color: white;
        }
    </style>

<body>
  <?php include ('../db/udb.php');?>
<?php
if(isset($_POST['submit']))
{
    // die("Entered");
		$user = $_POST['id'];
		$pwd = $_POST['psw'];
    // echo 'username='.$user.'';
    // echo 'password='.$pwd.'';

		$query = "SELECT * FROM admini where A_username ='$user' and A_password ='$pwd'";
    $result= mysqli_query($con, $query);
    if($con->error)
    {
      die($con->error);
    }
    
    $total = mysqli_num_rows($result);

    // echo 'Total='.$total.'';
    // die("Total stop");
    if($con->error)
    {
      die($con->error);
    }
    if($total == true)
    {
      //echo '<p id="wh"> Login Successful</p>';
        // die('Login Successful');
       $query1 = "SELECT * FROM admini where A_username ='$user'"; 
    $lol = mysqli_query($con, $query1);
    if($con->error)
    {
      die($con->error);
    }
    if($row = mysqli_fetch_assoc($lol)){
      // echo 'Got the name='.$row['AdName'].'';
      // die("\nGot it");
      $nam = $row['AdName'];
    }
    $_SESSION['alname'] = $nam;
    header('location:AdminDash.php');
    }
    else
    {
      echo '<script> alert("Incorrect Username or password"); </script>';
    }

   

    // echo $lol;
		
}
?>
<div align="center">
<form action="adlogin.php" method="POST">
  <div  class="container">
    <h1>Admin Login</h1>
    <!-- <p>Please fill in this form to create an account.</p> -->
    <hr>

    <label for="email"><b>Admin Email</b></label>
    <input id="email" type="text" placeholder="Enter Id" name="id" required>
    <label for="psw"><b>Password</b></label>
    <input id="psw" type="password" placeholder="Enter Password" name="psw" required>
    <hr>
    <input type="submit" class="registerbtn" name="submit" value="Sign in">
  </div>

  
  <div class="container signin">
    <p>New user? <a href="A_register.php">Register</a></p>
  </div>
</form>
</div>
</body>
</html>
