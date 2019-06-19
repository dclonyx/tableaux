-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 13 juin 2019 à 08:57
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tableaux_d_elodie`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` bigint(20) NOT NULL,
  `nom_categorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'Les Solos'),
(2, 'Les Diptyques'),
(3, 'Les Triptyques'),
(4, 'Les Quadriptyques'),
(5, 'Les Quintiptyques');

-- --------------------------------------------------------

--
-- Structure de la table `dimension`
--

CREATE TABLE `dimension` (
  `id_dimension` bigint(20) NOT NULL,
  `dimension` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dimension`
--

INSERT INTO `dimension` (`id_dimension`, `dimension`) VALUES
(1, '20x20'),
(2, '30x30'),
(3, '40x50'),
(4, '50x50'),
(5, '60x80'),
(6, '80x80'),
(7, '60x20'),
(8, '60x60'),
(9, '40x40'),
(10, ''),
(11, '100x100'),
(12, NULL),
(13, NULL),
(14, '120x120');

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

CREATE TABLE `prix` (
  `id_prix` bigint(20) NOT NULL,
  `prix` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prix`
--

INSERT INTO `prix` (`id_prix`, `prix`) VALUES
(1, 10),
(2, 15),
(3, 20),
(4, 25),
(5, 30),
(6, 35),
(7, 50),
(8, 100),
(9, 70),
(10, 60),
(11, 40),
(12, 80),
(13, NULL),
(14, NULL),
(15, 75);

-- --------------------------------------------------------

--
-- Structure de la table `tableau`
--

CREATE TABLE `tableau` (
  `id_tableau` bigint(20) NOT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `lien_image` varchar(255) NOT NULL,
  `id_dimension` bigint(20) DEFAULT NULL,
  `id_categorie` bigint(20) DEFAULT NULL,
  `id_prix` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tableau`
--

INSERT INTO `tableau` (`id_tableau`, `reference`, `lien_image`, `id_dimension`, `id_categorie`, `id_prix`) VALUES
(1, 'tab-1', '../../img/Les Solos/tab-1.jpg', 1, 1, 3),
(2, 'tab-1-2', '../../img/Les Solos/tab-1-2.jpg', 3, 1, 1),
(3, 'tab-1-3', '../../img/Les Solos/tab-1-3.jpg', 2, 1, 2),
(5, 'tab-2', '../../img/Les Diptyques/tab-2.jpg', 2, 2, 2),
(6, 'tab-2-1', '../../img/Les Diptyques/tab-2-1.jpg', 2, 2, 3),
(7, 'tab-2-2', '../../img/Les Diptyques/tab-2-2.jpg', 2, 2, 4),
(8, 'tab-3', '../../img/Les Triptyques/tab-3.jpg', 4, 3, 4),
(9, 'tab-3-2', '../../img/Les Triptyques/tab-3-2.jpg', 3, 3, 3),
(10, 'tab-4', '../../img/Les Quadriptyques/tab-4.jpg', 4, 4, 6),
(12, 'tab-5', '../../img/Les Quintiptyques/tab-5.jpg', 5, 5, 5),
(13, 'tab-5-2', '../../img/Les Quintiptyques/tab-5-2.jpg', 6, 5, 6),
(22, 'tab-1-4', '../../img/Les Solos/tab-1-4.jpg', 9, 1, 3),
(24, 'tab-1-5', '../../img/Les Solos/tab-1-5.jpg', 7, 1, 7),
(27, 'tab-4-2', '../../img/Les Quadriptyques/tab-4-2.jpg', 6, 4, 7),
(28, 'tab-4-3', '../../img/Les Quadriptyques/tab-4-3.jpg', 11, 4, 7),
(29, 'tab-4-4', '../../img/Les Quadriptyques/tab-4-4.jpg', 11, 4, 10),
(30, 'tab-5-3', '../../img/Les Quintiptyques/tab-5-3.jpg', 14, 5, 15);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `dimension`
--
ALTER TABLE `dimension`
  ADD PRIMARY KEY (`id_dimension`);

--
-- Index pour la table `prix`
--
ALTER TABLE `prix`
  ADD PRIMARY KEY (`id_prix`);

--
-- Index pour la table `tableau`
--
ALTER TABLE `tableau`
  ADD PRIMARY KEY (`id_tableau`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `id_prix` (`id_prix`),
  ADD KEY `id_taille` (`id_dimension`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dimension`
--
ALTER TABLE `dimension`
  MODIFY `id_dimension` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `prix`
--
ALTER TABLE `prix`
  MODIFY `id_prix` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `tableau`
--
ALTER TABLE `tableau`
  MODIFY `id_tableau` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tableau`
--
ALTER TABLE `tableau`
  ADD CONSTRAINT `tableau_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `tableau_ibfk_2` FOREIGN KEY (`id_dimension`) REFERENCES `dimension` (`id_dimension`),
  ADD CONSTRAINT `tableau_ibfk_3` FOREIGN KEY (`id_prix`) REFERENCES `prix` (`id_prix`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
