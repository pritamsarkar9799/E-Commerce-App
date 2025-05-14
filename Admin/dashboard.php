
<?php
	
	include 'navbar.php';
	$sql= "select * from product";
	$r= mysqli_query($con,$sql);

?>

<script type="text/javascript">
	function warning()
	{
		var x;
		x=confirm("Are you sure you want to Delete?");
		return x;
	}
</script>
<div class="table-responsive">
<table border="1" class="table">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Category</th>
		<th>Rating</th>
		<th>Cost Price</th>
		<th>Selling Price</th>
		<th>Image</th>
	</tr>

	<?php
	while ($row=mysqli_fetch_assoc($r)) 
	{

		//print_r($row);
		//echo "<br>"


	?>

	<tr>

	  <td><?php echo $row['ID']; ?></td>
	  <td><?php echo $row['Name']; ?></td>
	  <td><?php echo $row['Description']; ?></td>
	  <td><?php echo $row['Category']; ?></td>
	  <td><?php echo $row['Rating']; ?></td>
	  <td><?php echo $row['CP']; ?></td>
	  <td><?php echo $row['SP']; ?></td>
	  <td><img src="<?php echo $row['Image']; ?>" style="max-width: 250px;height: 150px;"></td>
	  <td><a class="btn btn-outline-danger" onclick="return warning()" href="delete.php?id=<?php echo $row['ID'];?>" >Delete</a></td> 
	  <td><a class="btn btn-outline-warning" href="update1.php?id=<?php echo $row['ID'];?>">Update</a></td>
	</tr>

	<?php


		}
	?>

	</table>
</div>

<form action="insert.php" method="post">

<br><br><button type="submit">Insert</button>
</form>

