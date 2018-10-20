<?php
 session_start();
 if(isset($_SESSION['user_name']))
 {
  header("location:student/LoggedinHome.php");
 }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/regist.css">
</head>
    <style type="text/css">
        #wh{
            color: white;
        }
    </style>

<body>
  <?php include ('/db/udb.php');?>
<?php
if(isset($_POST['submit']))
{
		$user = $_POST['id'];
		$pwd = $_POST['psw'];
		$query = "SELECT * FROM student where S_id ='$user' && S_pass ='$pwd'";
    $result= mysqli_query($con, $query);
    

    $query1 = "SELECT S_name FROM student where S_id ='$user'";	
    $lol = mysqli_query($con, $query1);
    if($row = mysqli_fetch_assoc($lol)){
      $nam = $row['S_name'];
    }

     $query2 = "SELECT S_id FROM student where S_id ='$user'";  
    $lol1 = mysqli_query($con, $query2);
    if($row = mysqli_fetch_assoc($lol1)){
      $id = $row['S_id'];
    }

    // echo $lol;
		$total = mysqli_num_rows($result);
		if($total == true)
		{
			//echo '<p id="wh"> Login Successful</p>';
		$_SESSION['user_name'] = $nam;
    $_SESSION['s_id']=$id;
    header('location: student/LoggedinHome.php');
		}
		else
		{
			echo '<script> alert("Incorrect Username or password"); </script>';

		}
}
?>
<div align="center">
<form action=" " method="POST">
  <div  class="container">
    <h1>Login</h1>
    <!-- <p>Please fill in this form to create an account.</p> -->
    <hr>

    <label for="email"><b>Student Id</b></label>
    <input id="email" type="text" placeholder="Enter Id" name="id" required>
    <label for="psw"><b>Password</b></label>
    <input id="psw" type="password" placeholder="Enter Password" name="psw" required>
    <hr>
    <input type="submit" class="registerbtn" name="submit" value="Sign in"/>
  </div>

  
  <div class="container signin">
    <p>New user? <a href="Register.php">Register</a></p>
  </div>
</form>
</div>
</body>
</html>
