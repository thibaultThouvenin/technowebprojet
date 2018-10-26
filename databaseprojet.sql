-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 oct. 2018 à 13:28
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `databaseprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double DEFAULT NULL,
  `billing_adress_id` int(10) UNSIGNED DEFAULT NULL,
  `delivery_adress_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_user_billing_adress` (`billing_adress_id`),
  KEY `IDX_user_delivery_adress` (`delivery_adress_id`),
  KEY `IDX_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `type`, `status`, `amount`, `billing_adress_id`, `delivery_adress_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'CART', 'CART', 149.52, 1, 2, '2018-10-26 14:10:28', '2018-10-26 14:10:28');

-- --------------------------------------------------------

--
-- Structure de la table `order_addresses`
--

DROP TABLE IF EXISTS `order_addresses`;
CREATE TABLE IF NOT EXISTS `order_addresses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `human_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `order_addresses`
--

INSERT INTO `order_addresses` (`id`, `human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`, `created_at`, `updated_at`) VALUES
(2, 'Fred Eric', '2 impasse Duvet', '3ieme étage', '59000', 'Lille', 'FRANCE', '2018-10-26 14:10:28', '2018-10-26 14:10:28'),
(3, 'Fred Eric', '120 Boulevard Vaubant', 'B506', '59000', 'Lille', 'FRANCE', '2018-10-26 14:10:28', '2018-10-26 14:10:28'),
(4, 'Fred Eric', '2 impasse Duvet', '3ieme étage', '59000', 'Lille', 'FRANCE', '2018-10-26 14:10:28', '2018-10-26 14:10:28'),
(5, 'Fred Eric', '120 Boulevard Vaubant', 'B506', '59000', 'Lille', 'FRANCE', '2018-10-26 14:10:28', '2018-10-26 14:10:28');

-- --------------------------------------------------------

--
-- Structure de la table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
CREATE TABLE IF NOT EXISTS `order_products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `quantity` int(3) UNSIGNED NOT NULL,
  `unit_price` double DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_order_product` (`order_id`),
  KEY `IDX_product_order` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, 57.08, '2018-10-26 14:10:28', '2018-10-26 14:10:28'),
(3, 1, 2, 3, 46.22, '2018-10-26 14:10:28', '2018-10-26 14:10:28'),
(4, 2, 1, 2, 50, '2018-10-26 14:10:28', '2018-10-26 14:10:28');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `unit_price` double DEFAULT NULL,
  `range_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url_photo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_product_range` (`range_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `unit_price`, `range_id`, `created_at`, `updated_at`, `url_photo`) VALUES
(1, 'Honor 6C', 'Le Honor 6C est le nouveau smartphone entrée de gamme de la marque \"jeune et branchée\" de Huawei. Il est équipé d\'un écran HD de 5 pouces et d\'un processeur Snapdragon 435 à 1,4 Ghz avec 3 Go de RAM et 32 Go de stockage. Son capteur photo est de 13 mégapixels.', 499, 2, '2018-10-26 14:10:27', '2018-10-26 14:10:27', 'https://www.google.fr/url?sa=i&source=images&cd=&ved=2ahUKEwjarsiXmaTeAhVSSxoKHSw4DecQjRx6BAgBEAU&url=https%3A%2F%2Fwww.frandroid.com%2Fproduits%2Fhonor%2Fsmartphones%2F6422-honor-6c&psig=AOvVaw03xm-VWMYtcpwQdTbt5Cid&ust=1540646377796009'),
(2, 'Iphone 6S', 'Neuvième génération d’iPhone, l’iPhone 6S a été présenté par Apple le 12 septembre 2015 à l’occasion de sa traditionnelle keynote de rentrée. Ce nouvel iPhone, qui, d’apparence, ressemble beaucoup à son prédécesseur, bénéficie de multiples améliorations techniques, aussi bien dans les composants de sa plate-forme que dans le châssis sur lequel il s’appuie. Certainement en référence à la polémique du Xperia Z3+ de Sony que certains observateurs estimaient trop proche de son prédécesseur, Apple a justement axé sa communication autour des changements qui ne se voient pas : « Une seule chose a changé. Tout. »\r\n', 599, 3, '2018-10-26 14:10:27', '2018-10-26 14:10:27', 'https://www.google.fr/url?sa=i&source=images&cd=&ved=2ahUKEwjbwJ_XmaTeAhVNyhoKHTyjBm8QjRx6BAgBEAU&url=https%3A%2F%2Fswitch.com.my%2Fiphone-6s-plus%2F&psig=AOvVaw2bkcqNqOr_jhk1hILg_3Ar&ust=1540646517449647');

-- --------------------------------------------------------

--
-- Structure de la table `ranges`
--

DROP TABLE IF EXISTS `ranges`;
CREATE TABLE IF NOT EXISTS `ranges` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_range_parent` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ranges`
--

INSERT INTO `ranges` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(2, 'Main range', NULL, '2018-10-26 14:10:27', '2018-10-26 14:10:27'),
(3, 'Second range', 1, '2018-10-26 14:10:27', '2018-10-26 14:10:27'),
(4, 'Third range', 1, '2018-10-26 14:10:27', '2018-10-26 14:10:27');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_adress_id` int(10) UNSIGNED DEFAULT NULL,
  `delivery_adress_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_user_billing_adress` (`billing_adress_id`),
  KEY `IDX_user_delivery_adress` (`delivery_adress_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `billing_adress_id`, `delivery_adress_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 1, 2, '2018-10-26 14:10:28', '2018-10-26 14:10:28');

-- --------------------------------------------------------

--
-- Structure de la table `user_addresses`
--

DROP TABLE IF EXISTS `user_addresses`;
CREATE TABLE IF NOT EXISTS `user_addresses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `human_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`, `created_at`, `updated_at`) VALUES
(1, 'admin', '41 boulevard Vauban', '3eme étage', '59000', 'Lille', 'FRANCE', '2018-10-26 14:10:27', '2018-10-26 14:10:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
