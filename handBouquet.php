<html>
<head>
<title>Product: Hand Bouquet</title>
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
<h2>Hand Bouquet</h2>

<img src="images/lilyBouquet.jpg" width="180" height="180" hspace="10">
<img src="images/roseBouquet.jpg" width="180" height="180" hspace="10">
<img src="images/sunflowerBouquet.jpg" width="180" height="180" hspace="10">
<img src="images/daisyBouquet.jpg" width="180" height="180" hspace="10">
<img src="images/BbBouquet.jpg" width="180" height="180" hspace="10">

<form action="handBouquetOrder.php" method="POST">

	<br><br><label for="flower">Choose your flower :  </label><br> 

	<input type="radio" id="lily" name="flower" value="lily" required>
  	<label for="lily">Lily - RM5/pcs</label><br>
	<input type="radio" id="rose" name="flower" value="rose" required>
  	<label for="rose">Rose - RM 2/pcs</label><br>
	<input type="radio" id="sunflower" name="flower" value="sunflower" required>
  	<label for="sunflower">Sunflower - RM4/pcs</label><br>
	<input type="radio" id="daisy" name="flower" value="daisy" required>
  	<label for="daisy">Daisy - RM3/pcs</label><br>
	<input type="radio" id="babysbreath" name="flower" value="babysbreath" required>
  	<label for="babysbreath">Baby's Breath - RM2/pcs</label><br>

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

	<br><br><br><br><br>
	<img src="images/wblack.jpg" width="150" height="80" hspace="10">
	<img src="images/wwhite.jpg" width="150" height="80" hspace="10">
	<img src="images/wyellow.jpg" width="150" height="80" hspace="10">
	<img src="images/wroseGold.jpg" width="150" height="80" hspace="10">
	<img src="images/wgold.jpg" width="150" height="80" hspace="10">

	<br><br><label for="wrapper">Choose your wrapper :  </label><br> 

	<input type="radio" id="black" name="wrapper" value="black" required>
  	<label for="black">Black</label><br>
	<input type="radio" id="white" name="wrapper" value="white" required>
  	<label for="white">White</label><br>
	<input type="radio" id="yellow" name="wrapper" value="yellow" required>
  	<label for="yellow">Yellow</label><br>
	<input type="radio" id="rosegold" name="wrapper" value="rosegold" required>
  	<label for="rosegold">Rose gold</label><br>
	<input type="radio" id="gold" name="wrapper" value="gold" required>
  	<label for="gold">Gold</label><br>

	<br><br><br><br><br>

	<button type="submit" class="btn btn-primary">Checkout</button>
	
</form>

<br><br><br><br><br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>

</center>
</body>
</html>