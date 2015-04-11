<?php

	include("../dbconnect.php");
	echo $db;

if (isset($_POST["username"]) && isset($_POST["password"]))
{
	$username = $_POST["username"];
	$hashed_password = hash("whirlpool", $_POST["password"]);


}
?>
