<?php

session_start();
include("db/connect.php");

foreach($_SESSION['cart'] as $key => $value)
{
    $query = mysqli_stmt_init($db);
    mysqli_stmt_prepare($query, 'SELECT id, product_name, product_price, product_image FROM products WHERE id=?');
    mysqli_stmt_bind_param($query, 'i', $key);
    mysqli_stmt_bind_result($query, $product_id, $product_name, $product_price, $product_image);
    mysqli_stmt_execute($query);
    while (mysqli_stmt_fetch($query)){
        echo '<div class="product-card"><div class="image" style="background: url(\'public/' . 'images/products/' . $product_image . '\') center no-repeat; background-size: cover;"></div><div class="description"><p class="categories">Chemise, Homme</p><p class="name">' . $product_name . '</p><p class="price">$' . $product_price . '</p><div class="cart-act-wrapper"><a class="cart-act" href="handlers/addtocart.php?product_id=' . $product_id .'">+ 1</a>|<a class="cart-act" href="handlers/subfromcart.php?product_id=' . $product_id .'">- 1</a>|<a class="cart-act" href="handlers/deltfromcart.php?product_id=' . $product_id .'">Remove</a></div></div></div>';
    }
}

mysqli_stmt_close($query);
mysqli_close($db);
?>