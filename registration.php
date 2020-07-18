<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con, 'b33_26233943_jambakdb');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phonenum=$_POST['phonenum'];
$email=$_POST['email'];
$password=$_POST['password'];

$s="select * from user where email = '$email'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
	echo '<script type="text/javascript">'; 
	echo 'alert("Email already taken.");'; 
	echo 'window.location.href = "signup.php";';
	echo '</script>';
}

else{
	$reg="insert into user(fname,lname,phonenum,email,password)values('$fname','$lname','$phonenum','$email','$password')";
	mysqli_query($con,$reg);
	echo '<script type="text/javascript">'; 
	echo 'alert("Registration successful. Please login to purchase our product.");'; 
	echo 'window.location.href = "index.php";';
	echo '</script>';
}



?>