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
	<header class="header">
		<div class="fluid-wrapper">
			<div class="auth">
				<?php include("api/dynamic-content/auth.php"); ?>
			</div>
		</div>
	</header>
	<header class="subheader">
		<div class="fluid-wrapper">
			<img class="site-logo" height="35" src="http://placehold.it/130x35" />
			<div class="search">
				<form>
					<input class="searchbar" placeholder="Search product">
					<input class="submit-button" type="submit">
				</form>
			</div>
		</div>
	</header>
	<header class="subsubheader">
		<div class="fluid-wrapper">
			<nav>
				<ul>
					<li class="simple"><a href="#">Accueil</a></li>
					<li class="simple"><a href="#">Homme</a></li>
					<li class="simple"><a href="#">Femme</a></li>
					<li class="simple list"><a href="#">Catégories</a>
						<ul class="deroulant">
							<li><a href="#">Vestes</a></li>
							<li><a href="#">Pulls</a></li>
							<li><a href="#">Chemises</a></li>
							<li><a href="#">...</a></li>
						</ul>
					</li>
					<li class="simple"><a href="#">Contactez nous</a></li>
				</ul>
                <div class="cart">
				<img class="cart-icon" height="32" width="32" src="http://placehold.it/32x32" />
				<?php include("api/dynamic-content/cart.php"); ?>
			</div>
			</nav>
		</div>
	</header>
	<section class="shops">
		<div class="fluid-wrapper">
			<a class="shop-big shop-homme">SHOP HOMME</a>
			<a class="shop-big shop-femme">SHOP FEMME</a>
		</div>
	</section>
	<section class="featured-title">
		<div class="fluid-wrapper">
			<p>Featured</p>
			<div class="line"></div>
		</div>
	</section>
	<section class="featured-products">
		<div class="fluid-wrapper">
			<?php include("api/dynamic-content/featured.php"); ?>
			<!--<div class="product-card">
				<div class="image"></div>
				<div class="description">
					<p class="name">Chemise laine</p>
					<p class="price">$25.00</p>
				</div>
				<a class="addtocart"></a>
			</div>-->
		</div>
	</section>
	<footer>
		<div class="fluid-wrapper">
			<p>Copyright 2015 &copy Jason & Adrien</p>
			<a class="backoffice-link">Backoffice</a>
		</div>
	</footer>
</body>
</html>