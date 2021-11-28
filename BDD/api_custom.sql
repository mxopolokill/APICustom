-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 28 nov. 2021 à 13:06
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `api_custom`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211124081244', '2021-11-24 08:12:52', 102),
('DoctrineMigrations\\Version20211125132427', '2021-11-25 13:24:37', 119);

-- --------------------------------------------------------

--
-- Structure de la table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `scores`
--

INSERT INTO `scores` (`id`, `pseudo`, `score`) VALUES
(1, 'moi', 78),
(2, 'Joueur2', 88),
(3, 'joueur4', 78),
(4, 'Joueur3', 84),
(5, 'joueur5', 78),
(6, 'Joueur6', 84),
(7, 'TESTpost', 54),
(8, 'TESTpost', 54),
(9, 'TESTpost', 54),
(10, 'TESTposdgdt', 54),
(15, 'lepseudo', 12),
(16, 'zaeazeazeazezae', 111),
(17, 'dssfsfsfsfqssqsfsqf', 820),
(21, 'aaaaaaaaa', 754),
(22, 'tropchaud', 7544),
(23, 'nom', 0),
(24, 'nom', 0),
(25, 'JAIMEPASTONPSEUDO', 0),
(26, 'JAIMEPASTONPSEUDO', 0),
(27, 'JAIMEPASTONPSEUDO', 0),
(28, 'tropfroid', 1),
(29, 'TEST', 123);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
