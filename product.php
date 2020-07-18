<html>
<head>
<title>Jambak.co-Product</title>
<link rel="stylesheet" href="styleProducts.css">
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
								<li class="active"><a href="product.php"><span>Products</span></a></li>
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
<img src="images/wallpaper8.jpg" width="1200" height="400">
<br><br><br>

<!--HAND BOUQUET-->
<br><br><br>
<p><a href="handBouquet.php"><img src="images/Flowers1.jpg" width="300" height="300" hspace="10"></a></p>
<p>Hand Bouquet</p>


<!--HAND FLOWER-->
<p><a href="handFlower.php"><img src="images/Flowers2.jpg" width="300" height="300" hspace="20"></a></p>
<p>Wedding Hand Flower</p>


<!--FLOWER BAG-->
<p><a href="flowerBag.php"><img src="images/Flowers3.jpg" width="300" height="300" hspace="10"></a></p>
<p>Flower Bag</p>


<!--FLOWER BOX-->
<p><a href="flowerBox.php"><img src="images/Flowers4.jpg" width="300" height="300" hspace="10"></a><p>
<p>Flower Box</p>

<br>

<br><br><h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>
		

</center>
</body>
</html>