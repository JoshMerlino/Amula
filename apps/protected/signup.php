<?php
include("auth.php");

if($_POST["password"] !== $_POST["cpassword"]){
	echo "Passwords don't match";
} else {
	
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$connection = new mysqli("localhost","root","","amula");
	$res = $connection -> query("SELECT * FROM users WHERE username='$username' OR email='$email'");

	if(mysqli_num_rows($res) > 0) {
		echo "That user already exists";
	} else {
		echo "success";
		$connection -> query("INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')");
		$expire = time() + (10 * 365 * 24 * 60 * 60);
		
		setcookie("email", $email, time()+9999999999999,"/");
		setcookie("password", $password, time()+9999999999999,"/");
		
		$res = $connection -> query("SELECT * FROM users WHERE email='$email' AND password='$password'");
		$row = $res -> fetch_array();
		
		$userid = $row["userid"];
		copy("../../dist/avatars/default.png","../../dist/avatars/$userid.png");
		
	}
}