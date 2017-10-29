<?php

include("auth.php");

$userid = $user["userid"];
$name = $_POST["name"];

$connection = new mysqli("localhost","root","","amula");
$connection -> query("INSERT INTO models (name, creator) VALUES ('$name', '$userid')");

$rowSQL = $connection -> query("SELECT MAX(ID) AS max FROM `models`;");
$row = $rowSQL -> fetch_array();
$id = $row["max"];

file_put_contents("../models/d/$id.txt",$_POST["desc"]);