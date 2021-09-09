-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 sep. 2021 à 23:27
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espacemembres`
--

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

CREATE TABLE `cotisation` (
  `id_c` int(11) NOT NULL,
  `date` date NOT NULL,
  `mois` varchar(50) NOT NULL,
  `motif` varchar(50) NOT NULL,
  `montant` varchar(50) NOT NULL,
  `id_m` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cotisation`
--

INSERT INTO `cotisation` (`id_c`, `date`, `mois`, `motif`, `montant`, `id_m`) VALUES
(7, '2021-08-01', 'janvier', 'mensualite', '10000', 26),
(8, '2021-08-01', 'janvier', 'mensualite', '10000', 26),
(22, '2021-08-06', 'mai', 'mensualite', '5000', 20),
(24, '2021-08-08', 'janvier', 'mensualite', '5000f', 25),
(26, '0000-00-00', 'Choisir le mois', 'votre motif', '5000', 24),
(27, '2021-08-03', 'Février', 'mensualite', '5000f', 21),
(30, '2021-08-02', 'mai', 'mensualite', '', 21);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_m` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `matricule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_m`, `nom`, `prenom`, `adresse`, `telephone`, `matricule`) VALUES
(20, 'ndao', 'ameth', 'ds', '788541232', '2708'),
(21, 'Ba', 'Souleymane', 'ds', '777015420', '8885'),
(22, 'Kamara', 'Souleymane', 'ds', '777012054', '8885'),
(23, 'Kamara', 'Souleymane', 'ds', '777012032', '1020'),
(24, 'kane', 'demba', 'ds', '777085412', '3021'),
(25, 'wade', 'moussa', 'mf', '786958774', '4032'),
(26, 'fall', 'abdoulaye', 'thiaroy', '778451201', '8542'),
(27, 'ba', 'modou', 'ds', '778451201', '8745'),
(28, 'fall', 'moussa', 'ht', '779845136', '1020'),
(29, 'ndiaye', 'pape', 'ds', '778455569', '1102'),
(32, 'ngom', 'moussa', 'kl', '777895420', '2012'),
(33, 'wade', 'adama', 'jk', '768524123', '2021'),
(34, 'wade', 'adama', 'jk', '768524123', '2021'),
(35, 'Ba', 'Bassiron', 'ds', '773785410', '2013'),
(36, 'Dieng', 'Ablaye', 'ds', '785412012', '2020'),
(37, 'fall', 'nogay', 'cité ousmane fall', '785469666', '20145');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD PRIMARY KEY (`id_c`),
  ADD KEY `id_m` (`id_m`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_m`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cotisation`
--
ALTER TABLE `cotisation`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD CONSTRAINT `cotisation_ibfk_1` FOREIGN KEY (`id_m`) REFERENCES `membre` (`id_m`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
