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
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` text,
  `titre` text NOT NULL,
  `resume` text NOT NULL,
  `date_publi` date DEFAULT NULL,
  `nbr_page` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `id_editeur` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `img_url` text NOT NULL,
  `id_bibli` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`id`, `isbn`, `titre`, `resume`, `date_publi`, `nbr_page`, `id_auteur`, `id_editeur`, `id_categorie`, `id_lang`, `img_url`, `id_bibli`) VALUES
(1, '9782075027663', 'Vendredi ou La vie sauvage', 'Septembre 1759. Robinson est à bord de La Virginie faisant route pour le Chili. Une tempête formidable précipite le navire sur des récifs, et Robinson va se retrouver seul survivant du naufrage sur une île déserte. Livré à lui-même, sa solitude va le contraindre à faire preuve d\'ingéniosité, de persévérance et de courage, afin de survivre dans ce monde sauvage. Jusqu\'au jour où, se croyant abandonné de tous, il rencontre un être humain pour le moins inattendu...', '2012-11-02', 190, 1, 1, 1, 1, 'https://images-na.ssl-images-amazon.com/images/I/51HGuX531EL._SX347_BO1,204,203,200_.jpg', 1),
(2, '2092506927', 'Croc-Blanc', 'L\'émouvante histoire d\'un chien-loup entre le monde des hommes et celui de la nature, où servitude et liberté engendrent à la fois douceur et cruauté.', '2005-06-02', 205, 2, 2, 1, 1, 'https://images-na.ssl-images-amazon.com/images/I/418LHC2cBuL._SX331_BO1,204,203,200_.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `livre_auteur`
--

DROP TABLE IF EXISTS `livre_auteur`;
CREATE TABLE IF NOT EXISTS `livre_auteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur_nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livre_auteur`
--

INSERT INTO `livre_auteur` (`id`, `auteur_nom`) VALUES
(1, 'Michel Tournier'),
(2, 'Jack London');

-- --------------------------------------------------------

--
-- Table structure for table `livre_categories`
--

DROP TABLE IF EXISTS `livre_categories`;
CREATE TABLE IF NOT EXISTS `livre_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livre_categories`
--

INSERT INTO `livre_categories` (`id`, `categorie_nom`) VALUES
(1, 'Roman'),
(2, 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `livre_editeur`
--

DROP TABLE IF EXISTS `livre_editeur`;
CREATE TABLE IF NOT EXISTS `livre_editeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `editeur_nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livre_editeur`
--

INSERT INTO `livre_editeur` (`id`, `editeur_nom`) VALUES
(1, 'Gallimard Jeunesse'),
(2, 'Nathan');

-- --------------------------------------------------------

--
-- Table structure for table `livre_lang`
--

DROP TABLE IF EXISTS `livre_lang`;
CREATE TABLE IF NOT EXISTS `livre_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_code` tinytext NOT NULL,
  `lang_nom` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livre_lang`
--

INSERT INTO `livre_lang` (`id`, `lang_code`, `lang_nom`) VALUES
(1, 'fr', 'France');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
