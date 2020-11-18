-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 18 nov. 2020 à 16:38
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `miniprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `Cours`
--

CREATE TABLE `Cours` (
  `id_cours` int(8) NOT NULL,
  `alerte` varchar(50) NOT NULL,
  `description_court` varchar(200) NOT NULL,
  `description_longue` varchar(2000) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Cours`
--

INSERT INTO `Cours` (`id_cours`, `alerte`, `description_court`, `description_longue`, `photo`) VALUES
(1, 'ALERTE', 'CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!', 'CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!', ''),
(2, 'LAST MINUTE', 'CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!', '', ''),
(3, 'LAST MINUTE', 'CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!', '', ''),
(4, 'LAST MINUTE', 'CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!', '', ''),
(5, 'LAST MINUTE', 'CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!', '', ''),
(6, 'LAST MINUTE', 'CAROLNE BOUQUET remplace MAXIME TROUILLER  ce lundi 13 janvier 16h-17h30!', '', ''),
(7, 'Abricot', 'Vive les ananas!', 'J\'aime la pistache', ''),
(8, 'Abricot', 'Zimbabwe', 'Corneil et Bernie', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(8) NOT NULL,
  `role` varchar(50) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Prénom` varchar(30) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `CodePostal` int(5) NOT NULL,
  `Niveau` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `role`, `Nom`, `email`, `Prénom`, `Adresse`, `CodePostal`, `Niveau`, `password`) VALUES
(15, 'admin', 'Ding', 'admin@hotmail.com', 'Laura', '6 Rue Edouard Lievin', 93700, 'Débutant', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(16, 'particulier', 'Ding', 'Laurxding@hotmail.com', 'Laura', '6 Rue Edouard Lievin', 93700, 'Débutant', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Cours`
--
ALTER TABLE `Cours`
  ADD PRIMARY KEY (`id_cours`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Cours`
--
ALTER TABLE `Cours`
  MODIFY `id_cours` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
