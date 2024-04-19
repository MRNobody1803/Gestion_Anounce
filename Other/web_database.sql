-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 18 avr. 2024 à 20:47
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `web_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `ID_administrateur` int(20) NOT NULL,
  `ID_utilisateur` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`ID_administrateur`, `ID_utilisateur`) VALUES
(2000, 1000),
(2000, 1000);

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `ID_annonce` int(20) NOT NULL,
  `ID_utilisateur` int(20) NOT NULL,
  `Type_utilisateur` varchar(40) NOT NULL,
  `Type_annonce` varchar(40) NOT NULL,
  `Contenu` text NOT NULL,
  `ID_filière` int(20) NOT NULL,
  `ID_niveau` int(20) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `ID_local` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `chef_filière`
--

CREATE TABLE `chef_filière` (
  `ID_administrateur` int(20) NOT NULL,
  `ID_utilisateur` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `ID_enseignant` int(20) NOT NULL,
  `ID_utilisateur` int(20) NOT NULL,
  `ID_filière` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filière`
--

CREATE TABLE `filière` (
  `ID_filière` int(20) NOT NULL,
  `Nom_filière` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `local`
--

CREATE TABLE `local` (
  `ID_local` int(20) NOT NULL,
  `Nom_local` varchar(30) NOT NULL,
  `Type_local` varchar(30) NOT NULL,
  `Capacité` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `ID_niveau` int(20) NOT NULL,
  `Libellé_niveau` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `secrétaire_département`
--

CREATE TABLE `secrétaire_département` (
  `ID_secretaire` int(20) NOT NULL,
  `ID_utilisateur` int(20) NOT NULL,
  `ID_filière` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_utilisateur` int(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prénom` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mot_de_passe` varchar(20) NOT NULL,
  `type_utilisateur` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_utilisateur`, `Nom`, `Prénom`, `Email`, `Mot_de_passe`, `type_utilisateur`) VALUES
(0, 'MOHAMED', 'MOUMID', 'moumidmohamed18@gmail.com', 'M0000', 'chef de filière'),
(1, 'Abdess_Elh', 'Elh', 'Abdess_Elh@gmail.com', 'A0001', 'Enseignant'),
(2, '~Zineb', '~Zineb', 'Zineb@gmail.com', 'Z0002', 'Administrateur'),
(4, 'Ali', 'moumid', 'ali@gmail.com', 'a0004', 'administrateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`ID_annonce`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`ID_enseignant`);

--
-- Index pour la table `filière`
--
ALTER TABLE `filière`
  ADD PRIMARY KEY (`ID_filière`);

--
-- Index pour la table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`ID_local`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`ID_niveau`);

--
-- Index pour la table `secrétaire_département`
--
ALTER TABLE `secrétaire_département`
  ADD PRIMARY KEY (`ID_secretaire`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
