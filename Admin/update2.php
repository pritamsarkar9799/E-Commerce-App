<?php 

include 'connection.php';

	$a=$_POST['x1'];
	$b=$_POST['x2'];
	$c=$_POST['x3'];
	$d=$_POST['x4'];
	$e=$_POST['x5'];
	$f=$_POST['x6'];
	$g=$_POST['x7'];
	$h=$_POST['img'];

	// echo "<pre>";
	// echo $a."<br>";
	// echo $b."<br>";
	// echo $c."<br>";
	// echo $d."<br>";

		$arr = $_FILES['x8'];
		echo "<pre>";
		print_r($arr);

		$fname = $arr['name'];
		$err = $arr['error'];
		$tmp_loc = $arr['tmp_name'];
		echo $err;
		$con = mysqli_connect("localhost","root","","minorproject");

		if($err==0)
		{
			$current_loc = "IMG/".$fname;
			$p = move_uploaded_file($tmp_loc, $current_loc);
			echo $p;
			if($a>0)
			{
				
				
				$sql = "update product set  Name= '$b' ,Description = '$c' ,Category = '$d' ,Rating = '$e' , CP= $f ,SP= $g , Image='$current_loc' where ID= $a";
				// echo $sql;
				
			}
			else
			{
				$sql = "update product set  Name= '$b' , Description = '$c' ,,Category = '$d' ,Rating = '$e' ,CP = $f ,SP = $g , Image='$h' where ID= $a";
			}
		}
		else
		{
			$sql = "update product set  Name= '$b' , Description = '$c' ,Category = '$d' ,Rating = '$e' ,CP = $f ,SP = $g , Image='$h' where ID= $a";
		}
		echo $sql;
		$r = mysqli_query($con,$sql);

				if($r>0)
				{
					// echo "file uploaded";
					header('location:dashboard.php');
				}
				
				else
				{
					 echo "file not uploaded";
					// header('location:Update.php');
				}
 ?>