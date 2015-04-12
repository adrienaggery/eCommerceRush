<?php

include("db/connect.php");

$query = mysqli_stmt_init($db);
mysqli_stmt_prepare($query, 'SELECT id, product_name, product_price, product_image, product_categories FROM products WHERE featured=1 ORDER BY last_modif LIMIT 0,4');
mysqli_stmt_bind_result($query, $product_id, $product_name, $product_price, $product_image, $product_categories);
mysqli_stmt_execute($query);
while (mysqli_stmt_fetch($query)){
    $product_categories = explode(",", $product_categories);
    if (in_array('1', $product_categories))
        $sexe = " Homme";
    else if (in_array('2', $product_categories))
        $sexe = " Femme";
    if (in_array('3', $product_categories))
          $prod = "Chemise,";
    if (in_array('4', $product_categories))
         $prod = "Veste,";
    if (in_array('5', $product_categories))
        $prod = "Pull,";
    if (in_array('6', $product_categories))
        $prod = "T-Shirt,";
    if (in_array('7', $product_categories))
        $prod = "Pantalon,";
    if (in_array('9', $product_categories))
        $prod = "Jean,";
    echo '<div class="product-card"><div class="image" style="background: url(\'' . $product_image . '\') center no-repeat; background-size: cover;"></div><div class="description"><p class="categories">' . $prod . $sexe . '</p><a class="name" href="product.php?product_id=' . $product_id . '">' . $product_name . '</a><p class="price">$' .   $product_price . '</p><a class="addtocart" href="handlers/addtocart.php?product_id=' . $product_id .'">Ajouter au panier</a></div></div>';
}

mysqli_stmt_close($query);
mysqli_close($db);

?>
