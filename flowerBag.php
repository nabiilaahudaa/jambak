<html>
<head>
<title>Flower Bag</title>
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
								<a class="fh5co-logo" href="index.php">Jambak.Co</a>-->
							</div>
						</div>
						<div class="col-md-9 main-nav">
							<ul class="nav text-right">
								<li><a href="index.php">Home</a></li>
								<li><a href="product.php">Products</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
                                <li><a href="trackingpage.php">Track</a></li>
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
<h2>Flowers in Bag</h2>

<img src="images/Bag1.jpg" width="180" height="180" hspace="10">
<img src="images/Bag2.jpg" width="180" height="180" hspace="10">
<img src="images/Bag3.jpg" width="180" height="180" hspace="10">
<img src="images/Bag4.jpg" width="180" height="180" hspace="10">
<img src="images/Bag5.jpg" width="180" height="180" hspace="10">

<form action="flowerBagOrder.php" method="POST">

	<br><br><br><label for="flower">Choose your flower :  </label><br>

	<input type="radio" id="lily" name="flower" value="lily" required>
  	<label for="lily">Lily - RM5/pcs</label><br>
	<input type="radio" id="rose" name="flower" value="rose" required>
  	<label for="rose">Rose - RM 2/pcs</label><br>
	<input type="radio" id="sunflower" name="flower" value="sunflower" required>
  	<label for="sunflower">Sunflower - RM4/pcs</label><br>
	<input type="radio" id="daisy" name="flower" value="daisy" required>
  	<label for="daisy">Daisy - RM2/pcs</label><br>
	<input type="radio" id="babysbreath" name="flower" value="babysbreath" required>
  	<label for="babysbreath">Baby's Breath - RM3/pcs</label><br>

	<br><br><br><label for="quantity">Quantity :  </label><br> 

	<input type="radio" id="5" name="quantity" value="5" required>
  	<label for="5">5 pcs</label><br>
	<input type="radio" id="10" name="quantity" value="10" required>
  	<label for="10">10 pcs</label><br>
	<input type="radio" id="15" name="quantity" value="15" required>
  	<label for="15">15 pcs</label><br>
	<input type="radio" id="20" name="quantity" value="20" required>
  	<label for="20">20 pcs</label><br>
	<input type="radio" id="50" name="quantity" value="50" required>
  	<label for="50">50 pcs</label><br>

	<br><br><br><label>Type your quote here: </label><br>

	<input type="quote" name="quote" style="width:300px;height:100px;" required>

	<br><br><br>
	<button type="submit" class="btn btn-primary">Checkout</button>
	
</form>

<br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>

</center>
</body>
</html>