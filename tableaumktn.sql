-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Janvier 2018 à 08:23
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tableaumktn`
--

-- --------------------------------------------------------

--
-- Structure de la table `fibre`
--

CREATE TABLE `fibre` (
  `numFibre` int(20) NOT NULL,
  `PA` int(50) NOT NULL,
  `TR` int(50) NOT NULL,
  `PB` int(50) NOT NULL,
  `idPM` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fibre`
--

INSERT INTO `fibre` (`numFibre`, `PA`, `TR`, `PB`, `idPM`) VALUES
(1, 0, 0, 0, 0),
(2, 0, 0, 0, 0),
(3, 0, 0, 0, 0),
(4, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pm`
--

CREATE TABLE `pm` (
  `idPM` int(20) NOT NULL,
  `numPM` int(20) NOT NULL,
  `adresse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pm`
--

INSERT INTO `pm` (`idPM`, `numPM`, `adresse`) VALUES
(1, 123, 'aze');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fibre`
--
ALTER TABLE `fibre`
  ADD PRIMARY KEY (`numFibre`),
  ADD KEY `idPM` (`idPM`);

--
-- Index pour la table `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`idPM`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fibre`
--
ALTER TABLE `fibre`
  MODIFY `numFibre` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `pm`
--
ALTER TABLE `pm`
  MODIFY `idPM` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
