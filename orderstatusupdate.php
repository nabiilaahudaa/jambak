<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con, 'b33_26233943_jambakdb');

$orderid=$_POST['orderid'];
$status=$_POST['status'];

$sqla="UPDATE handbouquet SET status='$status' WHERE orderid='$orderid'";
mysqli_query($con,$sqla);
$sqlb="UPDATE handflower SET status='$status' WHERE orderid='$orderid'";
mysqli_query($con,$sqlb);
$sqlc="UPDATE flowerbox SET status='$status' WHERE orderid='$orderid'";
mysqli_query($con,$sqlc);
$sqld="UPDATE flowerbag SET status='$status' WHERE orderid='$orderid'";
mysqli_query($con,$sqld);

header('location:orderstatus.php');

?>