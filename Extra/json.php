<?php 
$host = "localhost"; 
$user = "root"; 
$pass = "nitesh21998"; 
$database = "urja"; 

$linkID = mysql_connect($host, $user, $pass) or die("Could not connect to host."); 
mysql_select_db($database, $linkID) or die("Could not find database."); 

$sth = mysql_query("SELECT * FROM student");
$rows = array();
while($r = mysql_fetch_assoc($sth)) {
  $rows[] = $r;
}
echo json_encode($rows)."<br>";
?>