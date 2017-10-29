<?php
include("auth.php");
$userid = $user["userid"];

$img = file_get_contents($_POST["d"]);
file_put_contents("../../dist/avatars/$userid.png",$img);