<?php

$logged_in = true;

function user(){
	$ret = array();
	
	$email = $_COOKIE["email"];
	$password = $_COOKIE["password"];
	
	if(isset($email)){
		if(isset($password)){
			
			$connection = new mysqli("localhost","root","","amula");
			$res = $connection -> query("SELECT * FROM users WHERE email='$email' AND password='$password'");
			$row = $res -> fetch_array();
			
			if($row == false){
				$logged_in = false;
			}
			
			$ret = array(
				"email" => $row["email"],
				"password" => $row["password"],
				"username" => $row["username"],
				"userid" => $row["userid"]
			);
		}
	}
	
	return $ret;
	
}

$user = user();

if($logged_in == true && strlen($user["email"]) <= 0){
	$logged_in = false;
}