<table style="width:500px;" border="5">
<tr>
	<th colspan="2"><h1>Registration Details</h1></th>
</tr>
<tr>
<td><h2>Student Rollno.</h2></td>
<td><h2>Student Name.</h2></td>
</tr>
<?php
include('../db/udb.php');
$query="SELECT * FROM student";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['S_id']."</td>";
	echo "<td>".$row['S_name']."</td></tr>";
}
?>
</table>