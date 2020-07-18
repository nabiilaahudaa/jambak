<!DOCTYPE html>
<html>
<head>
<title>JambakCo-Contact</title>
<link rel="stylesheet" href="styleContact.css">
</head>

<body>
	
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	

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
								<li class="active"><a href="contact.php"><span>Contact</span></a></li>
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
<img src="images/wallpaper7.jpg" width="1200" height="400">
<br><br><br><br>
</center>


<h2><i style='font-size:24px' class='fas'>&#xf08d;</i>&nbsp&nbsp;No 24, Jalan Lily, 40000 Shah Alam, Malaysia</h2>
<h2><i style='font-size:24px' class='fas'>&#xf095;</i>&nbsp&nbsp;+06 78643567</h2>
<h2><i style='font-size:24px' class='fas'>&#xf658;</i>&nbsp&nbsp;JambakCo@gmail.com</h2>
<h2><i style='font-size:24px' class='fa'>&#xf0ac;</i><a href="index.php">&nbsp&nbsp;www.JambakCo.my</a></li></h2>

<br><br><br><br><br><br>
<center>
<div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="500" 
id="gmap_canvas" src="https://maps.google.com/maps?q=flower%20shop%20shah%20alam&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
</iframe><a href="https://www.whatismyip-address.com/nordvpn-coupon/">nordvpn deals</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1200px;}.gmap_canvas 
{overflow:hidden;background:none!important;height:500px;width:1200px;}</style></div>


<br><br><br><br><br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>

</center>
</body>
</html>

</center>
</body>
</html>