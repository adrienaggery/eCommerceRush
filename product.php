<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>ft_minishop</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="public/styles/reset.css">
    <link rel="stylesheet" href="public/styles/main.css">
</head>
<body>
	<header>
		<div class="topbar">
			<div class="fluid-wrapper">
				<div class="auth">
					<?php include("dynamic-content/auth.php"); ?>
				</div>
			</div>
		</div>
		<div class="midbar">
			<div class="fluid-wrapper">
				<img class="site-logo" height="35" src="public/images/logo.png" />
				<form class="search">
					<input class="searchbar" type="text" name="search" placeholder="Search product">
					<input class="search-button" type="submit" value="Submit">
				</form>
			</div>
		</div>
		<div class="botbar">
			<div class="fluid-wrapper">
				<?php include("parts/menu.php"); ?>
				<a href="cart.php" class="cart">
					<img class="cart-icon" height="24" width="22" src="public/images/cart-icon.png" />
					<?php include("dynamic-content/cart.php"); ?>
				</a>
			</div>
		</div>
	</header>
	<section class="product">
		<div class="fluid-wrapper">
			<?php include("dynamic-content/product-info.php"); ?>
			<img class="product-image" width="48%" src="<?php echo $product_info["image"]; ?>"/><!-- WP
			--><div class="product-desc">
				<p class="p_name"><?php echo $product_info["name"]; ?></p>
				<p class="p_price">$<?php echo $product_info["price"]; ?></p>
				<div class="line"></div>
				<p class="p_desc"><?php echo $product_info["desc"] ?></p>
				<a class="addtocart-button" href="handlers/addtocart.php?product_id=<?php echo $product_info["id"] ?>">ADD TO CART</a>
			</div>
		</div>
	</section>
	<?php include("parts/footer.php"); ?>
</body>
</html>