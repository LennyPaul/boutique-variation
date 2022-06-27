-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 juin 2022 à 00:20
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`) VALUES
(1, 'Original'),
(2, 'Colors'),
(3, 'Scratch');

-- --------------------------------------------------------

--
-- Structure de la table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `code`
--

INSERT INTO `code` (`id`, `code`) VALUES
(1, 'r390gnf6b0'),
(2, '1kl2i18x19'),
(3, 'sa1gf071n4'),
(4, 'w5x32759c1'),
(5, 'r1o8tm98mg'),
(6, 'pl64c1hld7'),
(7, 'nvs3nl8k62');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `prix_total` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `donnees` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `prix_total`, `user_id`, `donnees`, `date`) VALUES
(54, 55, 5, 'a:2:{i:67;a:7:{s:10:\"produit-id\";s:2:\"67\";s:13:\"produit-titre\";s:11:\"Bonnet Noir\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"20\";s:12:\"produit-prix\";s:2:\"20\";s:11:\"produit-img\";s:43:\"cuffed-beanie-black-front-62b60e10b286e.jpg\";s:12:\"produit-size\";s:1:\"L\";}i:1;a:7:{s:10:\"produit-id\";s:1:\"1\";s:13:\"produit-titre\";s:11:\"Hoodie Noir\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"35\";s:12:\"produit-prix\";s:2:\"35\";s:11:\"produit-img\";s:55:\"unisex-heavy-blend-hoodie-black-front-62b60cb6097ea.jpg\";s:12:\"produit-size\";s:2:\"XS\";}}', '2022-06-27 13:59:28'),
(55, 140, 5, 'a:1:{i:67;a:7:{s:10:\"produit-id\";s:2:\"67\";s:13:\"produit-titre\";s:11:\"Bonnet Noir\";s:11:\"produit-nbr\";s:1:\"7\";s:13:\"produit-total\";s:3:\"140\";s:12:\"produit-prix\";s:2:\"20\";s:11:\"produit-img\";s:43:\"cuffed-beanie-black-front-62b60e10b286e.jpg\";s:12:\"produit-size\";s:1:\"S\";}}', '2022-06-27 14:18:57'),
(56, 175, 5, 'a:1:{i:2;a:7:{s:10:\"produit-id\";s:1:\"2\";s:13:\"produit-titre\";s:12:\"Hoodie Blanc\";s:11:\"produit-nbr\";s:1:\"5\";s:13:\"produit-total\";s:3:\"175\";s:12:\"produit-prix\";s:2:\"35\";s:11:\"produit-img\";s:57:\"unisex-heavy-blend-hoodie-white-front-2-62b611ce49dd1.jpg\";s:12:\"produit-size\";s:1:\"L\";}}', '2022-06-27 15:02:03'),
(57, 20, 1, 'a:1:{i:68;a:7:{s:10:\"produit-id\";s:2:\"68\";s:13:\"produit-titre\";s:8:\"Bob Noir\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"20\";s:12:\"produit-prix\";s:2:\"20\";s:11:\"produit-img\";s:64:\"bucket-hat-i-big-accessories-bx003-black-front-62b61149142bf.jpg\";s:12:\"produit-size\";s:1:\"M\";}}', '2022-06-27 15:02:49'),
(58, 270, 1, 'a:2:{i:73;a:7:{s:10:\"produit-id\";s:2:\"73\";s:13:\"produit-titre\";s:11:\"Jogger Pink\";s:11:\"produit-nbr\";s:1:\"4\";s:13:\"produit-total\";s:3:\"200\";s:12:\"produit-prix\";s:2:\"50\";s:11:\"produit-img\";s:67:\"unisex-pigment-dyed-sweatpants-pigment-pink-front-62b7160ee2981.jpg\";s:12:\"produit-size\";s:2:\"XL\";}i:79;a:7:{s:10:\"produit-id\";s:2:\"79\";s:13:\"produit-titre\";s:33:\"Veste Yellow Variation X Champion\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"70\";s:12:\"produit-prix\";s:2:\"70\";s:11:\"produit-img\";s:65:\"embroidered-champion-packable-jacket-gold-front-62b710e49cf28.jpg\";s:12:\"produit-size\";s:2:\"XS\";}}', '2022-06-27 15:34:47'),
(59, 35, 1, 'a:1:{i:2;a:7:{s:10:\"produit-id\";s:1:\"2\";s:13:\"produit-titre\";s:12:\"Hoodie Blanc\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"35\";s:12:\"produit-prix\";s:2:\"35\";s:11:\"produit-img\";s:57:\"unisex-heavy-blend-hoodie-white-front-2-62b611ce49dd1.jpg\";s:12:\"produit-size\";s:1:\"M\";}}', '2022-06-27 15:43:38'),
(60, 20, 1, 'a:1:{i:68;a:7:{s:10:\"produit-id\";s:2:\"68\";s:13:\"produit-titre\";s:8:\"Bob Noir\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"20\";s:12:\"produit-prix\";s:2:\"20\";s:11:\"produit-img\";s:64:\"bucket-hat-i-big-accessories-bx003-black-front-62b61149142bf.jpg\";s:12:\"produit-size\";s:1:\"S\";}}', '2022-06-27 17:25:12'),
(61, 65, 5, 'a:2:{i:91;a:7:{s:10:\"produit-id\";s:2:\"91\";s:13:\"produit-titre\";s:20:\"Hoodie Scratch Blanc\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"50\";s:12:\"produit-prix\";s:2:\"50\";s:11:\"produit-img\";s:9:\"eazea.jpg\";s:12:\"produit-size\";s:1:\"S\";}i:94;a:7:{s:10:\"produit-id\";s:2:\"94\";s:13:\"produit-titre\";s:21:\"Pack 3 Scratch Random\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"15\";s:12:\"produit-prix\";s:2:\"15\";s:11:\"produit-img\";s:13:\"eazeazeaz.jpg\";s:12:\"produit-size\";s:1:\"S\";}}', '2022-06-27 23:07:18'),
(62, 65, 5, 'a:2:{i:91;a:7:{s:10:\"produit-id\";s:2:\"91\";s:13:\"produit-titre\";s:20:\"Hoodie Scratch Blanc\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"50\";s:12:\"produit-prix\";s:2:\"50\";s:11:\"produit-img\";s:9:\"eazea.jpg\";s:12:\"produit-size\";s:1:\"M\";}i:94;a:7:{s:10:\"produit-id\";s:2:\"94\";s:13:\"produit-titre\";s:21:\"Pack 3 Scratch Random\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"15\";s:12:\"produit-prix\";s:2:\"15\";s:11:\"produit-img\";s:13:\"eazeazeaz.jpg\";s:12:\"produit-size\";s:1:\"M\";}}', '2022-06-27 23:54:47'),
(63, 65, 5, 'a:2:{i:91;a:7:{s:10:\"produit-id\";s:2:\"91\";s:13:\"produit-titre\";s:20:\"Hoodie Scratch Blanc\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"50\";s:12:\"produit-prix\";s:2:\"50\";s:11:\"produit-img\";s:9:\"eazea.jpg\";s:12:\"produit-size\";s:1:\"M\";}i:94;a:7:{s:10:\"produit-id\";s:2:\"94\";s:13:\"produit-titre\";s:21:\"Pack 3 Scratch Random\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"15\";s:12:\"produit-prix\";s:2:\"15\";s:11:\"produit-img\";s:13:\"eazeazeaz.jpg\";s:12:\"produit-size\";s:1:\"M\";}}', '2022-06-28 00:02:29'),
(64, 30, 5, 'a:1:{i:64;a:7:{s:10:\"produit-id\";s:2:\"64\";s:13:\"produit-titre\";s:11:\"T-shirt Pro\";s:11:\"produit-nbr\";s:1:\"1\";s:13:\"produit-total\";s:2:\"30\";s:12:\"produit-prix\";s:2:\"30\";s:11:\"produit-img\";s:60:\"unisex-basic-softstyle-t-shirt-white-front-62b60d9e3ddee.jpg\";s:12:\"produit-size\";s:1:\"S\";}}', '2022-06-28 00:07:43');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'lenpaul7@gmail.com'),
(4, 'lenny.paul@outlook.com');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `titre`, `prix`, `description`, `category_id`, `img1`, `img2`, `img3`) VALUES
(1, 'Hoodie Noir', 35, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'unisex-heavy-blend-hoodie-black-front-62b60cb6097ea.jpg', 'unisex-heavy-blend-hoodie-black-zoomed-in-62b60cb609981.jpg', 'unisex-heavy-blend-hoodie-black-front-62b60cb609517.jpg'),
(2, 'Hoodie Blanc', 35, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'unisex-heavy-blend-hoodie-white-front-2-62b611ce49dd1.jpg', 'unisex-heavy-blend-hoodie-white-zoomed-in-62b611ce4a19d.jpg', 'unisex-heavy-blend-hoodie-white-product-details-62b611ce4a927.jpg'),
(61, 'T-shirt Noir', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'mens-classic-t-shirt-black-front-62b60c57c5312.jpg', 'mens-classic-t-shirt-black-zoomed-in-62b60c57c5182.jpg', 'mens-classic-t-shirt-black-front-62b60d08a6884.jpg'),
(62, 'T-shirt Blanc', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'mens-classic-t-shirt-white-front-62b60e474d4b0.jpg', 'mens-classic-t-shirt-white-zoomed-in-62b60e474a75a.jpg', 'mens-classic-t-shirt-white-front-62b6108972f37.jpg'),
(63, 'Hoodie Pro', 40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'unisex-premium-hoodie-white-front-62b60d5acf14f.jpg', 'unisex-premium-hoodie-white-left-62b60d5acf361.jpg', 'unisex-premium-hoodie-white-front-62b60d5acef4a.jpg'),
(64, 'T-shirt Pro', 30, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'unisex-basic-softstyle-t-shirt-white-front-62b60d9e3ddee.jpg', 'unisex-basic-softstyle-t-shirt-white-right-front-62b60d9e3e52e.jpg', 'unisex-basic-softstyle-t-shirt-white-zoomed-in-62b60d9e3fba1.jpg'),
(65, 'Casquette Noir', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'classic-dad-hat-black-front-62b6124e8b098.jpg', 'classic-dad-hat-black-left-front-62b6124e8af0f.jpg', 'classic-dad-hat-black-front-62b6124e8b2a4.jpg'),
(66, 'Casquette Blanche', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'classic-dad-hat-white-front-62b612c1a3f6c.jpg', 'classic-dad-hat-white-left-front-62b612c1a3e6c.jpg', 'classic-dad-hat-white-front-62b612c1a4084.jpg'),
(67, 'Bonnet Noir', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'cuffed-beanie-black-front-62b60e10b286e.jpg', 'cuffed-beanie-black-front-62b60e10b2912.jpg', 'cuffed-beanie-black-front-62b60e10b1d30.jpg'),
(68, 'Bob Noir', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'bucket-hat-i-big-accessories-bx003-black-front-62b61149142bf.jpg', 'bucket-hat-i-big-accessories-bx003-black-front-62b6114914130.jpg', 'bucket-hat-i-big-accessories-bx003-black-product-details-62b6114914332.jpg'),
(69, 'Jogger Noir', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'unisex-pigment-dyed-sweatpants-pigment-black-front-62b72800dd2ec.jpg', 'unisex-pigment-dyed-sweatpants-pigment-black-front-62b72800dd388.jpg', 'unisex-pigment-dyed-sweatpants-pigment-black-front-62b72800dd250.jpg'),
(70, 'Veste Noir Champion ', 70, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '1', 'embroidered-champion-packable-jacket-black-front-62b72a7f536ef.jpg', 'embroidered-champion-packable-jacket-black-zoomed-in-62b72a7f535d4.jpg', 'embroidered-champion-packable-jacket-black-product-details-62b72a7f53519.jpg'),
(71, 'Hoodie Pink', 40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'unisex-heavy-blend-hoodie-light-pink-front-62b712fe0a843.jpg', 'unisex-heavy-blend-hoodie-light-pink-zoomed-in-62b712fe0a65a.jpg', 'unisex-heavy-blend-hoodie-light-pink-product-details-62b712fe0a969.jpg'),
(72, 'T-shirt Pink', 30, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'mens-classic-t-shirt-light-pink-front-62b72c4eadd82.jpg', 'mens-classic-t-shirt-light-pink-zoomed-in-62b72c4eade7b.jpg', 'mens-classic-t-shirt-light-pink-front-62b72c4eadf16.jpg'),
(73, 'Jogger Pink', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'unisex-pigment-dyed-sweatpants-pigment-pink-front-62b7160ee2981.jpg', 'unisex-pigment-dyed-sweatpants-pigment-pink-front-62b7160ee2b2e.jpg', 'unisex-pigment-dyed-sweatpants-pigment-pink-product-details-62b7160ee2892.jpg'),
(74, 'Casquette Pink', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'classic-dad-hat-pink-front-62b711c603961.jpg', 'classic-dad-hat-pink-left-front-62b711c603b14.jpg', 'classic-dad-hat-pink-front-62b711c603c5e.jpg'),
(75, 'Hoodie Sky', 40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'unisex-heavy-blend-hoodie-light-blue-front-62b71205f3860.jpg', 'unisex-heavy-blend-hoodie-light-blue-zoomed-in-62b71205f3a0c.jpg', 'unisex-heavy-blend-hoodie-light-blue-product-details-62b71205f3bb4.jpg'),
(76, 'T-shirt Sky', 30, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'mens-classic-t-shirt-sky-front-62b71065d2c5d.jpg', 'mens-classic-t-shirt-sky-front-62b71065d2c5d.jpg', 'mens-classic-t-shirt-sky-front-62b71065d2c5d.jpg'),
(77, 'Jogger Sky', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'unisex-pigment-dyed-sweatpants-pigment-light-blue-front-62b715a16e159.jpg', 'unisex-pigment-dyed-sweatpants-pigment-light-blue-front-62b715a16e200.jpg', 'unisex-pigment-dyed-sweatpants-pigment-light-blue-front-62b715a16e0fc.jpg'),
(78, 'Casquette Sky', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'classic-dad-hat-light-blue-front-62b7118321cf3.jpg', 'classic-dad-hat-light-blue-left-front-62b7118321ef0.jpg', 'classic-dad-hat-light-blue-right-front-62b7118321bc6.jpg'),
(79, 'Veste Yellow Champion', 70, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'embroidered-champion-packable-jacket-gold-front-62b710e49cf28.jpg', 'embroidered-champion-packable-jacket-gold-zoomed-in-62b710e49cd4a.jpg', 'embroidered-champion-packable-jacket-gold-front-62b710e49ceae.jpg'),
(80, 'T-shirt Yellow', 30, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'mens-classic-t-shirt-daisy-front-62b7109bb20ce.jpg', 'mens-classic-t-shirt-daisy-zoomed-in-62b7109bb21b8.jpg', 'mens-classic-t-shirt-daisy-zoomed-in-62b7109bb1f2b.jpg'),
(82, 'T-shirt Green', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'mens-classic-t-shirt-irish-green-front-62b7142c46d4e.jpg', 'mens-classic-t-shirt-irish-green-zoomed-in-62b7142c46c15.jpg', 'mens-classic-t-shirt-irish-green-zoomed-in-62b7142c466eb.jpg'),
(83, 'T-shirt Orange', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '2', 'mens-classic-t-shirt-orange-front-62b711449fa9f.jpg', 'mens-classic-t-shirt-orange-zoomed-in-62b711449f932.jpg', 'mens-classic-t-shirt-orange-zoomed-in-62b711449f6f4.jpg'),
(90, 'Hoodie Scratch Noir', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '3', 'unisex-heavy-blend-hoodie-black-front-62b9d438c4dd6.jpg', 'unisex-heavy-blend-hoodie-black-zoomed-in-62b9d438c51bc.jpg', 'logoN.png'),
(91, 'Hoodie Scratch Blanc', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '3', 'eazea.jpg', 'unisex-heavy-blend-hoodie-white-zoomed-in-62b9d3b8f17e8.jpg', 'logoB.png'),
(94, 'Pack 3 Scratch Random', 15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '3', 'eazeazeaz.jpg', 'unisex-heavy-blend-hoodie-white-front-62b9d3b8f1480.jpg', 'pack-color.jpg'),
(95, 'Jogger Scratch', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae porta nec magna bibendum. Arcu tempus et laoreet enim purus enim eget elit urna. Pharetra egestas purus lacus dui nec urna. Amet enim massa elementum dignissim.', '3', 'unisex-pigment-dyed-sweatpants-pigment-black-left-front-2-62b9fdd98fe33.jpg', 'unisex-pigment-dyed-sweatpants-pigment-black-front-62b9fdd98ffdd.jpg', 'unisex-pigment-dyed-sweatpants-pigment-black-zoomed-in-62b9fdd98fa73.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `password` char(40) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `prenom`, `nom`, `tel`, `adresse`, `password`, `email`, `role`) VALUES
(1, 'admin', '', '', 0, '', 'd033e22ae348aeb5660fc2140aec35850c4da997', '0', 'ROLE_ADMIN'),
(3, 'Prob14', 'Lenny', 'Louchet', 781902427, '4 Rue du Bois de Vitry', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'lenny.paul@outlook.fr', 'ROLE_ADMIN'),
(4, 'NAdinou', 'Nadir', 'Thrasibule', 821832121, '8 rue du poireuax Herbevilliers', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'nadir91270@gmail.com', 'ROLE_USER'),
(5, 'lenny', 'MEdhi', 'Paul', 781902427, '4 Rue du Bois de Vitry', '2af4b38e2553b3ad115efe4710cc830eeb3c5143', 'lenny.paul@outlook.fr', 'ROLE_USER'),
(6, 'Test', 'test', 'tets', 781902427, '4 Rue du Bois de Vitry', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'lenny.paul@outlook.fr', 'ROLE_USER');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
