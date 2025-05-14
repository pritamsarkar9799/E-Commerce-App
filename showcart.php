<?php
include 'navbar.php';

 ?>
<!DOCTYPE html>
<html>
<head>

</head>
<style>
	/* cart info */
	.cart-page{
		margin: 40px;
		
	}
	.table1 .gh{
		width:100%;
		border-collapse:collapse;
		margin:0 auto;
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
	background:black;
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
	height: 180px;
	margin-right:10px;

}
.table1{ 
	 /* display:flex;
	 flex-wrap:wrap;
	 justify-content:flex-end; */
	 width:80%;
	 margin:0 auto;
}
.table2{ 
	 display:flex;
	 justify-content:flex-end;
	 width:80%;
	 margin:0 auto;
}  
.table2 .gj {
	border-top: 3px solid black;
	width:80%;
	max-width: 580px;
	
		
}
td:last-child{
	text-align:right;
}
th:last-child{
	text-align:right;
}
.button{
	width:80%;
	margin:0 auto;
	display:flex;
	justify-content:flex-end;
	margin-bottom:50px;

}
.button .button1{
	display:inline-block;
	background:black;
	color:white;
	width:auto;
	font-weight:700;
	height: 35px;
	padding:8px 18px;
	font-size:13px;
}
.empty{
	width:100%;
}
.empty img {
	width:100%;
	max-width: 550px;
	margin:0 auto;
}
</style>
   

<body>
<div class="small-container cart-page">

<?php 
				

				if (!empty($_SESSION['cart_info'])) {
				$len=sizeof($_SESSION['cart_info']);
				$sum=0;				
			?>
<div class="table1">
<table class="gh">
	<tr>
		<th>Serial no</th>
		<th>Product</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Subtotal</th>
	</tr>
	<?php
					for ($i=0; $i<$len; $i++)
					{ 
					$sum+=$_SESSION['cart_info'][$i]['total'];
					$sr=$i+1;
				  ?>
	<tr>
		<td><?php echo"$sr"?></td>
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
		<td><?php echo $sum; ?></td>
	</tr>
	<?php
					}
	?>
	<!-- <tr>
				  	<th></th>
				  	<th></th>

				  	<th colspan="2">
				  		<p class="btn btn-danger">Gross Total:</p> 
				  	</th>
				  	<?php $_SESSION['total_amt']=$sum;?>
				  	<th><i class="fas fa-rupee-sign"></i><?php echo $sum; ?>/-</th>
				  	<th></th>
				  </tr> -->
		
</table>
</div>
	<div class="table2">
	<table class="gj">
		<tr>
			<td>Gross Total</td>
			<?php $_SESSION['total_amt']=$sum;?>
			<td><?php echo $sum; ?></td>
		</tr>
	</table>
	</div>
	</div>
<div class="button">
<a href="Paymentcheck.php" class="button1">Proceed to pay</a>
		<?php }
		else{
			?>
			<span class="empty"><img src="./Admin/IMG/empty.png"></span>
			<?php
		} ?>
</div>	
<?php 
include 'footer.php';
?>
</body>
</html>