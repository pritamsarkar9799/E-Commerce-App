<?php 
include ('connection.php');
	$a=$_GET['t1'];
	$b=$_GET['t2'];

	echo $a."<br>";
	echo $b;

	// $con =mysqli_connect("localhost","root","","project1");
	$sql= "select * from admin where Username = '$a' and Password = '$b' ";
	echo $sql;
	$r= mysqli_query($con,$sql);

	if($row=mysqli_fetch_assoc($r)){
		$_SESSION['name'] = $row['Name'];
		header('location:dashboard.php');
	}
	else{

		header("location: login.php");
	}


?>