<?php
 session_start();
 if(isset($_SESSION['user_name']))
 {
  header("location:LoggedEvent.php");
 }
?>

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
<link rel="stylesheet" href="../css/EVENT.css">

<title>EVENTS</title>
</head>
<!-- <style type="text/css">
  h2{
    color:yellow;
  }
</style> -->
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
  <li><a href="../Register.php">Sign up</a></li>
  <li><a href="../Extra/contact.html">Contact</a></li>
  <li><a href="../Extra/Sponsors.html">Sponsors</a></li>
  <li><a href="../Event/Event.php">Events</a></li>
  <li><a href="../student/HOME PAGE.php">Home</a></li>

</ul>
<br>



 <h2 style="text-align:center;">
     <a href="http://localhost/new_urja-master/event/MoreEvents.php#C4"> Technical <br></a>
  </h2>
    <div class="container">
       <div class="row">    
         <div class="col-sm-4">
           <a href="http://localhost/new_urja-master/event/MoreEvents.php#Nemo"> <img src="../images/eesa-fawofaw.png" width=300 height=300 style="padding: 5px;"> </a>
           <h3> <a href="http://localhost/new_urja-master/event/MoreEvents.php#Nemo"> Finding Nemo </a></h3>
         </div>
         <div class="col-sm-4">
           <a href="http://localhost/new_urja-master/event/MoreEvents.php#Car"><img style="padding: 5px;" src="../images/mesa-carobar.png" width="300" height="300"></a>
           <h3> <a href="http://localhost/urja/event/MoreEvents.php#Car"> Car Mela</a> </h3>
         </div>
         <div class="col-sm-4">
           <a href="http://localhost/new_urja-master/event/MoreEvents.php#ctrl"><img style="padding: 5px;" src="../images/iste-cse.png" width="300" height="300"> </a>
           <h3><a href="http://localhost/new_urja-master/event/MoreEvents.php#ctrl">Ctrl+shift+del</a></h3>
         </div>
         </div>

  <h2 style="text-align:center;">
    <a href="../event/MoreEvents.php#C5">Coding<br></a>
  </h2>
    <div class="row">
      <div class="col-sm-4">
        <a href="../event/MoreEvents.php#codecell"> <img style="padding: 5px;" src="../images/codecell.jpg" width=300 height=300> </a>
        <h3><a href="../event/MoreEvents.php#codecell">           kjsce coding challenge </a></h3>
      </div> 
      <div class="col-sm-4"> 
        <a href="../event/MoreEvents.php#lcode"><img style="padding: 5px;" src="../images/code.jpg" width="300" height="300"></a>
        <h3><a href="../event/MoreEvents.php#lcode">Learn code </a></h3>
      </div>
      <div class="col-sm-4">  
        <a href="../event/MoreEvents.php#game"><img style="padding: 5px;" src="../images/cding.png" width="300" height="300"></a>
        <h3> <a href="../event/MoreEvents.php#game"> GameDev</a></h3>
      </div>
      </div>

                                                 
  <h2 style="text-align: center;">
    <a href="../event/MoreEvents.php#C6">Gaming</a>
  </h2>
        <br>
        <div class="row">
        <div class ="col-sm-4">
        <a href="../event/MoreEvents.php#gamezone"><img style="padding: 5px;" src="../images/g1.jpg" width=300 height=300></a>
        <h3><a href="../event/MoreEvents.php#gamezone">gamezone</a></h3>
        </div>
        <div class ="col-sm-4">
        <a href="../event/MoreEvents.php#Cs"><img style="padding: 5px;" src="../images/cs.jpg" width="300" height="300"></a>
        <h3><a href="../event/MoreEvents.php#Cs">CsGo</a></h3>
        </div>
        <div class ="col-sm-4">
        <a href="../event/MoreEvents.php#pubg"><img style="padding: 5px;" src="../images/pubg.jpg" width="300" height="300"></a>
        <h3><a href="../event/MoreEvents.php#pubg">Pubg</a></h3>
        </div>

                                                                                 
<footer>
  <h3 style="text-align:center;">
    About Developer
    <address>
Written by Nitesh and Raj.<br> 
Visit us at:<br>
Example.com<br>
Box 564, Mumbai<br>
India
</address>
  </h3>
</footer>
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>