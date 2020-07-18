<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con, 'b33_26233943_jambakdb');

$orderid=uniqid();

$username=$_SESSION['username'];
$status="confirmed";

$flower=$_POST['flower'];
$quantity=$_POST['quantity'];
$ribbon=$_POST['ribbon'];

$total= 0;
$price= 0;

if ($flower == "lily")  {
	$price= 5;
	$total = $price * $quantity ;
	
}
else if ($flower == "rose"){
	$price= 2;
	$total = $price * $quantity ;
	
}
else if ($flower == "sunflower"){
	$price= 4;
	$total = $price * $quantity ;
	
}
else if ($flower == "daisy"){
	$price= 3;
	$total = $price * $quantity ;
	
}
else  {
	$price= 2;
	$total = $price * $quantity ;
	
}

$totalprice=$total;

$cohf="insert into handflower(orderid,username,flower,quantity,ribbon,totalprice,status)values('$orderid','$username','$flower','$quantity','$ribbon','$totalprice','$status')";
mysqli_query($con,$cohf);

$_SESSION['orderid'] = $orderid;
header('location:checkout.php');

$_SESSION['totalprice'] = $totalprice;
header('location:checkout.php');

echo '<script type="text/javascript">'; 
echo 'alert ("Your order ID is: '.$orderid.' and total price is RM: '.$totalprice.'. Proceed checkout."); '; 
echo 'window.location.href = "checkout.php";';
echo '</script>';

?>