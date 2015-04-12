<?php
session_start();

if (!empty($_SESSION["user_id"]) && !empty($_SESSION["username"]))
{
	include("db/connect.php");

	$query = mysqli_stmt_init($db);
	mysqli_stmt_prepare($query, 'SELECT access_level FROM users WHERE id=?');
	mysqli_stmt_bind_param($query, 'i', $_SESSION["user_id"]);
	mysqli_stmt_bind_result($query, $access_level);
	mysqli_stmt_execute($query);

	mysqli_stmt_fetch($query);

	if ($access_level != 1){
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
	}
	
	mysqli_stmt_close($query);
	mysqli_close($db);
}
else
{
	echo "<script type='text/javascript'>document.location.replace('auth.php');</script>";
}
?>