<?php

header('Content-type: application/json');
$response = array();

if (!empty($_GET["product_id"]))
{
	$pid = $_GET["product_id"];

	unset($_SESSION["cart"][$pid]);
	$response["error"] = 0;
	$response["Succesfully removed from cart"];
}
else {
	$response["error"] = 1;
	$response["Empty product_id"];
}

echo json_encode($response);

?>
