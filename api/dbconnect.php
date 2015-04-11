<?php
$db = mysqli_connect("local.42.fr", "root", "rush00", "rush00");

if (mysqli_connect_errno())
{
	$response["error"] = 1;
	$response["msg"] = "Could not connect to db";
	echo json_encode($response);
	exit();
}

?>
