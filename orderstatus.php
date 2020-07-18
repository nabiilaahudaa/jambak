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

$sqla="SELECT orderid,status FROM handbouquet";
$result=$con->query($sqla);

if ($result->num_rows > 0) {
  	echo "<h2>Hand Bouquet Orders:</h2>";
    echo "<table><tr><th>Order ID</th><th>Status</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["status"]."</td></tr>";
  	}
  	echo "</table>";
}
echo "<br><br>";

$sqlb="SELECT orderid,status FROM handflower";
$result=$con->query($sqlb);

if ($result->num_rows > 0) {
  	echo "<h2>Hand Flower Orders:</h2>";
    echo "<table><tr><th>Order ID</th><th>Status</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["status"]."</td></tr>";
  	}
  	echo "</table>";
}
echo "<br><br>";

$sqlc="SELECT orderid,status FROM flowerbag";
$result=$con->query($sqlc);

if ($result->num_rows > 0) {
  	echo "<h2>Flower Bag Orders:</h2>";
    echo "<table><tr><th>Order ID</th><th>Status</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["status"]."</td></tr>";
  	}
  	echo "</table>";
}
echo "<br><br>";

$sqld="SELECT orderid,status FROM flowerbox";
$result=$con->query($sqld);

if ($result->num_rows > 0) {
  	echo "<h2>Flower Box Orders:</h2>";
    echo "<table><tr><th>Order ID</th><th>Status</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["orderid"]."</td><td>".$row["status"]."</td></tr>";
  	}
  	echo "</table>";
}
echo "<br><br>";
echo "<h2>Update customer's order status:</h2>";
?>

<form action="orderstatusupdate.php" method="POST">
<table>
    <tr><th>Order ID</th><th>Status</th></tr>
    <tr><td><input type="text" name="orderid" ></td>
	    <td><input type="radio" id="preparing" name="status" value="preparing">
	    	<label for="preparing">Preparing</label>
	    	<input type="radio" id="prepared" name="status" value="prepared">
	    	<label for="prepared">Prepared</label>
	    	<input type="radio" id="delivering" name="status" value="delivering">
	    	<label for="delivering">Delivering</label>
	    	<input type="radio" id="successful" name="status" value="successful">
	    	<label for="successful">Successful</label>
    	</td>
	    <td><button type="submit" class="btn btn-primary">Update</button></td>
    </tr>
</table>
</form>

<h2><a href="staffindex.php">Back to staff main page</a></h2><br>
<br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>
</center>
</body>
</html>	