<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>ft_minishop - Cart</title>
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
				<div class="cart">
					<img class="cart-icon" height="24" width="22" src="public/images/cart-icon.png" />
					<?php include("dynamic-content/cart.php"); ?>
				</div>
			</div>
		</div>
	</header>
	<section class="featured-title">
		<div class="fluid-wrapper">
			<p>SHOPPING-CART</p>
			<div class="line"></div>
		</div>
	</section>
	<section class="cart-section">
		<div class="fluid-wrapper">
			<?php include("dynamic-content/cart-items.php"); ?>
			<?php session_start(); if(!empty($_SESSION["user_id"]) && !empty($_SESSION["username"]) && !empty($_SESSION["cart"])) { echo '<br/><a class="validate-cart-button" href="handlers/validatecart.php">COMMANDER</a>'; } ?>
		</div>
	</section>
	<?php include("parts/footer.php"); ?>
</body>
</html>