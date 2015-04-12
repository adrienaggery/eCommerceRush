<?php
session_start();

include("db/connect.php");

$totalprice = 0;
$totalitems = 0;

foreach($_SESSION["cart"] as $item_id => $item_count){
	$query = mysqli_stmt_init($db);
	mysqli_stmt_prepare($query, 'SELECT product_price FROM products WHERE id=?');
	mysqli_stmt_bind_param($query, 'i', $item_id);
	mysqli_stmt_bind_result($query, $item_price);
	mysqli_stmt_execute($query);
	mysqli_stmt_fetch($query);

	$totalprice += ($item_price * $item_count);
    $totalitems += $item_count;
}
echo '<p class="cart-desc"> ' . $totalitems . ' items<br/><span>$' . $totalprice. '</span></p>';
?>
