-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 11 juin 2021 à 07:41
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `akany`
--

-- --------------------------------------------------------

--
-- Structure de la table `ad_event`
--

DROP TABLE IF EXISTS `ad_event`;
CREATE TABLE IF NOT EXISTS `ad_event` (
  `id_event` int(250) NOT NULL AUTO_INCREMENT,
  `titre_event` text NOT NULL,
  `date_event` date NOT NULL,
  `time_event` time NOT NULL,
  `description_event` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ad_event`
--

INSERT INTO `ad_event` (`id_event`, `titre_event`, `date_event`, `time_event`, `description_event`, `image`) VALUES
(31, 'Fambolen-kazo', '2021-06-16', '11:10:00', 'http://localhost/Akany/Admin/pages/edit_event.php?id_event', '180243.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_coms` int(11) NOT NULL AUTO_INCREMENT,
  `nom_commentateur` varchar(255) NOT NULL,
  `email_commentateur` varchar(255) NOT NULL,
  `compte_facebook` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id_coms`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte_admin`
--

DROP TABLE IF EXISTS `compte_admin`;
CREATE TABLE IF NOT EXISTS `compte_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `image_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte_admin`
--

INSERT INTO `compte_admin` (`id_admin`, `username_admin`, `password_admin`, `image_admin`) VALUES
(1, 'ata admin', '9cf95dacd226dcf43da376cdb6cbba7035218921', '180243.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `number_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `page_facebook` varchar(255) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `address`, `number_phone`, `email`, `page_facebook`) VALUES
(1, 'Akany Tafta/Sahasoa, Lot III T 267 AB ', '+261 32 04 564 06', 'ravoniarisoa@freenet.mg', 'AKANY TAFITA SAHASOA'),
(6, '', '', 'toavina.razafindrakoto@gmail.com', ''),
(7, 'korkgor', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `demande_dons`
--

DROP TABLE IF EXISTS `demande_dons`;
CREATE TABLE IF NOT EXISTS `demande_dons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `but` varchar(255) NOT NULL,
  `fond` decimal(65,0) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demande_dons`
--

INSERT INTO `demande_dons` (`id`, `but`, `fond`, `description`, `images`) VALUES
(5, 'dgger', '42424', 'sdqdqsdsq', 'Screenshot_2021-02-22 Document.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `mailbox`
--

DROP TABLE IF EXISTS `mailbox`;
CREATE TABLE IF NOT EXISTS `mailbox` (
  `id_mail` int(11) NOT NULL AUTO_INCREMENT,
  `name_sender` varchar(255) NOT NULL,
  `email_sender` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_mail`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mailbox`
--

INSERT INTO `mailbox` (`id_mail`, `name_sender`, `email_sender`, `subject`, `message`, `time`) VALUES
(8, 'Nambinintsoa', 'nambs@gmail.com', 'ddfdfd', 'fdfdffffffffffffffffffffffffffffffffffffffffffffffffffff', '2021-03-31 06:11:45');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `id_resp` int(11) NOT NULL AUTO_INCREMENT,
  `nom_resp` varchar(255) NOT NULL,
  `prenom_resp` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_resp`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`id_resp`, `nom_resp`, `prenom_resp`, `fonction`, `image`) VALUES
(22, 'FANAMBINANTSO', ' Nahasetraniaina Andrie Aksa', 'Gardien', '180133.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id_temoin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_temoin` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `lien_video` text NOT NULL,
  `date_de_publication` datetime NOT NULL DEFAULT current_timestamp(),
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id_temoin`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id_temoin`, `nom_temoin`, `title`, `function`, `lien_video`, `date_de_publication`, `images`) VALUES
(3, 'Andrie', 'Life', 'chaffeur', 'http://localhost/Akany/Admin/pages/gerer_temoignage.php', '2021-06-09 19:42:56', '180252.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
