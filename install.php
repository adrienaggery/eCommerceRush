<?php

include("db/connect.php");

$sql = "-- phpMyAdmin SQL Dump
-- version 4.3.11.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Dim 12 Avril 2015 à 14:07
-- Version du serveur :  5.5.40
-- Version de PHP :  5.4.39

SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET time_zone = \"+00:00\";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `rush00`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `categorie_name` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie_name`) VALUES
(1, 'Homme'),
(2, 'Femme');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `products` text NOT NULL,
  `total` int(11) NOT NULL,
  `dateorder` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `products`, `total`, `dateorder`) VALUES
(1, 22, 'a:2:{i:11;i:1;i:9;i:1;}', 300, '2015-04-12 12:52:45'),
(3, 22, 'a:2:{i:11;i:1;i:9;i:1;}', 300, '2015-04-12 12:55:35'),
(4, 22, 'a:2:{i:11;i:1;i:9;i:2;}', 460, '2015-04-12 12:56:44'),
(5, 22, 'a:1:{i:10;i:1;}', 200, '2015-04-12 12:56:58'),
(6, 22, 'a:1:{i:10;i:1;}', 200, '0000-00-00 00:00:00'),
(7, 22, 'a:1:{i:10;i:1;}', 200, '0000-00-00 00:00:00'),
(8, 22, 'a:1:{i:10;i:1;}', 200, '0000-00-00 00:00:00'),
(9, 22, 'a:1:{i:10;i:1;}', 200, '0000-00-00 00:00:00'),
(10, 22, 'a:1:{i:11;i:1;}', 140, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `product_desc` text NOT NULL,
  `product_price` float NOT NULL,
  `product_categories` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_stock` int(11) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `last_modif` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_desc`, `product_price`, `product_categories`, `product_image`, `product_stock`, `featured`, `last_modif`) VALUES
