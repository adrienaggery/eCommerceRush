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
	<section class="shops">
		<div class="fluid-wrapper">
			<div class="shop-big shop-homme"><a href="categorie.php?cat_id=1">ACHAT HOMME</a></div><!-- WP
			--><div class="shop-big shop-femme"><a href="categorie.php?cat_id=2">ACHAT FEMME</a></div>
		</div>
	</section>
	<section class="featured-title">
		<div class="fluid-wrapper">
			<p>FEATURED</p>
			<div class="line"></div>
		</div>
	</section>
	<section class="featured-products">
		<div class="fluid-wrapper">
			<?php include("dynamic-content/featured.php"); ?>
			<!--<div class="product-card">
				<div class="image" style="background: url('public/images/products/1.jpeg') center no-repeat; background-size: cover;"></div>
				<div class="description">
					<p class="categories">Chemise, Homme</p>
					<p class="name">Chemise laine</p>
					<p class="price">$25.00</p>
					<a class="addtocart" href="#">Ajouter au panier</a>
				</div>
			</div>-->
		</div>
	</section>
	<footer>
		<div class="fluid-wrapper">
			<p class="copyright">Copyright 2015 &copy Jason & Adrien</p>
			<a class="backoffice-link" href="#">Backoffice</a>
		</div>
	</footer>
</body>
</html>