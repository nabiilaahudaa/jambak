<?php 
session_start();
?>
<html>
<head>
<title>Jambak.co</title>
<link rel="stylesheet" href="styleindex.css">
<head>

</head>
<body>

	<div class="box-wrap">
		<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="row">
						<!--<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="index.php">Jambak.Co</a>-->
							</div>
						</div>
						<div class="col-md-9 main-nav">
							<ul class="nav text-right">
								
								<li><a href="index.php"><span>Home</span></a></li>
								<li><a href="product.php">Products</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="trackingpage.php">Track</a></li>
								<li class="active"><?php session_start(); if($_SESSION['username']==true) 
                                                    echo "WELCOME, "."<a href='history.php'>".$_SESSION['username']."</a>"; 
                                                    else echo "<a href='login.php'>".LOGIN."</a>";
                                    ?> </li>
                                <li><?php session_start(); if($_SESSION['username']==true) 
                                                    echo "<a href='logout.php'>"."Logout"."</a>";
                                    ?> </li>
							</ul>
						</div>
					</div>
				</nav>
		  </div>
		</header>


<center>

<h1>Jambak.co</h1>
<p>Let's bloom with us.</p>


<img src="images/wallpaper10.jpg" width="1200" height="400">
<br><br><br><br><br><br>

<h2>My History</h2>
<?php  

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con, 'b33_26233943_jambakdb');

$username=$_SESSION['username'];

$sqla="SELECT orderid,username,status FROM handbouquet WHERE username='$username'";
$result=$con->query($sqla);
if ($result->num_rows > 0) {
  	echo "<table><tr><th>Order ID</th><th>Product Type</th><th>Status</th></tr>";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    		echo "<tr><td>".$row["orderid"]."</td><td>Hand Bouquet</td><td>".$row["status"]."</td></tr>";
  	}
}
$sqlb="SELECT orderid,username,status FROM handflower WHERE username='$username'";
$result=$con->query($sqlb);
if ($result->num_rows > 0) {
  	while($row = $result->fetch_assoc()) {
    		echo "<tr><td>".$row["orderid"]."</td><td>Hand Flower</td><td>".$row["status"]."</td></tr>";
  	}
}
$sqlc="SELECT orderid,username,status FROM flowerbag WHERE username='$username'";
$result=$con->query($sqlc);
if ($result->num_rows > 0) {
  	while($row = $result->fetch_assoc()) {
    		echo "<tr><td>".$row["orderid"]."</td><td>Flower Bag</td><td>".$row["status"]."</td></tr>";
  	}
}
$sqld="SELECT orderid,username,status FROM flowerbox WHERE username='$username'";
$result=$con->query($sqld);
if ($result->num_rows > 0) {
  	while($row = $result->fetch_assoc()) {
    		echo "<tr><td>".$row["orderid"]."</td><td>Flower Box</td><td>".$row["status"]."</td></tr>";
  	}
}
echo "</table>";

?>
<center>

<br><br><h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>	

</center>
</body>
</html>