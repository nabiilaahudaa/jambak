<html>
<head>
<title>Order Status</title>
<link rel="stylesheet" href="styleindex.css">
<style>
tr:nth-child(even) {background-color: AntiqueWhite;}
</style>
</head>
<body>
<center>

<p style="text-align:right;"><a href="stafflogout.php">Logout</a></p>
<p>Welcome, Jambak staff<p>
<h1>Jambak.co</h1>
<p>Let's bloom with us.</p>
<img src="images/wallpaper10.jpg" width=100% height="400"><br>
<h1>List of All Orders</h1>

<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con,'b33_26233943_jambakdb');

$sqla="SELECT * FROM handbouquet";
$result=$con->query($sqla);

if ($result->num_rows > 0) {
  	echo "<h2>Hand Bouquet Orders:</h2>";
    echo "<table><tr><th>Order ID</th><th>Username</th><th>Flower</th><th>Quantity</th><th>Wrapper</th><th>Total Price</th><th>Status</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["username"]."</td><td>".$row["flower"]."</td><td>".$row["quantity"]."</td><td>".$row["wrapper"]."</td><td>".$row["totalprice"]."</td><td>".$row["status"]."</td></tr>";
  	}
  	echo "</table>";
}
echo "<br><br>";

$sqlb="SELECT * FROM handflower";
$result=$con->query($sqlb);

if ($result->num_rows > 0) {
  	echo "<h2>Hand Flower Orders:</h2>";
    echo "<table><tr><th>Order ID</th><th>Username</th><th>Flower</th><th>Quantity</th><th>Ribbon</th><th>Total Price</th><th>Status</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["username"]."</td><td>".$row["flower"]."</td><td>".$row["quantity"]."</td><td>".$row["ribbon"]."</td><td>".$row["totalprice"]."</td><td>".$row["status"]."</td></tr>";
  	}
  	echo "</table>";
}
echo "<br><br>";

$sqlc="SELECT * FROM flowerbag";
$result=$con->query($sqlc);

if ($result->num_rows > 0) {
  	echo "<h2>Flower Bag Orders:</h2>";
    echo "<table><tr><th>Order ID</th><th>Username</th><th>Flower</th><th>Quantity</th><th>Quote</th><th>Total Price</th><th>Status</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["username"]."</td><td>".$row["flower"]."</td><td>".$row["quantity"]."</td><td>".$row["quote"]."</td><td>".$row["totalprice"]."</td><td>".$row["status"]."</td></tr>";
  	}
  	echo "</table>";
}
echo "<br><br>";

$sqld="SELECT * FROM flowerbox";
$result=$con->query($sqld);

if ($result->num_rows > 0) {
  	echo "<h2>Flower Box Orders:</h2>";
    echo "<table><tr><th>Order ID</th><th>Username</th><th>Flower</th><th>Quantity</th><th>Box</th><th>Total Price</th><th>Status</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["username"]."</td><td>".$row["flower"]."</td><td>".$row["quantity"]."</td><td>".$row["box"]."</td><td>".$row["totalprice"]."</td><td>".$row["status"]."</td></tr>";
  	}
  	echo "</table>";
}
echo "<br><br>";
echo "<h2>Update customer's order status:</h2>";
?>

<h2><a href="staffindex.php">Back to staff main page</a></h2><br>
<br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>
</center>
</body>
</html>	