<?php
session_start();

$_SESSION['user_id'] = NULL;
$_SESSION['username'] = NULL;
echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
?>