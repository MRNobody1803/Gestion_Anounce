-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 10, 2024 at 06:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_anounce`
--

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`ID_administrateur`, `ID_utilisateur`) VALUES
(10, 1);

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`ID_annonce`, `ID_utilisateur`, `Type_annonce`, `Titre_annonce`, `Description`, `Contenu`, `ID_filière`, `ID_niveau`, `Status`, `chemin`, `Date_publication`) VALUES
(77, 4, 'rattrapage', 'Séance de Rattrapage pour le Cours de Programmation', 'Une séance de rattrapage pour le cours de programmation sera organisée le [date] de [heure de début]', 'La séance de rattrapage couvrira les chapitres [liste des chapitres]  Les étudiants sont encouragés à apporter leurs questions et leurs exercices à résoudre.', 31, 0, 'validé', 'C:/uploads/DS1 EquaDiff 21-22 + Correction.pdf', '2024-04-29 21:14:21'),
(81, 1, 'changement', 'Mathematique pour l&#039;ingenieur', '**********************************', 'Nous tenonmaine prochaine. Veuillez prendre note des modifications', 31, 0, 'validé', 'C:/uploads/Resume_abdessamad_el_hachami.pdf', '2024-05-20 12:24:09'),
(82, 15, 'cours', 'Examen à venir', 'L&#039;examen portera sur les chapitres 5 à 8 du manuel. Assurez-vous de bien réviser ces chapitres ', 'Nous vous encourageons  bien vous préparer et à aborder cet examen avec confiance. Si vous avez des questions ou des préoccupations concernant l&#039;examen, n&#039;hésitez pas à contacter votre professeur ou l&#039;administration.\n\nBonne chance à tous !', 31, 10, 'validé', 'C:/uploads/Map Ana TD 4.pdf', '2024-05-02 01:00:25'),
(104, 35, 'cours', 'Changement', '++++++++++++++', 'Nous souhaitons vous informer d&#039;un changement d&#039;horaire qui entrera en vigueur à partir du [date de début du changement d&#039;horaire]. Cette décision a été prise dans le but d&#039;améliorer notre service et de mieux répondre à vos besoins.\n\nNouvel Horaire :\n\nLundi à Vendredi : [Heure d&#039;ouverture] - [Heure de fermeture]\nSamedi : [Heure d&#039;ouverture] - [Heure de fermeture]\nDimanche : [Heure d&#039;ouverture] - [Heure de fermeture]', 31, 0, 'En Attente', NULL, '2024-05-10 17:18:59'),
(105, 15, 'cours', 'Changement', '++++++++++++++', 'Nothing to say !', 30, 0, 'En Attente', NULL, '2024-05-10 17:20:05'),
(108, 35, 'cours', 'test', '+++++++++++++++', '.........................................................................................................................', 30, 0, 'En Attente', NULL, '2024-05-10 17:24:48'),
(109, 6, 'cours', 'Ds reporté', 'Pas de ds semaine prochaine', 'On vous informe  de la reportation des ds jusqu&#039;a la semain des exams !', 30, 0, 'En Attente', NULL, '2024-05-10 17:29:19');

--
-- Dumping data for table `chef_filière`
--

INSERT INTO `chef_filière` (`ID_chef_filière`, `ID_utilisateur`, `ID_filière`) VALUES
(21, 1, 31),
(20, 37, 30);

--
-- Dumping data for table `enseignant`
--

INSERT INTO `enseignant` (`ID_enseignant`, `ID_utilisateur`, `ID_filière`) VALUES
(41, 6, 30),
(30, 7, 32),
(40, 15, 31),
(43, 35, 30);

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`ID_etudiant`, `ID_utilisateur`, `ID_filière`, `ID_niveau`, `Cne_etudiant`) VALUES
(1, 35, 30, 54, 'P1518239224'),
(2, 36, 31, 52, 'P1455579858'),
(4, 39, 36, 52, 'P124578'),
(6, 43, 32, 51, 'E40295564'),
(7, 44, 33, 52, 'M1400128');

--
-- Dumping data for table `filière`
--

INSERT INTO `filière` (`ID_filière`, `Nom_filière`) VALUES
(30, 'Génie informatique'),
(31, 'Génie industriel'),
(32, 'Génie electrique'),
(33, 'Génie mécanique'),
(34, 'Finance et Ingénierie decesion'),
(35, 'Génie civil'),
(36, 'Génie énergitique & Environement');

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`ID_niveau`, `Libellé_niveau`) VALUES
(50, 'CP1'),
(51, 'CP2'),
(52, 'CI1'),
(53, 'CI2'),
(54, 'CI3');

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_utilisateur`, `Nom`, `Prénom`, `Email`, `Mot_de_passe`, `type_utilisateur`) VALUES
(1, 'MOHAMED', 'MOUMID', 'moumidmed@gmail.com', 'M0000', 'chef de filière'),
(3, 'Ali', 'moumid', 'ali@gmail.com', 'a0004', 'administrateur'),
(6, 'EL HACHAMI', 'Abdessamad', 'Abdesselhachami@gmail.com', 'A0001', 'administrateur'),
(35, 'Ikiss', 'Abdelali', 'Aliikiis@gmail.com', '12346789', 'Etudiant'),
(37, 'Naser', 'ELAZGOURI', 'naserelazg@gmail.com', 'azerty123', 'enseignant'),
(39, 'Brahim', 'Abararh', 'brahimAbararh@gmail.com', 'brahim1234', 'Etudiant'),
(41, 'Zineb', 'El MOUSAA', 'zinebelmousaa@gmail.com', '987654321', 'enseignant'),
(42, 'Bouallam', 'Hind', 'hindbou@gmail.com', 'Hind1234', 'secrétaire de département'),
(43, 'Naser', 'EL AZGOURI', 'elazgoury22@gmail.com', 'naser123', 'Etudiant'),
(44, 'ANA', 'HILAL', 'anahilal2024@gmail.com', 'anahilal2024', 'Etudiant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
