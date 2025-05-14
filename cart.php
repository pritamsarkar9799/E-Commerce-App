<?php	
	include 'navbar.php';

	$Id=$_GET['id'];
	$Qty=$_GET['quantity'];

	$sql="select * from product where ID=$Id ";
	$qry=mysqli_query($con,$sql);

 if($row=mysqli_fetch_assoc($qry))
 	{
		$single=array("ID"=>$Id,"Name"=>$row['Name'],"Description"=>$row['Description'],"Category"=>$row['Category'],"Rating"=>$row['Rating'],"CP"=>$row['CP'],"SP"=>$row['SP'],"Image"=>$row['Image'],"Qty"=>$Qty,"total"=>$row['SP']*$Qty);
	}

	// echo "<pre>";
	// print_r($single);

	 if(empty($_SESSION['cart_info'])){

	 	$_SESSION['cart_info']=array($single);
	 }
	 else{

	// searching
 	$flag=0;
	$len=sizeof($_SESSION['cart_info']);

	for($i=0;$i<$len;$i++)
		{
			if($_SESSION['cart_info'][$i]['ID']==$Id)
			{
				$_SESSION['cart_info'][$i]['Qty']+=$Qty;
				$_SESSION['cart_info'][$i]['total']=
				$_SESSION['cart_info'][$i]['Qty']*
				$_SESSION['cart_info'][$i]['SP'];
				$flag=1;
			}
		}

	if($flag==0)
	{
		array_push($_SESSION['cart_info'], $single);
	}

}

	echo "<pre>";
	print_r($_SESSION['cart_info']);
	
	header("location:showcart.php");


?>