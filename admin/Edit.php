<!DOCTYPE html>
<html>
<head>
	<title>Student Edit</title>
</head>
<body>
	  <?php
  	include("../db/udb.php");
  	$sid=$_GET['sid'];
  	$sql="SELECT * FROM student WHERE S_id='$sid'";
  	if($con->error){
  		echo $con->error;
  	}
  	$run=mysqli_query($con,$sql);
  	if($con->error){
  		echo $con->error;
  	}

  	$data=mysqli_fetch_assoc($run);
  	if($con->error){
  		echo $con->error;
  	}
  ?>

<form method="POST" action="updated.php" onsubmit="return Validate()" name="vform" align="center" style="padding:2px;">
  <div class="container">

    <h1> Update Student Details </h1>

    <div id="name_div">
      <label>name</label> <br>
      <input type="text" value="<?php echo $data['S_name']; ?>" name="username" class="textInput" required="true">
      <div id="name_error"></div>
    </div>

    <div id="password_div">
      <label>Password</label> <br>
      <input type="password" name="password" class="textInput" required="true">
    </div>
    <div id="pass_confirm_div">
       <label>Password confirm</label> <br>
       <input type="password" name="password_confirm" class="textInput" required="true">
       <div id="password_error"></div>
    </div><br>

    <input type="hidden" name="sid" value="<?php echo $data['S_id']; ?>" />
    <input type="submit" class="registerbtn" name="submit" value="Update"/>
  </div>
</form>

</div>
<script >
var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
var letters = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;


// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password
  if ((password.value == "")) {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  if ((password.value.length <= 8)) {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password should have 8 or more length";
    password.focus();
    return false;
  }
  if (password.value.match(letters)) {}
  else{
  password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password characters";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid #5e6e66";
    document.getElementById('email_div').style.color = "#5e6e66";
    email_error.innerHTML = "";
    return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    document.getElementById('password_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
  if (password.value === password_confirm.value) {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
}
</script>

</body>
</html>