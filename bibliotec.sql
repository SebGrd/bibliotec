-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2019 at 12:21 AM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliotec`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibliotheque`
--

DROP TABLE IF EXISTS `bibliotheque`;
CREATE TABLE IF NOT EXISTS `bibliotheque` (
  `id_biblio` int(11) NOT NULL AUTO_INCREMENT,
  `nom_biblio` text CHARACTER SET latin1 NOT NULL,
  `adresse_biblio` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `num_biblio` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `ville_biblio` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `lattitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`id_biblio`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id_biblio`, `nom_biblio`, `adresse_biblio`, `num_biblio`, `ville_biblio`, `lattitude`, `longitude`) VALUES
(1, 'Bibliothèque Universitaire Jules Verne (BUJV)', '6 rue du marché', NULL, 'Paris', 48.8605, 2.35244),
(2, '\0B\0i\0b\0l\0i\0o\0t\0h\0è\0q\0u\0e\0 \0M\0u\0n\0i\0c\0i\0p\0a\0l\0e', '84 avenue de la mairie', NULL, 'Paris', 48.8474, 2.35639),
(3, '\0C\0e\0n\0t\0r\0e\0 \0C\0u\0l\0t\0u\0r\0e\0l\0 \0C\0h\0a\0r\0l\0e\0s\0 \0d\0e\0 \0G\0a\0u\0l\0e', '24 boulevard du chemin de la rue', NULL, 'Melun', 48.5376, 2.65202);

-- --------------------------------------------------------

--
-- Table structure for table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_fk` int(11) NOT NULL,
  `id_livre_fk` int(11) NOT NULL,
  `dateDebut` varchar(20) DEFAULT NULL,
  `dateRetour` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_emp`),
  KEY `id_user_fk` (`id_user_fk`),
  KEY `id_livre_fk` (`id_livre_fk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `dateNaissance` varchar(20) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  `type_compte` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom`, `prenom`, `adresse`, `dateNaissance`, `ville`, `mail`, `password`, `type_compte`) VALUES
(1, 'TEST', 'Test', '2 rue test', '01/01/2000', 'Paris', 'test@gmail.com', '$2y$10$OZAeV826Js2rqTx26Ma4i.QrYqCfy4omtA3VPB5cYMVCFj1thwyDS', 4),
(5, 'rezrezr', 'olfzez', 'azeazezae', 'Oct 04, 2019', 'azeazeaze', 'rezrezr@test.zeeze', '$2y$10$xwqZZuAImo4y0wZc6yuyGefGdmvb6TssSd7R4DPJf1C06NorFazZ6', 1),
(8, 'libraire', 'User ', 'zzeze', 'Oct 08, 2019', 'ezezeze', 'libraire@bibli.com', '$2y$10$fWV7oYCXqPDVumf87PTKveKKnJD5FzXrxXZr9DvSWfto9ricgK.hS', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
