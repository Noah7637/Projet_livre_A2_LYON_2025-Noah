-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 11 déc. 2025 à 10:07
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eval_livre`
--

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `title`, `author`, `slug`, `description`, `date`) VALUES
(9, 'rgreerre', 'rehehrhr', 'https://www.amazon.fr/Legend-Zelda-souvenirs-denfance/dp/2322422878', '           rherherr  h (\'  h\'h h h h\'(h( h(hggt  (h(\'ytrh', '2025-12-04'),
(10, 'tfyjyjjtjy', 'tdtjtjtj', 'https://www.amazon.fr/Legend-Zelda-souvenirs-denfance/dp/2322422878', '-yutyjuytjtyjytjygjtyjtyjtyjtyjtyjtyjtyjtyjtyjtyjtyjtyjtyjtyj', '2025-12-04'),
(12, 'uyuugugugui', 'Mathieu Meriot', 'https://www.amazon.fr/Legend-Zelda-souvenirs-denfance/dp/2322422878', 'rgeeijeorthoijfijobtijirigriugrujrgkgkgrjurg grjhgujçrgujer rg_hrgu_gr gruhgruhyfg', '2025-10-04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
