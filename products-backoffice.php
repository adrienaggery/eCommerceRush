<?php
include("dynamic-content/canaccessbo.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>ft_minishop - backoffice</title>
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
				<?php include("parts/backofficemenu.php"); ?>
			</div>
		</div>
	</header>
	<section class="featured-title">
		<div class="fluid-wrapper">
			<p>GESTION DES PRODUITS</p>
			<div class="line"></div>
		</div>
	</section>
	<section class="bo-products">
		<div class="fluid-wrapper">
			<div class="auth-bloc login">
				<p class="title">Available products</p>
			</div><!-- WP
			--><div class="auth-bloc register">
				<p class="title">Add a product</p>
				<form method="post" action="handlers/add_product_bo.php">
					<p class="field-name">Nom: </p><input class="addproduct-field" type="text" name="name"><br/>
					<p class="field-name">Description: </p><input class="addproduct-field" type="text" name="desc"><br/>
					<p class="field-name">Prix: </p><input class="addproduct-field" type="text" name="price"><br/>
					<p class="field-name">Categories: </p><input class="addproduct-field" type="text" name="categories"><br/>
					<p class="field-name">Image (url): </p><input class="addproduct-field" type="text" name="image"><br/>
					<p class="field-name">Stock: </p><input class="addproduct-field" type="text" name="stock"><br/>
					<p class="field-name">Featured? : </p><input class="addproduct-field" type="text" name="featured"><br/>
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