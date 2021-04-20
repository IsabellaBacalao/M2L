SCRIPTS DE LA BASE DE DONNEE




-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 20, 2021 at 03:56 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `m2l`
--

-- --------------------------------------------------------

--
-- Table structure for table `emplois`
--

CREATE TABLE `emplois` (
  `id` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emplois`
--

INSERT INTO `emplois` (`id`, `libelle`, `date_creation`) VALUES
(1, 'développeur .Net + SQL', '2021-02-08'),
(2, 'Chef de Projet Technique JAVA/J2EE H/F', '2020-12-08'),
(3, 'Ingénieur Poste de Travail', '2021-03-09'),
(4, 'INGÉNIEUR QA TEST/VVQ (H/F)', '2021-02-19'),
(5, 'développeur HTML', '2021-02-10'),
(6, 'Chef de Projet web', '2020-12-30'),
(7, 'Ingénieur numerique', '2021-03-23'),
(8, 'Data Scientiste ', '2021-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `type` text NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MRG_MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salles`
--

CREATE TABLE `salles` (
  `id_salle` int(11) NOT NULL,
  `nom_salle` text NOT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT '0',
  `heuredebut` time DEFAULT NULL,
  `heurefin` time DEFAULT NULL,
  `jour` date DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `capacite` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salles`
--

INSERT INTO `salles` (`id_salle`, `nom_salle`, `disponible`, `heuredebut`, `heurefin`, `jour`, `type`, `capacite`) VALUES
(1, 'Salle Majorelle', 1, NULL, NULL, NULL, 'reunion', 25),
(2, 'Amphithéâtre ', 1, NULL, NULL, NULL, 'Amphithéâtre ', 30),
(3, 'Salle Longwy', 1, NULL, NULL, NULL, 'reunion', 4),
(4, 'Salle Daum', 1, NULL, NULL, NULL, 'reunion', 4),
(5, 'Salle multimédia', 1, NULL, NULL, NULL, 'multimedia ', 12),
(6, 'Salle Lamour', 1, NULL, NULL, NULL, 'Reunion', 25),
(7, 'Salle Gallé', 1, NULL, NULL, NULL, 'multimedia ', 8),
(8, 'Salle Corbin', 1, NULL, NULL, NULL, 'multimedia', 8),
(9, 'Salle Baccarat', 1, NULL, NULL, NULL, 'reunion', 8),
(10, 'Salle Grüber', 1, NULL, NULL, NULL, 'multimedia', 12);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `cfrm_mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom`, `prenom`, `date_naissance`, `telephone`, `mail`, `login`, `mdp`, `cfrm_mdp`) VALUES
(3, 'Riou', 'Timothée', '2020-10-04', '34556666', 'tim@tim.com', 'timo', 'mdp', 'mdp'),
(4, 'Bacalao', 'Isabella', '2021-03-03', '0766030320', 'isabella@hotmail.com', 'isa ', 'isaisa', 'isaisa'),
(6, 'Guez', 'Frederic', '2020-02-02', '292939939', 'correcteur@gmail.com', 'correcteur', 'correcteur123', 'correcteur123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emplois`
--
ALTER TABLE `emplois`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`id_salle`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emplois`
--
ALTER TABLE `emplois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salles`
--
ALTER TABLE `salles`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

