<!DOCTYPE html>
<html>
<head>
<title>Jambak.co</title>
<link rel="stylesheet" href="styleindex.css">

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
								
								<li class="active"><a href="index.php"><span>Home</span></a></li>
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


<img src="images/wallpaper10.jpg" width=100% height="400">
<img src="images/grid1.png" width=100% height=100%>
<br><br><br><br><br><br>


<h6> Suggested by us</h6>

</center>

<div class="row">
  <div class="column">
    <div class="layout">
     <div class="card">
  <img src="images/BuyN1.jpg" alt="Hand bouquet" width="100%" height="100%">
  <h8>Roses Hand bouquet</h8>
  <p class="price">From MYR10</p>
  <p>Roses as low as 10MYR ? say yes obv</p>
  <p><a href="handBouquet.php"><button>Buy now</button></a></p>
     </div>
    </div>
   </div>

  <div class="column">
    <div class="card">
  <img src="images/BuyN2.jpg" alt="Hand flower" width="100%" height="100%">
  <h8>Baby's Breath hand flower</h8>
  <p class="price">From MYR10</p>
  <p>Minimal soft touch of baby's breath to complete your wedding look.</p>
  <p><a href="handFlower.php"><button>Buy now</button></a></p>
    </div>
  </div>

  <div class="column">
    <div class="card">
  <img src="images/BuyN3.jpg" alt="Flowers Box" width="100%" height="100%">
  <h8>Red Roses in Box</h8>
  <p class="price">From MYR20</p>
  <p>Classic red roses for your love one.</p>
  <p><a href="flowerBox.php"><button>Buy now</button></a></p>
    </div>
  </div>

  <div class="column">
    <div class="card">
  <img src="images/BuyN4.jpg" alt="Hand flower" width="100%" height="100%">
  <h8>Daisy hand flower</h8>
  <p class="price">From MYR15</p>
  <p>Daisy for wedding ? Why not hun. </p>
  <p><a href="handFlower.php"><button>Buy now</button></a></p>
    </div>
  </div>
</div>
<center>


<div class="mapouter"><div class="gmap_canvas"><iframe width=100% height="500" 
id="gmap_canvas" src="https://maps.google.com/maps?q=flower%20shop%20shah%20alam&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
</iframe><a href="https://www.whatismyip-address.com/nordvpn-coupon/">nordvpn deals</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1200px;}.gmap_canvas 
{overflow:hidden;background:none!important;height:500px;width:1200px;}</style></div>
<br><br><br>





	
<br><br><h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>
		

</center>
</body>
</html>