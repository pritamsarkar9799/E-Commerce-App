<?php

	$Id=$_POST['t1'];
	$Password=$_POST['t2'];

	// echo $Id."<br>";
	// echo $Password;

	echo $Id."<br>";
	echo $Password;

	include 'connect.php';

	$sql= "select * from signup where Username = '$Id' and Password = '$Password' ";
	echo $sql;
	$r= mysqli_query($con,$sql);

	if($row=mysqli_fetch_assoc($r)){

		$_SESSION['Username'] = $row['Username'];
		// $_SESSION['Password']=$row['Password'];
		$_SESSION['Name']=$row['Name'];
		$_SESSION['Email']=$row['Email'];
		$_SESSION['PhoneNo']=$row['PhoneNo'];
		$_SESSION['Address']=$row['Address'];
		header('location:index.php');
	}
	else{

		header('location:signin.php');

	}
?>