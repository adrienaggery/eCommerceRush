<?php
session_start();
?>
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
        <div class="fluid-wrapper">
            <div class="auth">
                <a class="auth-button login-button" href="#">LOGIN</a>
                <p>OR</p>
                <a class="auth-button register-button" href="#">REGISTER</a>
            </div>
        </div>
    </header>
    <section class="subheader">
        <div class="fluid-wrapper">
            <img class="logo" src="http://placehold.it/130x35" />
            <input class="searchbar" type="text" name="search" placeholder="Search Product...">
            <img class="search-logo" src="http://placehold.it/40x40" />
        </div>
    </section>
    <section class="menus-bar">
        <div class="fluid-wrapper">
            <div class="home-button">
                <a class="home" href="#">HOME</a>
            </div><!-- WP
            --><div class="home-button">
                <a class="aboutus" href="#">ABOUT US</a>
            </div><!-- WP
            --><div class="home-button">
                <a class="contactus" href="#">CONTACT US</a>
            </div><!--
            --><div class="shop-panel">
                <img class="shopcart-logo" src="http://placehold.it/40x40" />
            </div>
        </div>
    </section>
    <br />
    <section class="bottom">
        <div class="fluid-wrapper">
            <div class="men-collect">
                <a href="#">
                <img src="public/images/mens-collect.jpg" >
                <p>MEN'S COLLECTION</p>
                </a>
            </div>
            <div class="women-accesories">
                <a href="#">
                <img src="public/images/womens-accesories.jpg" >
                <p>WOMEN'S ACCESORIES</p>
                </a>
            </div>
        </div>
    </section>
</body>
</html>