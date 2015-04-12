<?php
session_start();

include("db/connect.php");

$totalprice = 0;
$totalitems = 0;
$query = mysqli_stmt_init($db);

foreach($_SESSION["cart"] as $item_id => $item_count){
	mysqli_stmt_prepare($query, 'SELECT product_price FROM products WHERE id=?');
	mysqli_stmt_bind_param($query, 'i', $item_id);
	mysqli_stmt_bind_result($query, $item_price);
	mysqli_stmt_execute($query);
	mysqli_stmt_fetch($query);

	$totalprice += ($item_price * $item_count);
    $totalitems += $item_count;
}
echo '<p class="cart-desc"> ' . $totalitems . ' items<br/><span>$' . $totalprice. '</span></p>';
mysqli_stmt_close($query);
mysqli_close($db);
?>
