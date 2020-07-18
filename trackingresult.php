

<!DOCTYPE html>
<html>
<head>
<title>Jambak.co-track</title>
<link rel="stylesheet" href="style2.css">
</head>

<body>

<div class="box-wrap">
		<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="row">
						<!--<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="index.html">Jambak.Co</a>-->
							</div>
						</div>
						<div class="col-md-9 main-nav">
							<ul class="nav text-right">
								<li><a href="index.php">Home</a></li>
								<li><a href="product.php">Products</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li class="active"><a href="trackingpage.php"><span>Track</span></a></li>
                                <li><?php session_start(); if($_SESSION['username']==true) 
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
<br><br>
<h2>Track your order here</h2>
<br><br>

<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con, 'b33_26233943_jambakdb');

$orderid=$_POST['orderid'];

$sqla="SELECT orderid,status FROM handbouquet WHERE orderid='$orderid'";
$result=$con->query($sqla);

if ($result->num_rows > 0)
{
  	echo "Order ID";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    		echo $row["orderid"].": ".$row["status"];
  	
	if ($row["status"]=="confirmed")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-todo">Payment Confirmed</li><!---->
	<li class="progtrckr-todo">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="paid")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-todo">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="preparing")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="prepared")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="delivering")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-done">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="successful")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-done">OTW/to be pick</li><!---->
	<li class="progtrckr-done">Successful</li>
	</ol>';}


	}//closed while
}

$sqlb="SELECT orderid,status FROM handflower WHERE orderid='$orderid'";
$result=$con->query($sqlb);

if ($result->num_rows > 0)
{
  	echo "Order ID";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    		echo $row["orderid"].": ".$row["status"];
  	
	if ($row["status"]=="confirmed")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-todo">Payment Confirmed</li><!---->
	<li class="progtrckr-todo">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="paid")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-todo">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="preparing")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="prepared")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="delivering")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-done">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="successful")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-done">OTW/to be pick</li><!---->
	<li class="progtrckr-done">Successful</li>
	</ol>';}


	}//closed while
}

$sqlc="SELECT orderid,status FROM flowerbag WHERE orderid='$orderid'";
$result=$con->query($sqlc);

if ($result->num_rows > 0)
{
  	echo "Order ID";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    		echo $row["orderid"].": ".$row["status"];
  	
	if ($row["status"]=="confirmed")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-todo">Payment Confirmed</li><!---->
	<li class="progtrckr-todo">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="paid")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-todo">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="preparing")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="prepared")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="delivering")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-done">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="successful")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-done">OTW/to be pick</li><!---->
	<li class="progtrckr-done">Successful</li>
	</ol>';}


	}//closed while
}

$sqld="SELECT orderid,status FROM flowerbox WHERE orderid='$orderid'";
$result=$con->query($sqld);

if ($result->num_rows > 0)
{
  	echo "Order ID";
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
    		echo $row["orderid"].": ".$row["status"];
  	
	if ($row["status"]=="confirmed")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-todo">Payment Confirmed</li><!---->
	<li class="progtrckr-todo">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="paid")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-todo">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="preparing")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-todo">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="prepared")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-todo">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="delivering")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-done">OTW/to be pick</li><!---->
	<li class="progtrckr-todo">Successful</li>
	</ol>';}

	else if ($row["status"]=="successful")
	{ echo
	'<ol class="progtrckr" data-progtrckr-steps="7">
	<li class="progtrckr-done">Order Processing</li><!---->
	<li class="progtrckr-done">Order Confirmed</li><!---->
	<li class="progtrckr-done">Payment Confirmed</li><!---->
	<li class="progtrckr-done">Pre-Production</li><!---->
	<li class="progtrckr-done">In Production</li><!---->
	<li class="progtrckr-done">OTW/to be pick</li><!---->
	<li class="progtrckr-done">Successful</li>
	</ol>';}


	}//closed while
}

?>

<br><br>
<h2><a href="trackingpage.php">Back to tracking page</h2>

<br><br><br><br><br><br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>

</center>
</body>
</html>