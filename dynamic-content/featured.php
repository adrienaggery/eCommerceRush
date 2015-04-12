<?php

include("../dbconnect.php");

$query = mysqli_stmt_init($db);
mysqli_stmt_prepare($query, 'SELECT id, product_name, product_price, product_image FROM products WHERE featured=1 LIMIT 0,4 ORDER BY last_modif');
mysqli_stmt_bind_result($query, $product_id, $product_name, $product_price, $product_image);
mysqli_stmt_execute($query);
while (mysqli_stmt_fetch($query)){
	echo '<div class="product-card"><div class="image" style="background: url("public/images/products/' . $product_image . '")"></div><div class="description"><p class="name">' . $product_name .'</p><p class="price">' . $product_price . '</p></div><a class="addtocart"></a></div>';
}

mysqli_stmt_close($query);
mysqli_close($db);

?>