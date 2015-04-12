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
					<?php include( "dynamic-content/auth.php"); ?>
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
						<li><a href="index.php">ACCUEIL</a>
						</li>
						<li><a href="#">HOMME</a>
						</li>
						<li><a href="#">FEMME</a>
						</li>
						<li><a href="#">CATEGORIES</a>
							<ul>
								<li><a href="#">VESTES</a>
								</li>
								<li><a href="#">PULLS</a>
								</li>
								<li><a href="#">CHEMISES</a>
								</li>
								<li><a href="#">...</a>
								</li>
							</ul>
						</li>
						<li><a href="#">CONTACTEZ NOUS</a>
						</li>
					</ul>
				</nav>
				<div class="cart">
					<img class="cart-icon" height="24" width="22" src="public/images/cart-icon.png" />
					<?php include( "dynamic-content/cart.php"); ?>
				</div>
			</div>
		</div>
	</header>
	<section class="auth-section">
		<div class="fluid-wrapper">
			<div class="auth-bloc login">
				<p class="title">Already have an account ? Just log in !</p>
				<form method="post" action="handlers/signin.php">
					<p class="field-name">Username: </p><input class="username-field" type="text" name="username"><br/>
					<p class="field-name">Password: </p><input class="password-field" type="password" name="password"><br/>
					<input class="submit-auth" type="submit">
				</form>
			</div><!-- WP
			--><div class="auth-bloc register">
				<p class="title">Don't have an account ? Create one now !</p>
				<form method="post" action="handlers/signup.php">
					<p class="field-name">Username: </p><input class="username-field" type="text" name="username"><br/>
					<p class="field-name">Password: </p><input class="password-field" type="password" name="password"><br/>
					<input class="submit-auth" type="submit">
				</form>
			</div>
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