-- Structure de la base de données pour le Système Académique EMSI
CREATE DATABASE IF NOT EXISTS `gestion_academique` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gestion_academique`;

-- 1. Table des Départements
CREATE TABLE IF NOT EXISTS `departements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `chef_departement` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 2. Table des Utilisateurs (Enseignants / Administrateurs)
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_complet` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL UNIQUE,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` enum('admin', 'enseignant') NOT NULL DEFAULT 'enseignant',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 3. Table des Cours (liée aux départements)
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(150) NOT NULL,
  `code_cours` varchar(20) NOT NULL UNIQUE,
  `departement_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`departement_id`) REFERENCES `departements`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
