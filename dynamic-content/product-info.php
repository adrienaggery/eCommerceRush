<?php
	if (!empty($_GET["product_id"])){
		include("db/connect.php");

		$query = mysqli_stmt_init($db);
		mysqli_stmt_prepare($query, 'SELECT * FROM products WHERE id=?');
		mysqli_stmt_bind_param($query, 'i', $_GET["product_id"]);
		mysqli_stmt_bind_result($query, $product_info['id'], $product_info['name'], $product_info['desc'], $product_info['price'], $product_info['categories'], $product_info['image'], $product_info['stock'], $product_info['featured'], $product_info['modif']);
        mysqli_stmt_execute($query);
        mysqli_stmt_fetch($query);
        mysqli_stmt_close($query);
        mysqli_close($db);
	}
?>
