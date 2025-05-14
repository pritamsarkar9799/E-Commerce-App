<?php
// include 'NAV.php';
session_start();
$Index=$_GET['index'];

echo $Index;

$a = ($_SESSION['cart_info']);
echo "<pre>";
print_r($a);

echo "<hr>";
unset($a[$Index]);
echo "<pre>";
print_r($a);


$b= array_values($a);
echo "<pre>";
print_r($b);
$_SESSION['cart_info'] = $b;
header('location:showcart.php');
 ?>