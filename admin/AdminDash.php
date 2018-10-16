<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/HOME PAGE.css">

<title>Dashboard</title>
</head>
<style type="text/css">
.th{
    text-align: center;
  }
</style>
<body class="bod">
<div>
<img src="../images/kjsce logo.png" alt="college image" height="100" width ="100" ALIGN="left" >
</div>
<B><h1 ALIGN="center">KJSCE</B></h1>
<B><h2 ALIGN="center" ><font color=yellow>Urja</h2></B>
<br>
<ul>
  <li><a href="../Logout.php">logout</a></li>

  <li><a href="../Extra/contact.html">Contact</a></li>
  <li><a href="../Extra/Sponsors.html">Sponcers</a></li>
  <li><a href="../Event/LoggedEvent.php">Events</a></li>
  <li><a href="#">Home</a></li>

</ul>
<br>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <img src="" class="img-responsive img-circle margin" style="display:inline" alt="Studentphoto" width="350" height="350">
  <h1 align="center">
  	<?php 
    include('../db/udb.php');
     ?><?php
session_start();
if(isset($_SESSION['aname'])){//for register ka message
  echo 'Welcome '.$_SESSION['aname'].'!';
}elseif (isset($_SESSION['auser_name'])) { //for login ka message
  echo 'Welcome '.$_SESSION['auser_name'].'!';
  # code...
}else{
	header('Location:Adlogin.php');
}
?></h1>




</div>

<!-- Second Container -->
<div class="container-fluid bg-3 text-center" >  
  
  <h3 class="margin">Registration details of Student</h3>
  <?php 
    include('../db/udb.php');
  ?>
  <table class="table" >
  <thead>
    <tr>
      <th class="th">Student Id</th>
      <th>Student Name</th>
      <th align="center">Event Id</th>
      <th>Event name</th>
      <th>Update</th>
      <th>Delete</th>
      </tr>
  </thead>
    <?php
include('../db/udb.php');

// echo $s_id.'';
$query="SELECT * FROM registration";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{
  $E_id = $row['E_id'];
  $s_id=$row['S_id'];
  $qr="SELECT * FROM student WHERE S_id='$s_id' ";
  $rt=mysqli_query($con,$qr);
  if($con->error)
  {
    die($con->error);
  }
  $rw=mysqli_fetch_array($rt);
  if($con->error)
  {
    die($con->error);
  }
  echo "<tr>";
  echo "<td>".$rw['S_id']."</td>";
  echo "<td>".$rw['S_name']."</td>";
  echo "<td>".$row['E_id']."</td>";
  echo "<td>".$row['Ename']."</td>";
  echo("<td><a class='btn btn-info' href='Edit.php?sid=".$s_id."'>Edit</a></td>");
  echo("<td><a class='btn btn-danger' href='../student/unregister.php?E_id=".$E_id."'>UnRegister</a></td></tr>");
 
  if(isset($_POST['unregister']))
  {
    $_SESSION['unregister']=$row['E_id'];
    ('Location:unregister.php');
  }
}
?>
</table>
</div>
<!-- <table border="4" style="padding :2px;" align="center">
	<tr>
		<th>1</th>
		<td><a>Insert Student Details</a></td>
	</tr>
	<tr>
		<th>2</th>
		<td><a>Update Student Details</a></td>
	</tr>
	<tr>
		<th>3</th>
		<td><a >Delete Student Details</a></td>
	</tr>
</table>
</div> -->

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p><h4 style="text-align:center;">
    About Developer
<address>
Written by Nitesh and Raj.<br> 
Visit us at:<br>
Example.com<br>
Box 564, Mumbai<br>
India
</address>
    </h4> 
</footer>
</body>
</html>
