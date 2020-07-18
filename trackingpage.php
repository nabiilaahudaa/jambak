
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

          <h3>ORDER ID: </h3>
          <br>
	<form action="trackingresult.php" method="post">           
          <input type="text" class="form-control" name="orderid" value="" placeholder="put your order id here">
	  <br>
          <button type="submit" class="btn btn-primary">Get status</button>
	</form>

<br>

<br><br><br>

<br><br><br><br><br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>

</center>
</body>
</html>