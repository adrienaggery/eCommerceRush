<?php
session_start();

unset($_SESSION['cart'][$_GET['product_id']]);
echo "<script type='text/javascript'>document.location.replace('../cart.php');</script>";
?>