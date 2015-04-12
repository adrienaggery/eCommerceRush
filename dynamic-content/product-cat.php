<?php
$_GET['cat_id'] = "5";
include("db/connect.php");

$query = mysqli_stmt_init($db);
mysqli_stmt_prepare($query, 'SELECT id, product_name, product_price, product_image, product_categories FROM products');
mysqli_stmt_bind_result($query, $product_id, $product_name, $product_price, $product_image, $product_categories);
mysqli_stmt_execute($query);
$product_categories = explode(",", $product_categories);
while (mysqli_stmt_fetch($query)){
    if (in_array($_GET['cat_id'], $product_categories))
    {
        echo '<div class="product-card"><div class="image" style="background: url(\'public' . '/' . 'images/products/' . $product_image . '\') center no-repeat; background-size: cover;"></div><div class="description"><p class="categories">Chemise, Homme</p><p class="name">' . $product_name . '</p><p class="price">$' . $product_price . '</p><a class="addtocart" href="handlers/addtocart.php?product_id=' . $product_id .'">Ajouter au panier</a></div></div>';
    }
}
mysqli_stmt_close($query);
mysqli_close($db);
?>