-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 26 juin 2023 à 19:17
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tpbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `matricule` varchar(6) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  `datenaiss` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` int(20) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `idpromo` varchar(20) NOT NULL,
  `annee` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`matricule`, `nom`, `prenom`, `age`, `datenaiss`, `email`, `telephone`, `photo`, `idpromo`, `annee`) VALUES
('P1M909', 'Koureissi', 'Mohamed', 20, '2023-06-26', 'koureissi89@gmail.co', 94494320, 'img', 'P1', 2023),
('P1RT61', 'Bane', 'MG', 22, '2023-06-08', 'yiguftf', 64557557, 'Hh', '03', 2022),
('P1ZH31', 'Koureissi', 'BOSS', 12, '2023-06-02', 'tgegg', 7977633, 'fr', '01', 2022),
('P2M988', 'Diane', 'Ami', 12, '2023-06-03', 'fd@gmail.com', 79776334, 'pl', 'P2', 2022);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `idpromo` varchar(15) NOT NULL,
  `nom` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`idpromo`, `nom`) VALUES
('P1', 'P1'),
('P2', 'P2'),
('P3', 'P3'),
('P4', 'P4');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `promotion` (`idpromo`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`idpromo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
