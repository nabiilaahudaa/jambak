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
<img src="images/wallpaper10.jpg" width=100% height="400">
<br>

<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con,'b33_26233943_jambakdb');

$sqla="SELECT * FROM billing WHERE deliverytype='delivery'";
$result=$con->query($sqla);

if ($result->num_rows > 0) {
  	echo "<h2>Delivery Type: Delivery</h2>";
    echo "<table><tr><th>Order ID</th><th>Name</th><th>Full Address</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["name"]."</td><td>".$row["address"].", ".$row["zipcode"].", ".$row["city"].", ".$row["state"]."</td></tr>";
  	}
  	echo "</table>";
}
echo "<br><br>";

$sqlb="SELECT * FROM billing WHERE deliverytype='self pickup'";
$result=$con->query($sqlb);

if ($result->num_rows > 0) {
  	echo "<h2>Delivery Type: Self Pickup</h2>";
    echo "<table><tr><th>Order ID</th><th>Name</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["name"]."</td></tr>";
  	} 
  	echo "</table>";
}
echo "<br><br>";

?>

<h2><a href="staffindex.php">Back to staff main page</a></h2><br>
<br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>
</center>
</body>
</html>	