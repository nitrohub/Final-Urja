<?php
if(isset($_POST['submit']))
{
	$servername = "localhost";
$username = "urja";
$password = "urja";
$dbname = "urja";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "incomplete";
}

$username = mysqli_real_escape_string($conn.$_POST['uname']);
$password = mysqli_real_escape_string($conn.$_POST['psw']);


$query = mysqli_query($conn,"INSERT INTO  login(L_id,L_role_id,L_username,L_password,S_id,P_id)
VALUES (1,1,'abcd','efgh',1,1)");

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}