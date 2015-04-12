<?php
	if (!empty($_GET["product_id"])){
		include("../dbconnect.php");
		
		$query = mysqli_stmt_init($db);
		mysqli_stmt_prepare($query, 'SELECT * FROM products WHERE id=?');
		mysqli_stmt_bind_param($query, 'i', $_GET["product_id"]);
		mysqli_stmt_bind_result($query, $product_info);
	}
?>
