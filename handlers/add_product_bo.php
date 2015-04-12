<?php
include("../db/connect.php");
    
$query = mysqli_stmt_init($db);
$totalprice = 0;

mysqli_stmt_prepare($query, 'INSERT INTO products (product_name, product_desc, product_price, product_categories, product_image, product_stock, featured) VALUES(?, ?, ?, ?, ?, ?, ?)');
mysqli_stmt_bind_param($query, 'ssissii', $_POST['name'], $_POST['desc'], $_POST['price'], $_POST['categories'], $_POST['image'], $_POST['stock'], $_POST['featured']);
mysqli_stmt_execute($query);
mysqli_stmt_fetch($query);
mysqli_stmt_close($query);
mysqli_close($db);
echo "<script type='text/javascript'>document.location.replace('../backoffice.php');</script>";
?>