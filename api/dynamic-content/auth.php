<?php

session_start();

if (!empty($_SESSION["user_id"]) && !empty($_SESSION["username"]))
	echo '<p>Logged in as ' . strtoupper($_SESSION["username"]);
else
	echo '<a class="auth-button login-button" href="#">LOGIN</a><p>OR</p><a class="auth-button register-button" href="#">REGISTER</a>';

?>