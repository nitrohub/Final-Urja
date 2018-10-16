<?php
include("../db/udb.php");

$name=$_POST['username'];
$id=$_POST['sid'];
$pass=$_POST['password'];

$query="UPDATE student SET S_name = '$name', S_pass = '$pass' WHERE student.S_id = '$id'";

$run=mysqli_query($con,$query);
if($con->error)
{
  echo $con->error;
}

if($run==true)
{
  ?>
  <script>
    alert('Data Updated Successfully!');
    windows.open('Edit.php?sid=<?php echo $id;?>','_self');
  </script>
<?php } ?>
