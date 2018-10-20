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
  th{
    text-align: center;
  }
</style>
<body class="bod">
<!-- <div>
<img src="../images/kjsce logo.png" alt="college image" height="100" width ="100" ALIGN="left" >
</div>
<B><h1 ALIGN="center">KJSCE</B></h1> -->
<!-- <B><h2 ALIGN="center" ><font color=yellow>Urja</h2></B> -->
<!-- <br> -->

<div class="container-fluid bg-1 text-center">
  <img src="../images/col.jpg" class="img-responsive img-circle margin" style="display:inline" alt="festphoto" width="350" height="350">
  <h1>Urja</h1>
</div>
<br>
<ul>
  <li><a href="../Logout.php">logout</a></li>

  <li><a href="../Extra/contact.html">Contact</a></li>
  <li><a href="../Event/Lsponsors.php">Sponsors</a></li>
  <li><a href="../Event/LoggedEvent.php">Events</a></li>
  <li><a href="LoggedinHome.php">Home</a></li>

</ul>
<br>



<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <img src="" class="img-responsive img-circle margin" style="display:inline" alt="Studentphoto" width="350" height="350">
 <h2 align="center">
<?php
session_start();
if(isset($_SESSION['name'])){//for register ka message
  echo 'Welcome '.$_SESSION['name'].'!';
}elseif (isset($_SESSION['user_name'])) { //for login ka message
  echo 'Welcome '.$_SESSION['user_name'].'!';
}
?></h2></div>

<!-- Second Container -->
<div class="container-fluid bg-3 text-center">  
  
  <h3 class="margin">Registered Events</h3>
  <?php 
    include('../db/udb.php');
  ?>
  <table class="table">
  <thead>
    <tr>
      
      <th align="center">Event_Id</th>
      <th>Event_name</th>
      <th>Unregister</th>
      </tr>
  </thead>
    <?php
include('../db/udb.php');
if(isset($_SESSION['s_id'])) //For login
{
$s_id=$_SESSION['s_id'];
echo $s_id.'';
}else if(isset($_SESSION['id'])) //For Register
{
$s_id=$_SESSION['id'];
echo $s_id.'';
}
$query="SELECT * FROM registration WHERE S_id='$s_id' ";
$result=mysqli_query($con,$query);
if($con->error){
  die($con->error);
}
while($row=mysqli_fetch_array($result))
{
  $E_id = $row['E_id'];
  echo "<tr>";
  echo "<td>".$row['E_id']."</td>";
  echo "<td>".$row['Ename']."</td>";
  echo("<td><a class='btn btn-danger' href='unregister.php?E_id=".$E_id."'>UnRegister</a>
              </td></tr>");
  if(isset($_POST['unregister']))
  {
    $_SESSION['unregister']=$row['E_id'];
    ('Location:unregister.php');
  }
}
?>
</table>
</div>

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
