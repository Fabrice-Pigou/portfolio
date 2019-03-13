-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 13 Mars 2019 à 02:33
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `goupy`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `calendar`
--

INSERT INTO `calendar` (`id`, `name`, `description`, `start`, `end`) VALUES
(1, 'Vestibulum facilisis mauris a massa commodo fringilla', 'Jour 1:\r\nVestibulum facilisis mauris a massa commodo fringilla. Nullam consequat ultricies urna. Phasellus eu cursus libero. Aenean eleifend lobortis augue, eu vehicula neque dignissim quis. Morbi rutrum mauris et turpis pharetra feugiat.\r\nJour 2 :\r\nMorbi rutrum mauris et turpis pharetra feugiat.\r\nJour 3:\r\nVestibulum facilisis mauris a massa commodo fringilla. Nullam consequat ultricies urna. Phasellus eu cursus libero. Aenean eleifend lobortis augue, eu vehicula neque dignissim quis.', '2019-03-05 03:00:00', '2019-03-05 07:30:00'),
(2, 'Excepteur sint occaecat cupidatat non proident', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-03-13 12:00:00', '2019-03-13 13:00:00'),
(3, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-03-16 09:00:00', '2019-03-16 17:00:00'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisci elit', 'Lorem ipsum dolor sit amet, consectetur adipisci elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. \r\n\r\nCras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. \r\n\r\nDuis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue.', '2019-02-01 09:00:00', '2019-02-01 11:00:00'),
(5, 'Praesent ut lorem nec orci consequat fringilla ac eu lectus', 'Curabitur at ex dolor. Sed ac metus enim. Praesent nec rutrum mi. Integer sagittis nunc dolor, in semper ipsum varius egestas. Aliquam ultricies purus ipsum, ut tempor nunc luctus eu. Integer congue ipsum lacus. Morbi sit amet erat ex. Nunc fermentum dapibus auctor. ', '2019-02-22 02:00:00', '2019-02-22 03:00:00'),
(6, 'RDV docteur', 'ertyjety', '2019-03-05 09:30:00', '2019-03-05 10:00:00'),
(7, 'Vestibulum facilisis mauris a massa commodo fringilla', '', '2019-03-04 09:00:00', '2019-03-04 18:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
