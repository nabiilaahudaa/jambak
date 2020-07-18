<?php
session_start();
?>
<html>
<head>
<title>Checkout</title>
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
<h2>Billing Address</h2>

<br>
<form action="billing.php" method="POST">

	<h2>Order ID: <?php echo $_SESSION['orderid']; ?></h2>
	<h2>Email:<input type="text" name="email" required ></h2>
	<h2>Name:<input type="text" name="name" required></h2>
	<h2>Address:<input type="text" name="address" required></h2>
	<h2>City:<input type="text" name="city" required></h2>
	<h2>State:<input type="text" name="state" required></h2>
	<h2>Zip code:<input type="number" name="zipcode" required></h2>

	<h2>
    <label for="deliverytype">Delivery option :  </label> 
	
    <input type="radio" id="Delivery" name="deliverytype" value="Delivery" required>
  	<label for="Delivery">Delivery</label><br>
	<input type="radio" id="Self pickup" name="deliverytype" value="Self pickup" required>
  	<label for="Self pickup">Self pickup</label><br>

    <h2>Total: RM <?php echo $_SESSION['totalprice']; ?></h2>

	
	<button type="submit" class="btn btn-primary">Payment</button>
	
    <br><br>
    <h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>
</form>

</body>
</html>
