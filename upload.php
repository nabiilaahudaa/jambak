<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con, 'b33_26233943_jambakdb');

$orderid=$_SESSION['orderid'];
$status="paid";

if (isset($_POST['upload'])) {
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	$file_tem_loc = $_FILES['file']['tmp_name'];
	$file_store = "upload/".$file_name;

	if (move_uploaded_file($file_tem_loc, $file_store)); {
		echo '<script type="text/javascript">'; 
		echo 'alert("File is successfully uploaded.");'; 
		echo 'window.location.href = "upload.php";';
		echo '</script>';

        $sqla="SELECT * FROM handbouquet WHERE orderid='$orderid'";
		mysqli_query($con,$sqla);
        $sqlaa="UPDATE handbouquet SET status='$status' WHERE orderid='$orderid'";
        mysqli_query($con,$sqlaa);
		
		$sqlb="SELECT * FROM handflower WHERE orderid='$orderid'";
		mysqli_query($con,$sqlb);
		$sqlbb="UPDATE handflower SET status='$status' WHERE orderid='$orderid'";
		mysqli_query($con,$sqlbb);

		$sqlc="SELECT * FROM flowerbox WHERE orderid='$orderid'";
		mysqli_query($con,$sqlc);
		$sqlcc="UPDATE flowerbox SET status='$status' WHERE orderid='$orderid'";
		mysqli_query($con,$sqlcc);

		$sqld="SELECT * FROM flowerbag WHERE orderid='$orderid'";
		mysqli_query($con,$sqld);
		$sqldd="UPDATE flowerbag SET status='$status' WHERE orderid='$orderid'";
		mysqli_query($con,$sqldd);
		
	}
}
?>

<html>
<head>
<title>File Upload</title>
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

<form action= "upload.php" method= "POST" enctype= "multipart/form-data">
	<label>Uploading Files</label> <br><br>
	<label>Please rename your payment proof with your order ID before uploading<label>
	<p><input type = "file" name="file"/></p>
	<p><input type="submit" name="upload" value="Upload Image"></p>
</form>

<br><br><br><br><br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>

</body>
</html>