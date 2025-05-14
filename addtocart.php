<?php	
	include 'navbar.php';
	$Id=$_GET['id'];
	$Qty=$_GET['quantity'];

	// echo $Id."<br>";
	// echo $Qty;


	$sql="select * from product where ID=$Id";
	$r= mysqli_query($con,$sql);

	if($row=mysqli_fetch_assoc($r)){

	$single=array("pid"=>$Id,"pname"=>$row['Name'],"pdecrip"=>$row['Description'],"pcate"=>$row['Category'],"prating"=>$row['Rating'],"cprice"=>$row['CP'],"sprice"=>$row['SP'],"image"=>$row['Image'],"qty"=>$Qty,"total"=>$row['SP']*$Qty);
}
// echo "<pre>";
// print_r($single);

if (empty($_SESSION['cart_info'])) {
	$_SESSION['cart_info']=array($single);
}
else
{
	//searcing
	$flag=0;
	$len=sizeof($_SESSION['cart_info']);
	for ($i=0; $i < $len ; $i++)
	 { 
		if($_SESSION['cart_info'][$i]['pid']==$Id)
		{
			$_SESSION['cart_info'][$i]['qty']+=$Qty;
			$_SESSION['cart_info'][$i]['total']=
			$_SESSION['cart_info'][$i]['qty']*
			$_SESSION['cart_info'][$i]['sprice'];
			$flag=1;
		}
	}
	if($flag==0)
	{
		array_push($_SESSION['cart_info'], $single);
	}
}
	// echo "<pre>";
    // print_r($_SESSION['cart_info']);
	echo "<script>window.location.href='showcart.php';</script>"
?>
<!-- <!DOCTYPE html>
<html>
<head>

</head>
<style>
	/* cart info */
	.cart-page{
		margin: 40px;
		
	}
	.gh{
		width:70%;
		margin:0 auto;
		border-collapse:collapse;
		/* box-sizing:border-box; */
	}
	.cart-in{
		display:flex;
		flex-wrap:wrap;
	}
	
th{
	text-align: left;
	padding:5px;
	color:white;
	background:#ff523b;
	font-weight:normal;
}
td{
	padding: 10px 5px; 
}
td input{
	width: 40px;
	height:30px;
	padding:5px;
}
td a{
	color:#ff523b;
	font-size:12px;
}
td img{
	width:  200px;
	height: 150px;
	margin-right:10px;

}
.total-price{ 
	 display:flex;
	 justify-content: flex-end;
} 
.total-price table {
	border-top: 3px solid #ff523b;
	width:100%;
	max-width: 380px;
	margin:0 300px;

	
}
</style>
   

<body>
<div class="small-container cart-page">

<?php 
				

				if (!empty($_SESSION['cart_info'])) {
				$len=sizeof($_SESSION['cart_info']);
				$sum=0;				
			?>
<table class="gh">
	<tr>
		<th>Serial no</th>
		<th>Product</th>
		<th>Quantity</th>
		<th>Subtotal</th>
	</tr>
	<?php
					for ($i=0; $i<$len; $i++)
					{ 
					$sum+=$_SESSION['cart_info'][$i]['total'];
					
				  ?>
	<tr>
		<td>1</td>
		<td>
			<div class="cart-in">
				<img src="Admin/<?php echo $_SESSION['cart_info'][$i]['image'] ?>">
				<div>
					<p><?php echo $_SESSION['cart_info'][$i]['pname'];?></p>
					<a href="remove.php?index=<?php echo $i; ?>">remove</a>
				</div>
			</div>
		</td>
		<td><?php echo $_SESSION['cart_info'][$i]['qty'];?></td>
		<td><?php echo $_SESSION['cart_info'][$i]['sprice']?></td>
	</tr>
	<?php
					}
	?>
	 <tr>
				  	<th></th>
				  	<th></th>

				  	<th colspan="2">
				  		<p class="btn btn-danger">Gross Total:</p> 
				  	</th>
				  	<?php $_SESSION['total_amt']=$sum;?>
				  	<th><i class="fas fa-rupee-sign"></i><?php echo $sum; ?>/-</th>
				  	<th></th>
				  </tr> -->
		
<!-- </table> -->
<!-- <div class="total-price"> -->
	<!-- <table> -->
		<!-- <tr>
			<td>Gross Total</td>
			<?php $_SESSION['total_amt']=$sum;?>
			<td><?php echo $sum; ?></td>
		</tr>
	</table>
</div> -->
<!-- <a href="Paymentcheck.php" class="btn btn-success" style="float: right;">Payment</a>
		<?php }
		else{
			?>
			<h2><center>Cart Is Empty</center></h2>
			<?php
		} ?>
</div>	 -->
<?php 
include 'footer.php';
?>
<!-- </body> -->
<!-- </html> -->