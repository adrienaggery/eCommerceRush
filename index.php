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
				<a class="auth-button login-button" href="#">LOGIN</a>
				<p>OR</p>
				<a class="auth-button register-button" href="#">REGISTER</a>
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
					<li><a href="#">Accueil</a></li>
					<li><a href="#">Homme</a></li>
					<li><a href="#">Femme</a></li>
					<li><a href="#">Catégories</a>
						<ul>
							<li><a href="#">Vestes</a></li>
							<li><a href="#">Pulls</a></li>
							<li><a href="#">Chemises</a></li>
							<li><a href="#">...</a></li>
						</ul>
					</li>
					<li><a href="#">Contactez nous</a></li>
				</ul>
			</nav>
			<div class="cart">
				<img class="cart-icon" height="32" width="32" src="http://placehold.it/32x32" />
				<p>x items<br/>$10.00</p>
			</div>
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
			<div class="product-card">
				<div class="image"></div>
				<div class="description">
					<p class="name">Chemise laine</p>
					<p class="price">$25.00</p>
				</div>
				<a class="addtocart"></a>
			</div>
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