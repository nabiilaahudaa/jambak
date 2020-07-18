<!DOCTYPE html>
<html>
<head>
<title>onlinebanking</title>
<link rel="stylesheet" href="style2.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
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




        <article class="part onlinebanking-details">
            <h2>
                Pay with  Online Banking
            </h2>

<img src="sshot2.png" width="300" height="200" hspace="10"><br><br>           
<p> <img src="images/fpx-logo.jpg" width="200" height="100" hspace="20"></a></p>


<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Choose bank</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    
    <a href="https://www.mybsn.com.my" target="_blank" ><img src="images/bsn.png" width="70" height="70" hspace="10"><br>MYBSN</a>
    <a href="https://www.cimbclicks.com.my/" target="_blank" ><img src="images/cimb.png" width="70" height="70" hspace="10"><br>CIMBClicks</a>
    <a href="https://www.bankislam.biz/" target="_blank"><img src="images/bankislam.png" width="70" height="70" hspace="10"><br>Bank Islam</a>
    <a href="https://www.maybank2u.com.my/home/m2u/common/login.do" target="_blank"><img src="images/maybank.png" width="70" height="70" hspace="10"><br>Maybank2u</a>
    <a href="https://www.pbebank.com/" target="_blank"><img src="images/publicbank.png" width="70" height="70" hspace="10"><br>Public Bank</a>
    <a href="https://logon.rhb.com.my/" target="_blank"><img src="images/rhb.png" width="70" height="70" hspace="10"><br>RHB Bank</a>

  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

<br><br><br><br><a href="upload.php" target="_blank">Please upload payment proof image here.</a>
</form>
                </div>

<br><br><br><br><br>
<h7>Copyright 2018 <a href="#">Jambak.Co</a>. All Rights Reserved. <br>Made with love by Kusut </h7>

</body>
</html>