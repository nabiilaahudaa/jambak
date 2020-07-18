<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con,'b33_26233943_jambakdb');

$orderid=$_SESSION['orderid'];
$totalprice=$_SESSION['totalprice'];

$email=$_POST['email'];
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$deliverytype=$_POST['deliverytype'] ;

$cob="insert into billing(orderid,email,name,address,city,state,zipcode,deliverytype)values('$orderid','$email','$name','$address','$city','$state','$zipcode','$deliverytype')";
mysqli_query($con,$cob);

header("Location:paymentmethod.php") ;

?>

