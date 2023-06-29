-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 juin 2023 à 20:40
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `name`, `category`, `price`, `description`) VALUES
(90, 'Moules Marinières', 'Adulte', '15.99', NULL),
(89, 'Poivrons Farcis', 'Adulte', '11.99', NULL),
(87, 'Chawarma au Poulet', 'Adulte', '12.99', NULL),
(88, 'Chimichanga au Bœuf', 'Adulte', '14.99', NULL),
(86, 'Gyro Grec', 'Adulte', '9.99', NULL),
(84, 'Riz Frit', 'Adulte', '10.99', NULL),
(85, 'Salade Caprese', 'Adulte', '8.99', NULL),
(83, 'Curry de Poulet', 'Adulte', '16.99', NULL),
(82, 'Burrito au Bœuf', 'Adulte', '12.99', NULL),
(80, 'Brochettes de Poulet Satay', 'Adulte', '10.99', NULL),
(81, 'Rouleaux de Printemps Végétariens', 'Adulte', '8.99', NULL),
(79, 'Sandwich au Fromage Grillé', 'Enfant', '5.99', NULL),
(78, 'Macaroni au Fromage', 'Enfant', '6.99', NULL),
(77, 'Sandwich au Porc Effiloché', 'Enfant', '8.99', NULL),
(76, 'Quesadilla au Fromage', 'Enfant', '7.99', NULL),
(75, 'Salade Grecque', 'Adulte', '10.99', NULL),
(74, 'Risotto aux Champignons', 'Adulte', '14.99', NULL),
(73, 'Fettuccine Alfredo au Poulet', 'Adulte', '18.99', NULL),
(72, 'Sautés de Légumes', 'Adulte', '12.99', NULL),
(71, 'Fish and Chips', 'Adulte', '16.99', NULL),
(70, 'Tacos au Bœuf', 'Adulte', '14.99', NULL),
(69, 'Scampis à lAil', 'Adulte', '22.99', NULL),
(68, 'Salade Épinards et Feta', 'Adulte', '9.99', NULL),
(67, 'Soupe de Poulet et Nouilles', 'Adulte', '6.99', NULL),
(66, 'Soupe de Palourde', 'Adulte', '12.00', NULL),
(65, 'Soupe de Tomates', 'Adulte', '6.99', NULL),
(64, 'Bâtonnets de Mozzarella', 'Adolescent', '6.99', NULL),
(63, 'Wrap au Poulet Caesar', 'Adolescent', '8.99', NULL),
(62, 'Burger Végétarien', 'Adulte', '10.00', NULL),
(61, 'Cheeseburger', 'Adolescent', '10.99', NULL),
(60, 'Frites', 'Enfant', '4.99', NULL),
(59, 'Tenders de Poulet', 'Enfant', '7.99', NULL),
(58, 'Pizza au Fromage', 'Enfant', '9.99', NULL),
(57, 'Salade César', 'Adulte', '12.99', NULL),
(56, 'Pâtes Primavera', 'Adulte', '16.99', NULL),
(55, 'Filet de Poulet Grillé', 'Adulte', '18.99', NULL),
(54, 'Saumon au Beurre Citronné', 'Adulte', '22.99', NULL),
(53, 'Steak', 'Adulte', '25.99', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'lol', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
