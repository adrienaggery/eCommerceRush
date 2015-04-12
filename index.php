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
				<img class="site-logo" height="35" src="http://placehold.it/130x35" />
				<form class="search">
					<input class="searchbar" type="text" name="search" placeholder="Search product">
					<input class="search-button" type="submit" value="Submit">
				</form>
			</div>
		</div>
		<div class="botbar">
			<div class="fluid-wrapper">
				<nav>
					<ul>
						<li><a href="#">ACCUEIL</a></li>
						<li><a href="#">HOMME</a></li>
						<li><a href="#">FEMME</a></li>
						<li><a href="#">CATEGORIES</a>
							<ul>
								<li><a href="#">VESTES</a></li>
								<li><a href="#">PULLS</a></li>
								<li><a href="#">CHEMISES</a></li>
								<li><a href="#">...</a></li>
							</ul>
						</li>
						<li><a href="#">CONTACTEZ NOUS</a></li>
					</ul>
				</nav>
				<div class="cart">
					<img class="cart-icon" height="32" width="32" src="http://placehold.it/32x32" />
					<?php include("dynamic-content/cart.php"); ?>
				</div>
			</div>
		</div>
	</header>
	<section class="shops">
		<div class="fluid-wrapper">
			<div class="shop-big shop-homme"><a href="a">ACHAT HOMME</a></div><!-- WP
			--><div class="shop-big shop-femme"><a href="a">ACHAT FEMME</a></div>
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