<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con,'b33_26233943_jambakdb');


$email=$_POST['email'];
$password=$_POST['password'];

$s = " select * from user where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['username'] = $email;
	header('location:index.php');
}else{
	echo '<script type="text/javascript">'; 
	echo 'alert("Wrong username or password.");'; 
	echo 'window.location.href = "login.php";';
	echo '</script>';	

}

?>