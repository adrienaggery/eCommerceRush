<?php

session_start();

if (!empty($_SESSION["user_id"]) && !empty($_SESSION["username"]))
	echo '<p>Logged in as ' . strtoupper($_SESSION["username"]) . '<a class="auth-button register-button" href="handlers/signout.php">DISCONNECT</a>';
else
	echo '<a class="auth-button login-button" href="auth.php">LOGIN</a><p>OR</p><a class="auth-button register-button" href="auth.php">REGISTER</a>';

?>