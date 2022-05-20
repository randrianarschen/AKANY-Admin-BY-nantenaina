-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 19 mai 2022 à 18:02
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `akany`
--

-- --------------------------------------------------------

--
-- Structure de la table `ad_event`
--

CREATE TABLE `ad_event` (
  `id` int(250) NOT NULL,
  `title_event` text NOT NULL,
  `datetime_event` datetime NOT NULL,
  `description_event` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ad_event`
--

INSERT INTO `ad_event` (`id`, `title_event`, `datetime_event`, `description_event`, `image`) VALUES
(146, '       ffdsfdsf', '2022-05-19 18:17:55', 'mafy be io8855887', '246240.png');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `object` varchar(255) NOT NULL,
  `contain_1` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `contain_2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `object`, `contain_1`, `image`, `contain_2`) VALUES
(8, ' foizeoiruezrez', ' zerezrezoriezr', '40410.png', ' zerezrezrzr'),
(2, 'hrieheui', 'iorhgeo', '1445857-30913983-2560-1440.jpg', 'igheorhgoe'),
(7, 'JBKBBVGVGHVG', 'FUYGUYGUYGUGU', '180253.jpg', 'GIUGIUIUGIGI'),
(5, 'IHOGITGIU', 'GYGUYGU', '180252.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `commentator_name` varchar(255) NOT NULL,
  `commentator_email` varchar(255) NOT NULL,
  `fb_account` varchar(255) NOT NULL,
  `comments` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte_admin`
--

CREATE TABLE `compte_admin` (
  `id` int(11) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `image_admin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte_admin`
--

INSERT INTO `compte_admin` (`id`, `username_admin`, `password_admin`, `image_admin`) VALUES
(8, 'Ata admin', '9cf95dacd226dcf43da376cdb6cbba7035218921', '');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb_page` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone_num`, `email`, `fb_page`) VALUES
(1, 'ankatso', '+261 32 04 564 85', 'a@gmail.com', 'ferzer'),
(6, '', '', 'toavina.razafindrakoto@gmail.com', ''),
(7, 'korkgor', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `demande_dons`
--

CREATE TABLE `demande_dons` (
  `id` int(11) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `montant` decimal(65,0) NOT NULL,
  `motif` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `cree_a` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demande_dons`
--

INSERT INTO `demande_dons` (`id`, `sujet`, `montant`, `motif`, `image`, `cree_a`) VALUES
(42, 'fiantrana', '566655', 'fiantrana', '484279.png', '2022-05-19 05:03:14'),
(41, 'tretretret', '5456456', 'retretret', '9732.png', '2022-05-15 14:54:36'),
(30, 'reezrezrz', '6546546', 'uihoioih', '2999.png', '2022-05-14 17:07:34'),
(31, 'dzeez', '24544', 'fzerezrzerzerzerze', '419962.png', '2022-05-15 04:25:04'),
(32, 'dzeez', '24544', 'fzerezrzerzerzerze', '442072.png', '2022-05-15 04:25:54'),
(33, 'dzeez', '24544', 'fzerezrzerzerzerze', '538067.png', '2022-05-15 04:29:30'),
(34, 'dzeez', '24544', 'fzerezrzerzerzerze', '249146.png', '2022-05-15 04:30:43'),
(35, 'dzeez', '24544', 'fzerezrzerzerzerze', '493891.png', '2022-05-15 04:30:56'),
(36, 'dzeez', '24544', 'fzerezrzerzerzerze', '122254.png', '2022-05-15 04:36:37'),
(37, 'dfgrzerze', '6545', 'zerezrzer', '25068.png', '2022-05-15 04:54:14'),
(38, 'dfdsfzerezrez', '5465456', 'zerezrezrez', '99674.png', '2022-05-15 05:34:42'),
(39, 'erzerzerzerezr', '6655', 'zerezhrze', '585255.png', '2022-05-15 09:37:16'),
(40, 'zerezrzerezr', '6356', 'zerzerzerz', '496178.png', '2022-05-15 11:53:32');

-- --------------------------------------------------------

--
-- Structure de la table `mailbox`
--

CREATE TABLE `mailbox` (
  `id` int(11) NOT NULL,
  `name_sender` varchar(255) NOT NULL,
  `email_sender` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mailbox`
--

INSERT INTO `mailbox` (`id`, `name_sender`, `email_sender`, `subject`, `message`, `time`) VALUES
(8, 'Nambinintsoa', 'nambs@gmail.com', 'ddfdfd', 'fdfdffffffffffffffffffffffffffffffffffffffffffffffffffff', '2021-03-31 06:11:45');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

CREATE TABLE `responsable` (
  `id` int(11) NOT NULL,
  `name_resp` varchar(255) NOT NULL,
  `firstname_resp` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`id`, `name_resp`, `firstname_resp`, `function`, `image`) VALUES
(23, ' zerezrezrez', ' zerzerzerzerz', '  zerezrzerzerezrze', '347089793.png'),
(24, ' zerezrezrez', ' zerzerzerzerz', '  zerezrzerzerezrze', '308296793.png'),
(25, ' zerzerzerrze', 'zerzerzerze', '  zerezezrezrzer', '816169.jpg'),
(26, ' zerzerzerrze', 'zerzerzerze', '  ', '528752.jpg'),
(27, ' fddsfds', ' fdsfdfsf', '  fdsfdsdffds', '457632.png'),
(28, ' fezrezrezrze', ' rzerezrezrezrze', '  zerzerezrezrezr', '953978.png');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE `temoignage` (
  `id` int(11) NOT NULL,
  `name_witness` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `link_video` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id`, `name_witness`, `title`, `function`, `link_video`, `image`, `date_publication`) VALUES
(6, ' fjoiezjirojezrioezrinf', 'ezrezrezrzer', ' zerezezrez', ' zerezzerez', '301274.png', '2022-05-15 08:17:45'),
(7, ' zerezrzerze', 'zerezrezrze', ' zerezrzer', ' zerezrzerzerezr', '470245.png', '2022-05-15 10:18:45');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ad_event`
--
ALTER TABLE `ad_event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte_admin`
--
ALTER TABLE `compte_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande_dons`
--
ALTER TABLE `demande_dons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mailbox`
--
ALTER TABLE `mailbox`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ad_event`
--
ALTER TABLE `ad_event`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte_admin`
--
ALTER TABLE `compte_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `demande_dons`
--
ALTER TABLE `demande_dons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `mailbox`
--
ALTER TABLE `mailbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
