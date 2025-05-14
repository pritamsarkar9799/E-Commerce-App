<?php

	include 'navbar.php';
	$Id = $_GET['id'];

	// $con = mysqli_connect("localhost","root","","project1");
	$sql = "select * from product where ID = $Id";
	$r = mysqli_query($con,$sql);	
?>

	
<?php
	if($row = mysqli_fetch_assoc($r))
	{
?>
<form action="update2.php" method="post" enctype="multipart/form-data">
	ID: <input type="text" name="x1" value="<?php echo $row['ID']; ?>" readonly="readonly"><br><br>
	Name: <input type="text" name="x2" value="<?php echo $row['Name']; ?>"><br><br>
	Description: <input type="text" name="x3" value="<?php echo $row['Description']; ?>"><br><br>
	Category: <input type="text" name="x4" value="<?php echo $row['Category']; ?>"><br><br>
	Rating: <input type="text" name="x5" value="<?php echo $row['Category']; ?>"><br><br>
	Cost Price:<input type="text" name="x6" value="<?php echo $row['CP']; ?>"><br><br>
	Selling Price:<input type="text" name="x7" value="<?php echo $row['SP']; ?>"><br><br>
	<img src="<?php echo $row['Image']; ?>" height="100" width="150">
	<input type="hidden" name="img" value="<?php echo $row['Image']; ?>"><br><br>
	Image: <input type="file" name="x8"><br><br>
	<button type="submit">Submit</button>
<?php
	}
?>