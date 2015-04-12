<?php
session_start();
if ($_SESSION['user_id'] != NULL)
{
    include("db/connect.php");
    
    $query = mysqli_stmt_init($db);
    $totalprice = 0;
    
    foreach($_SESSION["cart"] as $item_id => $item_count){
        mysqli_stmt_prepare($query, 'SELECT product_price FROM products WHERE id=?');
        mysqli_stmt_bind_param($query, 'i', $item_id);
        mysqli_stmt_bind_result($query, $item_price);
        mysqli_stmt_execute($query);
        mysqli_stmt_fetch($query);
        echo $item_price;
        $totalprice += ($item_price * $item_count);
    }

    mysqli_stmt_prepare($query, 'INSERT INTO orders(user_id, products, total, dateorder) VALUES(?, ?, ?, ?)');
    mysqli_stmt_bind_param($query, 'issi', $_SESSION['user_id'], serialize($_SESSION['cart']));
    mysqli_stmt_execute($query);
    mysqli_stmt_close($query);
	mysqli_close($db);
}
?>