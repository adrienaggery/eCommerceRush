<?php
session_start();

$_SESSION['cart'][$_GET['product_id']] = $_SESSION['cart'][$_GET['product_id']] + 1;
echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
?>