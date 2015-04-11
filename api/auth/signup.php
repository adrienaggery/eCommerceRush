<?php

header('Content-type: application/json');
$response = array();

if (!empty($_POST["username"]) && !empty($_POST["password"]))
{
	include("../dbconnect.php");

	// Hashing
	$username = $_POST["username"];
	$hashed_password = hash("whirlpool", $_POST["password"]);

	// Insert new user
	$query = mysqli_stmt_init($db);
	mysqli_stmt_prepare($query, 'INSERT INTO users(username, password) VALUES(?, ?)');
	mysqli_stmt_bind_param($query, 'ss', $username, $hashed_password);
	mysqli_stmt_execute($query);

	// Check for Errors
	if (mysqli_stmt_errno($query) === 1062)
	{
		$response["error"] = 1;
		$response["msg"] = "User already exists";
	}
	else if (mysqli_stmt_errno($query))
	{
		$response["error"] = 1;
		$response["msg"] = "User not created, unknown error: " . mysqli_stmt_errno();

	}
	else {
		$response["error"] = 0;
		$response["msg"] = "User succesfully created";
	}

	// Close connection
	mysqli_stmt_close($query);
	mysqli_close($db);
}
else {
	$response["error"] = 1;
	$response["msg"] = "Empty username or password";
}

echo json_encode($response);

?>
