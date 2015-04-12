<?php

print_r($_POST);

if (!empty($_POST["username"]) && !empty($_POST["password"]))
{
	include("../db/connect.php");

	$username = $_POST["username"];
	$hashed_password = hash("whirlpool", $_POST["password"]);

	$query = mysqli_stmt_init($db);
	mysqli_stmt_prepare($query, 'SELECT id FROM users WHERE username=? AND password=?');
	mysqli_stmt_bind_param($query, 'ss', $username, $hashed_password);
	mysqli_stmt_bind_result($query, $user_id);
	mysqli_stmt_execute($query);
	mysqli_stmt_fetch($query);

	if (empty($user_id)) {
		echo "<script type='text/javascript'>document.location.replace('../auth.php');</script>";
	}
	else {
		session_start();
		$_SESSION["user_id"] = $user_id;
		$_SESSION["username"] = $username;
		
		echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
	}

	mysqli_stmt_close($query);
	mysqli_close($db);
}
else {
    echo "<script type='text/javascript'>document.location.replace('../auth.php');</script>";
}
?>
