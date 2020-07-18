<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="stylehuda.css">
<!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
-->
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
								<li class="active"><a href="login.php"><span>Login</span></a></li>
								
							</ul>
						</div>
					</div>
				</nav>
		  </div>
		</header>

<center>
<h1>Jambak.co</h1>
<p>Let's bloom with us.</p>

<div class="container">
  <div class="register-box">
    <div class="col-xs-6 registerbox">
      <h2> Register Here </h2>
      <form action="registration.php" method="post">

        <div class="form-group">
          <label>First Name</label>
          <input type="text" name="fname" class="form-control" required>
        </div>

        <div class="form-group">
          <label>Last Name</label>
          <input type="text" name="lname" class="form-control" required>
        </div>

        <div class="form-group">
          <label>Phone Number</label>
          <input type="text" name="phonenum" class="form-control" required>
        </div>

        <div class="form-group">
          <label>Email Address</label>
          <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>
</div> 


<p>Already have an account? Login <a href="login.php">here</a></p>


<br><br><br><br><br><h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>
</body>
</body>
</html>