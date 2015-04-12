<?php

session_start();
include("db/connect");

foreach($_SESSION['cart'] as $key => $value)
{
    $query = mysqli_stmt_init($db);
    mysqli_stmt_prepare($query, 'SELECT product_name FROM products WHERE id=?');
    mysqli_stmt_bind_param($query, 'i', $key);
    mysqli_stmt_bind_result($query, $item_name);
    mysqli_stmt_execute($query);
    mysqli_stmt_fetch($query);
    while (mysqli_stmt_fetch($query)){
        echo $item_name . $value;
    }
}
mysqli_stmt_close($query);
mysqli_close($db);
?>