(9, 'Veste Otis Ledge', 'Style militaire, détails effet usé, coutures renforcées, fermeture zippée brute et boutons, poches avant à rabat boutonné, étiquette logo brodée sur la manche gauche, effet col montant, coupe classique, importé\r\n\r\n100 % coton', 160, '1, 4', 'http://anf.scene7.com/is/image/anf/anf_85822_01_prod1?$productMagnify-anf$', 10, 0, '0000-00-00 00:00:00'),
(10, 'Veste De Pluie Cargo Légère', 'Tissu imperméable spécial 3 épaisseurs, coutures étanches, capuche à cordon, fermeture zippée et velcro, poches cargo, coupe classique, article importé\r\n\r\n100 % polyester', 200, '1, 4', 'http://anf.scene7.com/is/image/anf/anf_94011_01_prod1?$productMagnify-anf$', 10, 0, '0000-00-00 00:00:00'),
(11, 'Parka En Nylon ABBY', 'Nylon léger et polyvalent, taille cintrée, capuche, fermeture zippée et pressions, poches avant, article importé\r\n\r\n100 % polyester', 140, '2, 4', 'http://anf.scene7.com/is/image/anf/anf_85636_01_prod1?$productMagnify-anf$', 10, 1, '0000-00-00 00:00:00'),
(12, 'Veste En Sergé Deidra', 'Cet anorak en sergé comporte une doublure matelassée en losanges, une capuche bordée de fausse fourrure, un ourlet en queue-de-pie, un cordon de serrage à la taille, une fermeture à boutons et pressions, des poches à rabat sur les côtés et une étiquette logo sur la manche gauche. Importé.\r\n\r\n100 % coton', 200, '2, 4', 'http://anf.scene7.com/is/image/anf/anf_83295_01_prod1?$productMagnify-anf$', 10, 0, '0000-00-00 00:00:00'),
(13, 'Cardigan Boyfriend Samantha', 'Maille supersoft, coupe drapée oversize, boutons effet écaille, Easy Fit, importé', 60, '2, 5', '//anf.scene7.com/is/image/anf/anf_87905_02_prod1?$productMagnify-anf$', 10, 0, '0000-00-00 00:00:00'),
(14, 'Pull Stony Creek', 'Maille en fil supersoft, col en V, bordures côtelées, élan brodé emblématique sur la poitrine côté gauche, Muscle Fit, importé\r\n\r\n95 % coton / 5 % cachemire', 78, '1, 5', '//anf.scene7.com/is/image/anf/anf_87507_01_prod1?$productMagnify-anf$', 10, 0, '0000-00-00 00:00:00'),
(15, 'Chemise A Enfiler A Col Boutonné', 'Chemise légère style col boutonné avec col à pointes boutonnées, poche poitrine côté gauche avec logo brodé, Muscle Fit, importé\r\n\r\n100 % coton', 70, '1, 3', 'http://anf.scene7.com/is/image/anf/anf_91281_01_prod1?$productMagnify-anf$', 10, 0, '0000-00-00 00:00:00'),
(16, 'T-Shirt Abercrombie&Fitch', 'T-Shirt Imprimé', 36, '2, 6', '//anf.scene7.com/is/image/anf/anf_91621_01_prod1?$productMagnify-anf$', 10, 0, '0000-00-00 00:00:00'),
(17, 'T-Shirt Easy Col En V Et Poche', 'Supersoft et léger, encolure en V, poche poitrine côté gauche, délavage Abercrombie vintage, importé\r\n\r\n60 % coton / 40 % modal', 14, '2, 6', 'http://anf.scene7.com/is/image/anf/anf_92657_01_prod1?$productMagnify-anf$', 15, 1, '0000-00-00 00:00:00'),
(18, 'T-Shirt Graphique A&F', 'Supersoft et léger, encolure ras du cou, motif graphique A&F sur la poitrine, délavage Abercrombie vintage, Muscle Fit, importé\r\n\r\n60 % Coton / 40 % Polyester', 36, '1, 6', '//anf.scene7.com/is/image/anf/anf_94079_01_prod1?$productMagnify-anf$', 88, 0, '0000-00-00 00:00:00'),
(19, 'T-Shirt Effet Dévoré Avec Logo Graphique', 'Tissu effet dévoré supersoft et léger avec col ras du cou et logo graphique sur la poitrine, délavage Abercrombie vintage, Muscle Fit, importé\r\n\r\n54 % coton / 46 % polyester', 34, '1, 6', '//anf.scene7.com/is/image/anf/anf_94074_01_prod1?$productMagnify-anf$', 99, 1, '0000-00-00 00:00:00'),
(20, 'jean Boot A&F', 'Vieilli à la main avec délavage et effet étoilé marqués au niveau des cuisses, fermeture boutons, poche gousset côté droit avec étiquette logo A&F, coutures de poche arrière emblématiques, délavage moyen, importé\r\n\r\n100 % coton', 98, '1, 9', 'http://anf.scene7.com/is/image/anf/anf_73610_01_prod1?$productMagnify-anf$', 1, 0, '0000-00-00 00:00:00'),
(21, 'Jean Super Skinny Alyssa', 'Vieilli à la main, délavage et effet étoilé sur les cuisses, poche gousset côté droit, coutures de poche arrière emblématiques, taille haute, délavage clair effet usé, importé\r\n\r\n89 % coton / 8 % polyester / 3 % élasthanne \r\nCoupe courte : couture d''entrejambe 30\", Regular : couture d''entrejambe 31,5\", Long : couture d''entrejambe 33,5\"', 98, '2, 9', 'http://anf.scene7.com/is/image/anf/anf_64855_01_prod1?$productMagnify-anf$', 5, 0, '0000-00-00 00:00:00'),
(22, 'Pantalon Cigarette A Fleurs', 'Pantalon longueur cheville classique à fleurs, coupe de jambe skinny et poches avant, importé', 68, '2, 7', 'http://anf.scene7.com/is/image/anf/anf_89739_01_prod1?$productMagnify-anf$', 5, 0, '0000-00-00 00:00:00'),
(23, 'Pantalon Fille', 'Classique et supersoft, poches avant, fermeture zippée et bouton, coupe skinny, importé\r\n\r\n98 % coton / 2 % élasthanne', 68, '2,7', 'http://anf.scene7.com/is/image/anf/anf_79195_01_prod1?$productMagnify-anf$', 9, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `access_level` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `access_level`) VALUES
(19, 'jan', '42f02aec721f01fb8d889b1ac32979c6e0e9d02cbf517b88167777b57ffa21a939bf26c7c9613b9210e7e2faa5bf4fbf910f4cae15bae3049f2219a21c95d5d4', 0),
(22, 'jason', '42f02aec721f01fb8d889b1ac32979c6e0e9d02cbf517b88167777b57ffa21a939bf26c7c9613b9210e7e2faa5bf4fbf910f4cae15bae3049f2219a21c95d5d4', 1),
(27, 'maxime', '42f02aec721f01fb8d889b1ac32979c6e0e9d02cbf517b88167777b57ffa21a939bf26c7c9613b9210e7e2faa5bf4fbf910f4cae15bae3049f2219a21c95d5d4', 0),
(28, 'coucou', 'd1bfaa72671177d4d17bb440c9decacd2414b4996aa5cd9098ef365c72815d63fb1f15822e324752edd46ce4100ebedb22dab85fb5bcd624bf542f5bd6c005df', 0),
(29, 'shedelin', 'ba6c064dfdb1b7b4938bf82585a8332c89270303b6d75007f0b25feffe33b90bd34d3732acf4be708c85708c39ff6c28b87235663238b8fbfe2c4439258cc883', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
";

$query = mysqli_multi_query($db, $sql);

mysqli_stmt_execute($query);
mysqli_stmt_close($query);

session_start();
unset($_SESSION['cart']);
unset($_SESSION['user_id']);
unset($_SESSION['username']);

echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
?>