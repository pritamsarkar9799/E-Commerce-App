<?php
include 'Connect.php';

	if(empty($_SESSION['Username']))
	{
		header("location:signin.php");
	}

	else
	{
		header("location:payment.php");
	}

?>