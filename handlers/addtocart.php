<?php
session_start();

$_SESSION['cart'][$_GET['product_id']] = $_SESSION['cart'][$_GET['product_id']] + 1;
?>