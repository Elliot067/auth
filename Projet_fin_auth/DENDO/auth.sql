-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 02 mai 2022 à 11:31
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
-- Base de données : `auth`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  `tel` int(11) NOT NULL,
  `password` text NOT NULL,
  `admin` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `email`, `tel`, `password`, `admin`) VALUES
(1, 'Elliot', 'Guiberteau', 'test@gmail.com', 751976461, '$2y$12$4yk3.XcQ7T.i0h2O4ExR0O2yLz3Ha6CEF/XN9aSbHIbHdv8LK.Myu', 1),
(14, 'Elliot', 'Guiberteau', 'teambubdddble67@gmail.com', 768315933, '$2y$12$JGOhteOtRUPQ2xQScL1sLu02zzQLzHJ8dCOlgP1i96rTA01zihGjS', 1),
(15, 'Elliot', 'Guiberteau', 'teambuddddbble67@gmail.com', 768315933, '$2y$12$zEEDcEgw3kVC29lBHR3KSexA/.kkwvmNRckOLGa9UvmkcblmmApHK', 1),
(16, 'Elliot', 'Guiberteau', 'teddddambubble67@gmail.com', 768315933, '$2y$12$Z4UNDbU9kpEvRyF/5PequuWp09p4V40U/sQ2H8druj7qz6ZS/zctG', 0),
(17, 'Elliot', 'Guiberteau', 'teambubble67@gmail.comdddd', 768315933, '$2y$12$J9Ho7OFPTOObNxZ0a6cHpum1A8LBzJSqO3M3DjM0N/PWEghHCZ1QG', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
