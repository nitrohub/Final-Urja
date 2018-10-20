<?php include('../db/udb.php');?>
<?php
session_start();
if(isset($_POST["Car"]))
{
	// echo "string";
	$Ename="Car Mela";
	$E_id=1;
    if(isset($_SESSION['s_id']))
    {
	$S_id=$_SESSION['s_id'];
    }elseif (isset($_SESSION['id']))
     {
       $S_id=$_SESSION['id'];
     }
    // echo "Session id=".$S_id.'';
	$uery = "SELECT * FROM registration where E_id=$E_id and S_id='$S_id'"; //For checking if the event is already registered
    $esult= mysqli_query($con, $uery);
    if($con->error){
    	die("$con->error");
    }
    $total = mysqli_num_rows($esult);
		if($total == true)
		{
		    header('location: ../student/Dashboard1.php');
		}
		else
		{
            // die($S_id);
	$query ="INSERT INTO registration(E_id,Ename,S_id) VALUES ($E_id,'$Ename','$S_id')";
    $result=mysqli_query($con, $query);
    if($con->error){
    	die("Already Registered!!");
        }
     $Pid=1;
    $query1="INSERT INTO payment(Pay_id,S_id) VALUES ('$Pid','S_id')";
    $result1=mysqli_query($con,$query1);
    header('Location:Payment.php');     
        }
    
}
 if (isset($_POST["Find"]))
{
	// echo "working";
	$Ename="Find";
	$E_id=2;
	$S_id=$_SESSION['s_id'];
	echo $S_id.'';
	$uery = "SELECT * FROM registration where E_id ='$E_id' and S_id='$S_id'"; //For checking if the event is already registered
    $esult= mysqli_query($con, $uery);
    if($con->error){
    	die("$con->error");
    }
    $total = mysqli_num_rows($esult);
		if($total == true)
		{
		    header('location: ../student/Dashboard1.php');
		}else{
			$query ="INSERT INTO registration (E_id,Ename,S_id) VALUES ($E_id, '$Ename','$S_id')";
    $result=mysqli_query($con, $query);
    if($con->error){
    	die("$con->error");
    }
        $query1="INSERT INTO payment(S_id) VALUES ('$S_id')";

    $result1=mysqli_query($con,$query1);
    if($con->error){
        die("$con->error");
    }
    header('Location:Payment.php');
		}		
}
if(isset($_POST['Ctrl']))
{
	$Ename="Ctrl+shift+del";
	$E_id=3;
	$S_id=$_SESSION['s_id'];
	$uery = "SELECT * FROM registration where E_id ='$E_id' and S_id='$S_id'"; //For checking if the event is already registered
    $esult= mysqli_query($con, $uery);
    if($con->error){
    	die("$con->error");
    }
    $total = mysqli_num_rows($esult);
		if($total == true)
		{
		    header('location: ../student/Dashboard1.php');
		}else{
			$query ="INSERT INTO registration(E_id,Ename,S_id) VALUES($E_id,'$Ename','$S_id')";
    $result= mysqli_query($con, $query);
    if($con->error){
    	die("$con->error");
    }
		$query1="INSERT INTO payment (S_id) VALUES ('$S_id')";
    $result1=mysqli_query($con,$query1);
    if($con->error){
        die("$con->error");
    }
     header('Location:Payment.php');

        }
	
    		
}
if(isset($_POST['kjsce']))
{
	$Ename="kjsce coding challenge";
	$E_id=4;
	$S_id=$_SESSION['s_id'];
	$uery = "SELECT * FROM registration where E_id ='$E_id' and S_id='$S_id'"; //For checking if the event is already registered
    $esult= mysqli_query($con, $uery);
    if($con->error){
    	die("$con->error");
    }
    $total = mysqli_num_rows($esult);
		if($total == true)
		{
		    header('location: ../student/Dashboard1.php');
		}else{
			$query ="INSERT INTO registration (E_id,Ename,S_id) VALUES ('$E_id', '$Ename','$S_id')";
    $result= mysqli_query($con, $query);
    if($con->error){
    	die("$con->error");
    }
		 $query1="INSERT INTO payment(S_id) VALUES ('$S_id')";
    $result1=mysqli_query($con,$query1);
    if($con->error){
        die("$con->error");
    }
     header('Location:Payment.php');    

        }
	
   	
}
if(isset($_POST['Learn']))
{
	$Ename="Learn code";
	$E_id=5;
	$S_id=$_SESSION['s_id'];
	$uery = "SELECT * FROM registration where E_id ='$E_id' and S_id='$S_id'"; //For checking if the event is already registered
    $esult= mysqli_query($con, $uery);
    if($con->error){
    	die("$con->error");
    }
    $total = mysqli_num_rows($esult);
		if($total == true)
		{
		    header('location: ../student/Dashboard1.php');
		}else{
$query ="INSERT INTO registration (E_id,Ename,S_id) VALUES ('$E_id', '$Ename','$S_id')";
    $result= mysqli_query($con, $query);
    if($con->error){
    	die("$con->error");
    }
			 }
	
    $query1="INSERT INTO payment(S_id) VALUES ('$S_id')";
    $result1=mysqli_query($con,$query1);
    if($con->error){
    	die("$con->error");
    }
     header('Location:Payment.php');		
}
if(isset($_POST['GameDev']))
{
	$Ename="GameDev";
	$E_id=6;
	$S_id=$_SESSION['s_id'];
	$uery = "SELECT * FROM registration where E_id ='$E_id' and S_id='$S_id'"; //For checking if the event is already registered
    $esult= mysqli_query($con, $uery);
    if($con->error){
    	die("$con->error");
    }
    $total = mysqli_num_rows($esult);
		if($total == true)
		{
		    header('location: ../student/Dashboard1.php');
		}else{
$query ="INSERT INTO registration (E_id,Ename,S_id) VALUES ($E_id, '$Ename','$S_id')";
    $result= mysqli_query($con, $query);
    if($con->error){
    	die("$con->error");
    }
			 
        $query1="INSERT INTO payment(S_id) VALUES ('$S_id')";
    $result1=mysqli_query($con,$query1);
    if($con->error){
        die("$con->error");
    }
     header('Location:Payment.php');
             }
			
}
if(isset($_POST['gamezone']))
{
	$Ename="gamezone";
	$E_id=7;
	$S_id=$_SESSION['s_id'];
	$uery = "SELECT * FROM registration where E_id ='$E_id' and S_id='$S_id'"; //For checking if the event is already registered
    $esult= mysqli_query($con, $uery);
    if($con->error){
    	die("$con->error");
    }
    $total = mysqli_num_rows($esult);
		if($total == true)
		{
		    header('location: ../student/Dashboard1.php');
		}else{
$query ="INSERT INTO registration (E_id,Ename,S_id) VALUES ('$E_id', '$Ename','$S_id')";
    $result= mysqli_query($con, $query);
    if($con->error){
    	die("$con->error");
    }
			 
     $query1="INSERT INTO payment(S_id) VALUES ('$S_id')";
    $result1=mysqli_query($con,$query1);
    if($con->error){
        die("$con->error");
    }
     header('Location:Payment.php');
             }
	
   		
}
if(isset($_POST['CsGo']))
{
	$Ename="CsGo";
	$E_id=8;
	$S_id=$_SESSION['s_id'];
	$uery = "SELECT * FROM registration where E_id ='$E_id' and S_id='$S_id'"; //For checking if the event is already registered
    $esult= mysqli_query($con, $uery);
    if($con->error){
    	die("$con->error");
    }
    $total = mysqli_num_rows($esult);
		if($total == true)
		{
		    header('location: ../student/Dashboard1.php');
		}else{
$query ="INSERT INTO registration (E_id,Ename,S_id) VALUES ('$E_id', '$Ename','$S_id')";
    $result= mysqli_query($con, $query);
    if($con->error){
    	die("$con->error");
    }
			 
        $query1="INSERT INTO payment(S_id) VALUES ('$S_id')";
    $result1=mysqli_query($con,$query1);
    if($con->error){
        die("$con->error");
    }
     header('Location:Payment.php');
             }
	
    		
}
if(isset($_POST['Pubg']))
{
	$Ename="Pubg";
	$E_id=9;
	$S_id=$_SESSION['s_id'];
	$uery = "SELECT * FROM registration where E_id ='$E_id' and S_id='$S_id'"; //For checking if the event is already registered
    $esult= mysqli_query($con, $uery);
    if($con->error){
    	die("$con->error");
    }
    $total = mysqli_num_rows($esult);
		if($total == true)
		{
		    header('location: ../student/Dashboard1.php');
		}else{
			$query ="INSERT INTO registration (E_id,Ename,S_id) VALUES ('$E_id', '$Ename','$S_id')";
    $result= mysqli_query($con, $query);
    if($con->error){
    	die("$con->error");
    				}
			 
$query1="INSERT INTO payment(S_id) VALUES ('$S_id')";
    $result1=mysqli_query($con,$query1);
    if($con->error){
        die("$con->error");
    }
     header('Location:Payment.php');
             }
	
    		
}else
{
	die("Not Successfull!");
}
?>