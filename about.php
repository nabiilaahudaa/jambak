<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jambak.co-About</title>
<link rel="stylesheet" href="styleAbout.css">
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
								<li><a href="home.php">Home</a></li>
								<li><a href="product.php">Products</a></li>
								<li class="active"><a href="about.php"><span>About</span></a></li>
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

<img src="images/about.jpg" width="1200" height="400">
<div id="fh5co-section">

			


<br><br><br><br><br><br><br><br><br><br><br>
<section>
  <nav>
    
 <h5>Comes with a different variety of fresh flowers for each and every occasion, for you and your love one.<h5/>
    
  </nav>
  
  <article>
    <h3>About Us</h3>
    <h5> Jambak. Co founded by 4 friends who have completely different passions come together and produced this beautiful flowers shop together that definitely will give you the 
        feels of friendship with 4 different elements. We will not try to spoil it for you. To feel it by yourself, come and visit us and feel the fresh, bloom with us. </h5>
    <h5>With 5 years experience in flowers and quality speciality, we provide our customers with the best quality and satisfaction that will not make every single of our customer regrets buying with us.</h5>
  </article>
</section>

<footer>
  <h3>What customer says</h3>
  <h5>The freshness and every detail of the products is just aesthetically pleasing
        -Lidya</h5>
</footer>

<br><br><br><br><br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>

</center>
</body>
</html>