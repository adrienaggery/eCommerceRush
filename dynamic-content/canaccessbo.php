<?php
session_start();

if (!empty($_SESSION["user_id"]) && !empty($_SESSION["username"]))
{
	
}
else
{
	echo "<script type='text/javascript'>document.location.replace('../auth.php');</script>";
}
?>