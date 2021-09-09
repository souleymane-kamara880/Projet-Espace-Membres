-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 26 juil. 2021 à 03:23
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dahira_sa`
--

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

CREATE TABLE `cotisation` (
  `id_c` int(11) NOT NULL,
  `montant` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id_m` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cotisation`
--

INSERT INTO `cotisation` (`id_c`, `date`, 'mois' 'motif', `id_m`, `montant`,'matricule') VALUES
(1, '5000', '0000-00-00', 11),
(2, '5000', '2020-10-10', 15),
(3, '5000', '2020-10-10', 36),
(4, '5000', '2020-10-10', 14),
(5, '5000', '2020-10-10', 9),
(6, '5000', '2020-10-10', 8),
(7, '5000', '2020-10-10', 16),
(8, '5000', '2020-10-10', 18),
(9, '5000', '2020-10-10', 13),
(10, '5000', '2020-10-10', 25),
(11, '5000', '0000-00-00', 11),
(12, '5000', '2020-10-10', 12),
(13, '5000', '2020-10-10', 14),
(14, '5000', '0000-00-00', 16),
(15, '5000', '0000-00-00', 19),
(16, '5000', '0000-00-00', 15),
(17, '5000', '2020-10-10', 37),
(18, '5000', '2020-04-17', 15),
(19, '5000', '2020-04-17', 15),
(20, '5000', '2020-04-17', 37),
(21, '5000', '2020-04-17', 17),
(22, '5000', '2020-04-17', 18),
(23, '5000', '2020-04-17', 19),
(24, '5000', '2020-04-17', 20),
(25, '5000', '2020-04-17', 22),
(26, '5000', '2020-04-17', 27),
(27, '5000', '2020-04-17', 23),
(28, '5000', '2020-04-17', 16),
(29, '5000', '2020-04-17', 14),
(30, '5000', '2020-04-17', 12),
(31, '5000', '2020-04-13', 2),
(32, '5000', '2020-04-13', 1);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `membre` (
  `id_m` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `membre` (`id_m`, `nom`, `prenom`, `adresse`, `telephone`) VALUES
(1, 'badji', 'moustapha', 'dakar', '776113017'),
(2, 'sane', 'lamine', 'sica mbao', '771457325'),
(3, 'badji', 'moussa', 'dakar', '771457325'),
(4, 'badji', 'moustapha', 'dakar', '776113019'),
(5, 'sane', 'moussa', 'sica mbao', '771457325'),
(6, 'badji', 'lamine', 'dakar', '771457325'),
(8, 'sane', 'moustapha', 'sica mbao', '776113018'),
(9, 'tamba', 'dembo', 'kaolack', '770811469'),
(10, 'sagna', 'samba', 'louga', '701256958'),
(11, 'diedhiou', 'sekou', 'niahoump', '701253678'),
(12, 'diatta', 'paul', 'besille', '764583560'),
(13, 'tamba', 'dembo', 'bingnona', '761245478'),
(14, 'dieme', 'aliou', 'zigenchor', '784589612'),
(15, 'sagna', 'papis', 'sedhiou', '789456945'),
(16, 'ndiaye', 'cheikh', 'diourbel', '768563391'),
(17, 'dieme', 'alassane', 'finthiock', '78124586'),
(18, 'diedhiou', 'papis', 'kalamacry', '770917735'),
(19, 'djiba', 'seny', 'kolda', '771001245'),
(20, 'sonko', 'fatou', 'zigenchor', '702587412'),
(21, 'badiane', 'ndeye', 'bingnona', '761241523'),
(22, 'basene', 'koumba', 'zigenchor', '771202010'),
(23, 'badji', 'ramatoulaye', 'kobanao', '781477812'),
(24, 'badji', 'diarra', 'niahoump', '701425698'),
(25, 'sane', 'satou', 'sedhiou', '771548253'),
(26, 'sonko', 'satou', 'finthiock', '70655870'),
(27, 'djiba', 'lamine', 'kapoundoung', '775876325'),
(28, 'sagna', 'fatou', 'finthiock', '774851236'),
(29, 'sonko', 'ndeye', 'sedhiou', '789114258'),
(30, 'diatta', 'moussa', 'zigenchor', '779456780'),
(31, 'diedhiou', 'koumba', 'kalamacry', '771547021'),
(32, 'dieme', 'paul', 'besille', '769781245'),
(33, 'tamba', 'ramatoulaye', 'niahoump', '773001425'),
(34, 'basene', 'papis', 'sica mbao', '784612456'),
(35, 'badji', 'nassir dine', 'dakar', '777012230'),
(36, 'sane', 'aliou', 'niahoump', '761245520'),
(37, 'sarr', 'ali', 'niahoump', '332154825');

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
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id_m`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cotisation`
--
ALTER TABLE `cotisation`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD CONSTRAINT `cotisation_ibfk_1` FOREIGN KEY (`id_m`) REFERENCES `inscription` (`id_m`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
