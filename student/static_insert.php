<?php
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

$sql = "INSERT INTO  role(role_id, role_name, role_desc)
VALUES (3, 'Council_Admin','view only')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
