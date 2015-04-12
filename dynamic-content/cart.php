<?php
session_start();

include("../dbconnect.php");

$totalprice = 0;
foreach($_SESSION["cart"] as $item_id => $item_count){
	$query = mysqli_stmt_init($db);
	mysqli_stmt_prepare($query, 'SELECT product_price FROM products WHERE id=?');
	mysqli_stmt_bind_param($query, 'i', $item_id);
	mysqli_stmt_bind_result($query, $item_price);
	mysqli_stmt_execute($query);
	mysqli_stmt_fetch($query);

	$totalprice =+ ($item_price * $item_count);
}

echo '<p> ' . count($_SESSION["cart"]) . ' items<br/>$' . $totalprice. '</p>';
?>
