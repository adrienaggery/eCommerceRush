<?php
if (!empty($_POST["username"]) && !empty($_POST["password"]))
{
	include("../db/connect.php");

	// Hashing
	$username = $_POST["username"];
	$hashed_password = hash("whirlpool", $_POST["password"]);

	// Insert new user
	$query = mysqli_stmt_init($db);
	mysqli_stmt_prepare($query, 'INSERT INTO users(username, password) VALUES(?, ?)');
	mysqli_stmt_bind_param($query, 'ss', $username, $hashed_password);
	mysqli_stmt_execute($query);

	// Check for Errors

	if (mysqli_stmt_errno($query) === 1062) // User exists
	{
        echo "<script type='text/javascript'>document.location.replace('../auth.php');</script>";
	}
	else if (mysqli_stmt_errno($query)) // Unknown error
	{
        echo "<script type='text/javascript'>document.location.replace('../auth.php');</script>";
	}
	else // All good!
	{
        echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
	}

	// Close connection
	mysqli_stmt_close($query);
	mysqli_close($db);
}
else {
    echo "<script type='text/javascript'>document.location.replace('../auth.php');</script>";
}
?>
