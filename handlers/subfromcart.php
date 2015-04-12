<?php
session_start();

$_SESSION['cart'][$_GET['product_id']] -= 1;
if ($_SESSION['cart'][$_GET['product_id']] <= 0)
	unset($_SESSION['cart'][$_GET['product_id']]);
echo "<script type='text/javascript'>document.location.replace('../cart.php');</script>";
?>