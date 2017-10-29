<?php
include("auth.php");
	
$email = $_POST["email"];
$password = $_POST["password"];
	
$connection = new mysqli("localhost","root","","amula");
$res = $connection -> query("SELECT * FROM users WHERE email='$email' AND password='$password'");

if(mysqli_num_rows($res) > 0) {
	echo "success";
	
	$expire = time() + (10 * 365 * 24 * 60 * 60);
	setcookie("email", $email, time()+9999999999999,"/");
	setcookie("password", $password, time()+9999999999999,"/");
	
} else {
	echo "Invalid username or password";
}