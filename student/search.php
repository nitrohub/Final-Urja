<?php
    if(isset($_GET['search'])){
        include "connect.php";
        $q = $_GET['search'];
        $query = "select * from artist where fname like '%$q%'";
        $res = mysqli_query($con, $query);
        if(mysqli_num_rows($res) == 0) echo 'not found';
        while($row = mysqli_fetch_assoc($res)){
        	echo $row['fname'];
        }
    }
    
?>