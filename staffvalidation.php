<?php

session_start();

$con = mysqli_connect('sql305.byethost33.com','b33_26233943','123456');

mysqli_select_db($con, 'b33_26233943_jambakdb');

$id=$_POST['id'];
$password=$_POST['password'];

$s = " select * from staff where id = '$id' && password = '$password'";

$result = mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num==1){
	header('location:staffindex.php');
}else{
	echo '<script type="text/javascript">'; 
	echo 'alert("Wrong ID or password.");'; 
	echo 'window.location.href = "stafflogin.php";';
	echo '</script>';	

}

?>