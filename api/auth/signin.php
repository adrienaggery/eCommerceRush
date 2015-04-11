<?php

header('Content-type: application/json');
$response = array();

if (!empty($_POST["username"]) && !empty($_POST["password"]))
{
	include("../dbconnect.php");

	$username = $_POST["username"];
	$hashed_password = hash("whirlpool", $_POST["password"]);

	$query = mysqli_stmt_init($db);
	mysqli_stmt_prepare($query, 'SELECT id FROM users WHERE username=? AND password=?');
	mysqli_stmt_bind_param($query, 'ss', $username, $hashed_password);
	mysqli_stmt_bind_result($query, $user_id);
	mysqli_stmt_execute($query);
	mysqli_stmt_fetch($query);

	if (empty($user_if)) {
		$response["error"] = 1;
		$response["msg"] = "Invalid credentials";
	}
	else {
		$response["error"] = 0;
		$response["msg"] = "User succesfully logged in";
		$response["user_id"] = $user_id;
	}

	mysqli_stmt_close($query);
	mysqli_close($db);
}
else {
	$response["error"] = 1;
	$response["msg"] = "Empty username or password";
}

echo json_encode($response);

?>
