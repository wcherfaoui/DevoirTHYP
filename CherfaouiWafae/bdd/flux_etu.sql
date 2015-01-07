-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 07 Janvier 2015 à 13:11
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `flux_etu`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

CREATE TABLE IF NOT EXISTS `absence` (
  `id_etudiant` int(11) NOT NULL,
  `ABS_PRE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `absence`
--


-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `etudiant`
--


-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id_etudiant` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `note`
--

