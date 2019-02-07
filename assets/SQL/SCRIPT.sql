-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 14 janvier 2019
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `LimayracAppStage`
--

-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `limayracappstage` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `limayracappstage`;

--
-- Structure de la table `élève`
--

CREATE TABLE `eleve` (
    `IdEleve`               int(11) NOT NULL,
    `PrenomEleve`           varchar(20) DEFAULT NULL,
    `NomEleve`              varchar(20) DEFAULT NULL,
    `AdresseEleve`          varchar(100) DEFAULT NULL,
    `TelephoneEleve`        varchar(15) DEFAULT NULL,
    `EmailEleve`            varchar(50) DEFAULT NULL,
    `LibelleCursusEleve`    varchar(20) DEFAULT NULL,
    `IdOptionEleve`         int(11) DEFAULT NULL,
    `IdGenreEleve`          int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
    `IdGenre`       int(11) NOT NULL,
    `Civilite`      varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `option`
--

CREATE TABLE `option` (
    `IdOption`          int(11) NOT NULL,
    `LibelleOption`     varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
    `IdProfesseur`          int(11) NOT NULL,
    `PrenomProfesseur`      varchar(20) DEFAULT NULL,
    `NomProfesseur`         varchar(20) DEFAULT NULL,
    `TelephoneProfesseur`   varchar(15) DEFAULT NULL,
    `EmailProfesseur`       varchar(50) DEFAULT NULL,
    `MDP`                   varchar(255) NOT NULL,
    `IdQualiteProfesseur`   int(11) DEFAULT NULL,
    `IdGenreProfesseur`     int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `qualité`
--

CREATE TABLE `qualite` (
    `IdQualite`         int(11) NOT NULL,
    `LibelleQualite`    varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `cursus`
--

CREATE TABLE `cursus` (
    `LibelleCursus`     varchar(20) NOT NULL,
    `DescriptifCursus`  text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
    `LibellePromotion`          varchar(20) NOT NULL,
    `DescriptifPromotion`       text DEFAULT NULL,
    `NombreEleve`               int(3) DEFAULT NULL,
    `LibelleCursusPromotion`    varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
    `IdSujet`                   int(11) NOT NULL,
    `DescriptifSujet`           text DEFAULT NULL,
    `DateDebut`                 varchar(10) DEFAULT NULL,
    `DateFin`                   varchar(10) DEFAULT NULL,
    `IdEleveSujet`              int(11) DEFAULT NULL,
    `IdStatutSujet`             int(11) DEFAULT NULL,
    `IdProfesseurSujet`         int(11) DEFAULT NULL,
    `IdEntrepriseSujet`         int(11) DEFAULT NULL,
    `IdContactSujet`            int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `remplir`
-- Realtion entre les tables `sujet` et `paramètre`
--

CREATE TABLE `remplir` (
    `Valeur`                varchar(10) DEFAULT NULL,
    `IdSujetRemplir`        int(11) DEFAULT NULL,
    `IdParametreRemplir`    int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `paramètre`
--

CREATE TABLE `parametre` (
    `IdParametre`      int(11) NOT NULL,
    `LibelleParametre` varchar(35) DEFAULT NULL,
    `IdGPParametre`    int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `GroupeParamètre`
--

CREATE TABLE `groupeParametre` (
    `IdGP`                          int(11) NOT NULL,
    `LibelleGP`                     varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `utiliser`
-- Relation entre les tables `sujet` et `ressource`
--

CREATE TABLE `utiliser` (
    `IdSujetutiliser`       int(11) DEFAULT NULL,
    `IdRessourceUtiliser`   int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `ressource`
--

CREATE TABLE `ressource` (
    `IdRessource`       int(11) NOT NULL,
    `LibelleRessource`  varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `materiel`
-- Spécialisation de la table `ressource`
--

CREATE TABLE `materiel` (
    `IdRessourceMateriel`   int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `logiciel`
-- Spécialisation de la table `ressource`
--

CREATE TABLE `logiciel` (
    `IdRessourceLogiciel`   int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
    `IdStatut`      int(11) NOT NULL,
    `LibelleStatut` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `retrouver`
-- Relation entre les tables `sujet` et `motClé`
--

CREATE TABLE `retrouver` (
    `IdSujetRetrouver`   int(11) DEFAULT NULL,
    `IdMotCleRetrouver`  int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `motCle`
--

CREATE TABLE `motCle` (
    `IdMotCle`          int(11) NOT NULL,
    `LibelleMotCle`     varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
    `IdEntreprise`          int(11) NOT NULL,
    `Denomination`          varchar(40) DEFAULT NULL,
    `AdresseEntreprise`     varchar(70) DEFAULT NULL,
    `CP`                    int(5) DEFAULT NULL,          
    `Ville`                 varchar(25) DEFAULT NULL,
    `TelephoneEntreprise`   varchar(15) DEFAULT NULL,
    `Fax`                   varchar(15) DEFAULT NULL,
    `NombreStage`           int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `grandeEntreprise`
-- Spécialisation de la table `entreprise`
--

CREATE TABLE `grandeEntreprise` (
    `Division`          varchar(30) DEFAULT NULL,
    `IdEntrepriseGE`    int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `pme`
-- Spécialisation de la table `entreprise`
--

CREATE TABLE `pme` (
    `IdEntreprisePME`  int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
    `IdContact`             int(11) NOT NULL,
    `NomContact`            varchar(20) DEFAULT NULL,
    `PrenomContact`         varchar(20) DEFAULT NULL,
    `EmailContact`          varchar(40) DEFAULT NULL,
    `TelephoneContact`      varchar(15) DEFAULT NULL,
    `IdEntrepriseContact`   int(11) DEFAULT NULL,
    `IdFonctionContact`     int(11) DEFAULT NULL,
    `IdGenreContact`        int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
    `IdFonction`        int(11) NOT NULL,
    `LibelleFonction`   int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
-- Pour localiser plus facilement des enregistrements dans un fichier
--

--
-- Index pour la table `élève`
--

ALTER TABLE `eleve`
    ADD PRIMARY KEY (`IdEleve`),
    ADD KEY `FK_Eleve_LibelleCursus` (`LibelleCursusEleve`),
    ADD KEY `FK_Eleve_IdOption` (`IdOptionEleve`),
    ADD KEY `FK_Eleve_IdGenre` (`IdGenreEleve`);

--
-- Index pour la table `option`
--

ALTER TABLE `option`
    ADD PRIMARY KEY (`IdOption`);

--
-- Index pour la table `genre`
--

ALTER TABLE `genre`
    ADD PRIMARY KEY (`IdGenre`);

--
-- Index pour la table `professeur`
--

ALTER TABLE `professeur`
    ADD PRIMARY KEY (`IdProfesseur`),
    ADD KEY `FK_Professeur_IdQualite` (`IdQualiteProfesseur`),
    ADD KEY `FK_Professeur_IdGenre` (`IdGenreProfesseur`);

--
-- Index pour la table `qualité`
--

ALTER TABLE `qualite`
    ADD PRIMARY KEY (`IdQualite`);

--
-- Index pour la table `cursus`
--

ALTER TABLE `cursus`
    ADD PRIMARY KEY (`LibelleCursus`);

--
-- Index pour la table `promotion`
--

ALTER TABLE `promotion`
    ADD PRIMARY KEY (`LibellePromotion`),
    ADD KEY `FK_Promotion_LibelleCursus` (`LibelleCursusPromotion`);

--
-- Index pour la table `sujet`
--

ALTER TABLE `sujet`
    ADD PRIMARY KEY (`IdSujet`, `IdEleveSujet`),
    ADD KEY `FK_Sujet_IdEleve` (`IdEleveSujet`),
    ADD KEY `FK_Sujet_IdStatut` (`IdStatutSujet`),
    ADD KEY `FK_Sujet_IdEntreprise` (`IdEntrepriseSujet`),
    ADD KEY `FK_Sujet_IdContact` (`IdContactSujet`),
    ADD KEY `FK_Sujet_IdProfesseur` (`IdProfesseurSujet`);

--
-- Index pour la table `remplir`
--

ALTER TABLE `remplir`
    ADD PRIMARY KEY (`IdSujetRemplir`, `IdParametreRemplir`),
    ADD KEY `FK_Remplir_IdSujet` (`IdSujetRemplir`),
    ADD KEY `FK_Remplir_IdParametre` (`IdParametreRemplir`);

--
-- Index pour la table `parametre`
--

ALTER TABLE `parametre`
    ADD PRIMARY KEY (`IdParametre`),
    ADD KEY `FK_Parametre_IdGP` (`IdGPParametre`);

--
-- Index pour la table `groupeParametre`
--

ALTER TABLE `groupeParametre`
    ADD PRIMARY KEY  (`IdGP`);

--
-- Index pour la table `utiliser`
--

ALTER TABLE `utiliser`
    ADD PRIMARY KEY (`IdSujetUtiliser`, `IdRessourceUtiliser`),
    ADD KEY `FK_Utiliser_IdSujet` (`IdSujetUtiliser`),
    ADD KEY `FK_Utiliser_IdRessource` (`IdRessourceUtiliser`);

--
-- Index pour la table `ressource`
--

ALTER TABLE `ressource`
    ADD PRIMARY KEY (`IdRessource`);

--
-- Index pour la table `materiel`
--

ALTER TABLE `materiel`
    ADD PRIMARY KEY (`IdRessourceMateriel`);

--
-- Index pour la table `logiciel`
--

ALTER TABLE `logiciel`
    ADD PRIMARY KEY (`IdRessourceLogiciel`);

--
-- Index pour la table `statut`
--

ALTER TABLE `statut`
    ADD PRIMARY KEY (`IdStatut`);

--
-- Index pour la table `retrouver`
--

ALTER TABLE `retrouver`
    ADD PRIMARY KEY (`IdSujetRetrouver`, `IdMotCleRetrouver`),
    ADD KEY `FK_Retrouver_IdSujet` (`IdSujetRetrouver`),
    ADD KEY `FK_Retrouver_IdMotCle` (`IdMotCleRetrouver`);

--
-- Index pour la table `motCle`
--

ALTER TABLE `motCle`
    ADD PRIMARY KEY (`IdMotCle`);

--
-- Index pour la table `entreprise`
--

ALTER TABLE `entreprise`
    ADD PRIMARY KEY (`IdEntreprise`);

--
-- Index pour la table `grandeEntreprise`
--

ALTER TABLE `grandeEntreprise`
    ADD PRIMARY KEY (`IdEntrepriseGE`);

--
-- Index pour la table `pme`
--

ALTER TABLE `pme`
    ADD PRIMARY KEY (`IdEntreprisePME`);

--
-- Index pour la table `contact`
--

ALTER TABLE `contact`
    ADD PRIMARY KEY (`IdContact`),
    ADD KEY `FK_Contact_IdEntreprise` (`IdEntrepriseContact`),
    ADD KEY `FK_Contact_IdFonction` (`IdFonctionContact`),
    ADD KEY `FK_Contact_IdGenre` (`IdGenreContact`);

--
-- Index pour la table `fonction`
--

ALTER TABLE `fonction`
    ADD PRIMARY KEY (`IdFonction`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `eleve`
--

ALTER TABLE `eleve`
    MODIFY `IdEleve` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `option`
--

ALTER TABLE `option`
    MODIFY `IdOption` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `genre`
--

ALTER TABLE `genre`
    MODIFY `IdGenre` int(11) NOT NULL AUTo_INCREMENT;

--
-- AUTO_INCREMENT pour la table `professeur`
--

ALTER TABLE `professeur`
    MODIFY `IdProfesseur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `qualite`
--

ALTER TABLE `qualite`
    MODIFY `IdQualite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sujet` 
--

ALTER TABLE `sujet`
    MODiFY `IdSujet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parametre`
--

ALTER TABLE `parametre`
    MODIFY `IdParametre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `groupeParametre`
--

ALTER TABLE `groupeParametre`
    MODIFY `IdGP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ressource`
--

ALTER TABLE `ressource`
    MODIFY `IdRessource` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `statut`
--

ALTER TABLE `statut`
    MODIFY `IdStatut` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `motCle`
--

ALTER TABLE `motCle`
    MODIFY `IdMotCle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprise`
--

ALTER TABLE `entreprise`
    MODIFY `IdEntreprise` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--

ALTER TABLE `contact`
    MODIFY `IdContact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fonction`
--

ALTER TABLE `fonction`
    MODIFY `IdFonction` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `eleve`
--

ALTER TABLE `eleve`
    ADD CONSTRAINT `FK_Eleve_LibelleCursus` FOREIGN KEY (`LibelleCursusEleve`) REFERENCES `cursus` (`LibelleCursus`),
    ADD CONSTRAINT `FK_Eleve_IdOption` FOREIGN KEY (`IdOptionEleve`) REFERENCES `option` (`IdOption`),
    ADD CONSTRAINT `FK_Eleve_IdGenre` FOREIGN KEY (`IdGenreEleve`) REFERENCES `genre` (`IdGenre`);
    
--
-- Contraintes pour la table `promotion`
--

ALTER TABLE `promotion`
    ADD CONSTRAINT `FK_Promotion_LibelleCursus` FOREIGN KEY (`LibelleCursusPromotion`) REFERENCES `cursus` (`LibelleCursus`);

--
-- Contraintes pour la table `professeur`
--

ALTER TABLE `professeur`
    ADD CONSTRAINT `FK_Professeur_IdQualite` FOREIGN KEY (`IdQualiteProfesseur`) REFERENCES `qualite` (`IdQualite`),
    ADD CONSTRAINT `FK_Professeur_IdGenre` FOREIGN KEY (`IdGenreProfesseur`) REFERENCES `genre` (`IdGenre`);

--
-- Contraintes pour la table `sujet`
--

ALTER TABLE `sujet`
    ADD CONSTRAINT `FK_Sujet_IdEleve` FOREIGN KEY (`IdEleveSujet`) REFERENCES `eleve` (`IdEleve`),
    ADD CONSTRAINT `FK_Sujet_IdStatut` FOREIGN KEY (`IdStatutSujet`) REFERENCES `statut` (`IdStatut`),
    ADD CONSTRAINT `FK_Sujet_IdProfesseur` FOREIGN KEY (`IdProfesseurSujet`) REFERENCES `professeur` (`IdProfesseur`),
    ADD CONSTRAINT `FK_Sujet_IdContact` FOREIGN KEY (`IdContactSujet`) REFERENCES `contact` (`IdContact`),
    ADD CONSTRAINT `FK_Sujet_IdEntreprise` FOREIGN KEY (`IdEntrepriseSujet`) REFERENCES `entreprise` (`idEntreprise`);

--
-- Contraintes pour la table `remplir`
--

ALTER TABLE `remplir`
    ADD CONSTRAINT `FK_Remplir_IdSujet` FOREIGN KEY (`IdSujetRemplir`) REFERENCES `sujet` (`IdSujet`),
    ADD CONSTRAINT `FK_Remplir_IdParametre` FOREIGN KEY (`IdParametreRemplir`) REFERENCES `parametre` (`IdParametre`);

--
-- Contraintes pour la table `groupe`
--

ALTER TABLE `parametre`
    ADD CONSTRAINT `FK_Parametre_IdGP` FOREIGN KEY (`IdGPParametre`) REFERENCES `groupeParametre` (`IdGP`);

--
-- Contraintes pour la table `utiliser`
--

ALTER TABLE `utiliser`
    ADD CONSTRAINT `FK_Utiliser_IdSujet` FOREIGN KEY (`IdSujetUtiliser`) REFERENCES `sujet` (`IdSujet`),
    ADD CONSTRAINT `FK_Utiliser_IdRessource` FOREIGN KEY (`IdRessourceUtiliser`) REFERENCES `ressource` (`IdRessource`);

--
-- Contraintes pour la table `materiel`
--

ALTER TABLE `materiel`
    ADD CONSTRAINT `FK_Materiel_IdRessource` FOREIGN KEY (`IdRessourceMateriel`) REFERENCES `ressource` (`IdRessource`);

--
-- Contraintes pour la table `logiciel`
--

ALTER TABLE `logiciel`
    ADD CONSTRAINT `FK_Logiciel_IdRessource` FOREIGN KEY (`IdRessourceLogiciel`) REFERENCES `ressource` (`IdRessource`);

--
-- Contraintes pour la table `retrouver`
--

ALTER TABLE `retrouver` 
    ADD CONSTRAINT `FK_Retrouver_IdSujet` FOREIGN KEY (`IdSujetRetrouver`) REFERENCES `sujet` (`IdSujet`),
    ADD CONSTRAINT `FK_retrouver_IdMotCle` FOREIGN KEY (`IdMotCleRetrouver`) REFERENCES `motCle` (`IdMotCle`);

--
-- Contraintes pour la table `grandeEntreprise`
--

ALTER TABLE `grandeEntreprise`
    ADD CONSTRAINT `FK_GrandeEntreprise_IdEntreprise` FOREIGN KEY (`IdEntrepriseGE`) REFERENCES `entreprise` (`IdEntreprise`);

--
-- Contraintes pour la table `pme`
--

ALTER TABLE `pme`
    ADD CONSTRAINT `FK_PME_IdEntreprise` FOREIGN KEY (`IdEntreprisePME`) REFERENCES `entreprise` (`IdEntreprise`);

--
-- Contraintes pour la table `contact`
--

ALTER TABLE `contact`
    ADD CONSTRAINT `FK_Contact_IdEntreprise` FOREIGN KEY (`IdEntrepriseContact`) REFERENCES `entreprise` (`IdEntreprise`),
    ADD CONSTRAINT `FK_Contact_IdFonction` FOREIGN KEY (`IdFonctionContact`) REFERENCES `fonction` (`IdFonction`),
    ADD CONSTRAINT `FK_Contact_IdGenre` FOREIGN KEY (`IdGenreContact`) REFERENCES `genre` (`IdGenre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;