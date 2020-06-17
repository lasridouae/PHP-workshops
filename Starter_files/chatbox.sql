-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 17 Juin 2020 à 21:23
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chatbox`
--

-- --------------------------------------------------------

--
-- Structure de la table `shouts`
--

CREATE TABLE IF NOT EXISTS `shouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users` varchar(20) DEFAULT NULL,
  `messages` text,
  `times` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `shouts`
--

INSERT INTO `shouts` (`id`, `users`, `messages`, `times`) VALUES
(4, 'douae', 'cc', '19:51:12'),
(5, 'zahid', 'i only speak korean language', '20:04:16'),
(6, 'selouma', 'nti kayna nti', '20:11:22'),
(7, 'mina', 'salam lbnat', '01:50:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
