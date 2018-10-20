<?php
 session_start();
 if(isset($_SESSION['user_name']))
 {
  header("location:LoggedinHome.php");
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
<link rel="stylesheet" href="../css/HOME PAGE.css">
<link rel="stylesheet" type="text/css" href=""../css/ht.css">

<title>HOMEPAGE</title>
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
	<li><a href="../Register.php">Sign up</a></li>
  <li><a href="../Extra/contact.html">Contact</a></li>
  <li><a href="../Extra/Sponsors.html">Sponcers</a></li>
  <li><a href="../Event/Event.php">Events</a></li>
  <li><a href="../student/HOME PAGE.php">Home</a></li>

</ul>
<br>



<div class="container-fluid bg-1 text-center" >
<section class="banner-area relative" id="home">
<p>Put on your thinking caps and fasten your seatbelts, as new frontiers await to be conquered.
	It is here and it has all the answers you needed, the Answer to Life, the Universe, and Everything.
	And it is not just 42!</p>
</section>
<div class="container-fluid bg-1 text-center" >
<section class="banner-area relative" id="home">
<p>Put on your thinking caps and fasten your seatbelts, as new frontiers await to be conquered.
  It is here and it has all the answers you needed, the Answer to Life, the Universe, and Everything.
  And it is not just 42!</p>
</section>
</div>
<br> 
<h2><font color="#ffffff"><B>ABOUT FEST</B></h2>
<br>
<p><font color="#ffffff"><I>this fest which stands for "Engineering" in Sanskrit, is the annual technical festival of the college fest  2017 is going to be held in the first week of October. Abhiyantriki was born out of the desire to inspire and nurture bright minds in the field of technology. Over 35 events are organized, ranging from workshops to exhibitions and witness a footfall of around 15,000. It also hosts events like Internship Expo, Tech Expo, Auto Expo, Speaker Sessions, and Panel Sessions. Abhiyantriki also undertakes various social initiatives under the banner of Parvaahaa which strives for the upliftment of the underprivileged and works for the overall betterment of our society. Over the years, Abhiyantriki has established itself as one of the premier technical festivals in Mumbai.</I></p>
<br>
</div>
<div class="container-fluid bg-3 text-center">
<h2><font color="#ffffff"><B>ABOUT COLLEGE</B></h2>
<br>
<p>this fest , which stands for "Engineering" in Sanskrit, is the annual technical festival of the college fest  2017 is going to be held in the first week of October. Abhiyantriki was born out of the desire to inspire and nurture bright minds in the field of      technology. Over 35 events are organized, ranging from workshops to exhibitions and witness a footfall of around 15,000. It also hosts events like Internship Expo, Tech Expo, Auto Expo, Speaker Sessions, and Panel Sessions. Abhiyantriki also undertakes various social initiatives under the banner of ‘Parvaah’ which strives for the upliftment of the underprivileged and works for the overall betterment of our society. Over the years, Abhiyantriki has established itself as one of the premier technical festivals in Mumbai.</p>
</div>
<footer style="color:antiquewhite;">
    About Developer
Written by Nitesh and Raj.<br> 
Visit us at: Example.com<br>
Box 564, Mumbai<br>
India
</footer>
</body>
</html>