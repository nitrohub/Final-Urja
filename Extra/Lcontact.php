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

<title>CONTACT</title>
</head>
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
  <li><a href="../Logout.php">Logout</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="../Event/Lsponsors.php">Sponsors</a></li>
  <li><a href="../Event/LoggedEvent.php">Events</a></li>
  <li><a href="../student/LoggedinHome.php">Home</a></li>

</ul>



<br>
<h2><font color="white">STUDENTS COUNCIL</font>
</h2>
<br>
<h3>
URJA@xyz.com    
</h3>
<br>
<div id="map" style="width:400px;height:400px;background:yellow"></div>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>

