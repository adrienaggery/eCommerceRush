<?php
include("db/connect.php");

$query = mysqli_stmt_init($db);
$totalprice = 0;

mysqli_stmt_prepare($query, 'SELECT product_name, product_price, product_stock, product_featured FROM products');
mysqli_stmt_bind_result($query, $product_info['name'], $product_info['price'], $product_info['stock'], $product_info['featured']);
mysqli_stmt_execute($query);
while (mysqli_stmt_fetch($query)) {
    echo '<p class="product-list"><span class="list-name">' . $product_info["name"] . '</span><span class="list-price">' . $product_info["price"] . '</span><span class="list-stock">' . $product_info["stock"] . '</span><a class="list-featured" href="handles/feature_bo.php">' . $product_info["featured"] . '</a><a class="list-delete" href="handles/delete_bo.php"></a></p>';
}
mysqli_stmt_close($query);
mysqli_close($db);
?>