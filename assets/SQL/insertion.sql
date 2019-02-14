USE limayracappstage;

-- Début données "genre" --

INSERT INTO `genre` (LibelleGenre, DescriptifGenre)
VALUES
("Femme", NULL),
("Homme", NULL);

-- Début données "entreprise" --

INSERT INTO `entreprise` (IdEntreprise, Denomination, AdresseEntreprise, CP, Ville, TelephoneEntreprise, Fax, NombreStage)
VALUES
(NULL, "MONINFO", "60 rue Buissonnière", 31670, "Labège", "05.61.17.34.34", "05.61.17.34.35", 2),
(NULL, "INFOSYS LIMITED", "7 Avenue Didier Daurat", 31700, "Blagnac", "05.61.11.31.30", "05.34.50.91.90", 1),
(NULL, "COM6 INTERACTIVE", "3 Rue Antoine Lavoisier", 31140, "Launaguet", "05.34.27.24.24", NULL, 1),
(NULL, "ENSIACET", "4 Allée Emile Monso", 31030, "Toulouse CEDEX 4", "05.34.32.33.00", "05.34.32.33.99", 3),
(NULL, "WEISHARDT HOLDING", "27 Rue Maurice Weishardt", 81300, "Graulhet", "05.63.42.35.00", NULL, 2),
(NULL, "LE CAOUSOU", "42 Avenue Camille Pujol", 31500, "Toulouse CEDEX 5", "05.62.47.48.49", NULL, 2),
(NULL, "APIXIS", "130 Rue Galilée", 31670, "Labège", "05.61.28.69.73", NULL, 1),
(NULL, "SOCIETE DES CLINIQUES DU MIDI", "Château de Verdaich, Lieu-dit du Château de Verdaich", 31550, "Gaillac-Toulza", "05.61.50.91.00", NULL, 1),
(NULL, "LA POSTE USCC", NULL, NULL, "Toulouse", NULL, NULL, 2),
(NULL, "KORIAN LYON", NULL, NULL, "Lyon", NULL, NULL, 1),
(NULL, "ANHOD CONSULTING", "52 rue Jules Claretie", 31400, "Toulouse", "05.61.83.29.13", NULL, 1),
(NULL, "LDNR", "150 Rue de la Découverte", 31670, "Labège", "05.61.00.14.85", NULL, 3),
(NULL, "INOVANS SUD OUEST", "2 Rue du Professeur Pierre Vellas", 31300, "Toulouse", "05.34.30.43.70", NULL, 1),
(NULL, "SITCOM SOFTWARE", "18 Rue Pharaon", 31000, "Toulouse", "05.61.14.92.99", NULL, 1),
(NULL, "D-LITE SYSTEMS", "20 Allée de Catchere", 31770, "Colomiers", "05.61.48.79.39", NULL, 1),
(NULL, "CNRS DELEGATION MP", "16 Avenue Edouard Belin", 31400, "Toulouse", "05.61.33.60.00", NULL, 1),
(NULL, "SDIS 31", "49 Chemin de l'Armurie", 31776, "Colomiers", "05.61.03.37.00", NULL, 1),
(NULL, "PIERRE FABRE", "Zone industrielle La Chartreuse", 81100, "Castres", "05.63.71.45.00", NULL, 1),
(NULL, "PETITES SOEURS DES PAUVRES", "130 Avenue Jean Rieux", 31500, "Toulouse", "05.61.80.73.64", NULL, 1),
(NULL, "CLINITECH PC", "1 Avenue de Villate", 31600, "Pins-Justaret", "05.61.76.22.61", NULL, 1),
(NULL, "COULEUR CITRON", "14 Avenue de l'Europe", 31520, "Ramonville-Saint-Agne", "05.34.51.38.15", NULL, 1),
(NULL, "SOGETI FRANCE", "9 Bd Henri Ziegler", 31700, "Blagnac", "05.34.36.28.00", NULL, 2),
(NULL, "IUCT - ONCOPOLE", "1 Avenue Irène Joliot-Curie", 31100, "Toulouse", "05.31.15.50.50", NULL, 1),
(NULL, "TECH MAHINDRA LIMITED", "22 Boulevard Deodat de Sévérac", 31770, "Colomiers", "05.61.15.25.10", NULL, 1),
(NULL, "CESARE NORI", "23 Place Victor Hugo", 31000, "Toulouse", "05.61.22.89.56", NULL, 1),
(NULL, "BELVIA IMMOBILIER", "16 Impasse René Couzinet", 31500, "Toulouse", "08.21.21.01.01", NULL, 1),
(NULL, "SRA SUD OUEST", "109 Avenue de Lespinet", 31500, "Toulouse", "05.31.47.15.15", NULL, 1),
(NULL, "QUADRAN", "8 Rue Louis Courtois de Viçose", 31100, "Toulouse", "05.34.56.21.70", NULL, 1),
(NULL, "CENTRE HOSPITALIER ARIEGE COUSERANS", "1 Chemin de Cailloup", 09100, "Pamiers", "05.61.96.20.20", NULL, 1),
(NULL, "LAAS-CNRS", "7, avenue du Colonel Roche", 31031, "Toulouse CEDEX 4", "05.61.33.62.00", "05.61.33.63.00", 2),
(NULL, "NEWREST GROUP INTERNATIONAL", "61 Boulevard Lazare Carnot", 31000, "Toulouse", "05.62.89.39.88", NULL, 1),
(NULL, "MADEO CONSULTANT", "86 rue du Gouverneur Générale Eboué", 92130, "Issy-Les-Moulineaux", "01.40.95.30.30", NULL, 1),
(NULL, "3I", "1 Rue Joseph Marie Jacquard", 82000, "Montauban", "05.63.66.52.80", NULL, 1),
(NULL, "COPSONIC", "1471 Route de Saint-Nauphary", 82000, "Montauban", "05.63.67.81.20", NULL, 1),
(NULL, "AP FORMATION", "150 rue Nicolas Louis Vauquelin", 31100, "Toulouse", "05.34.61.26.23", NULL, 1),
(NULL, "L'UNIVERS DE L'EMBALLAGE", "ZI du Tuc", 82201, "Moissac", "05.63.04.63.30", NULL, 1),
(NULL, "AGORAVITA", "1 Rue Paul Mesplé", 31100, "Toulouse", "05.62.48.03.06", NULL, 1),
(NULL, "J.P FAUCHE INVESTISSEMENTS", "927 route de Moissac", 82130, "Lafrançaise", "05.63.65.85.33", "05.63.65.95.38", 1),
(NULL, "FARECO", "8 Route de Valbrillant", 13590, "Meyreuil", "04.42.58.63.71", NULL, 1),
(NULL, "ADII 81", "1 rue Louis Vicat, bat.1", 81000, "Albi", "09.81.72.51.86", "05.82.95.08.33", 1),
(NULL, "INSTITUT LIMAYRAC", "50 Rue de Limayrac", 31500, "Toulouse", "05.61.36.08.08", NULL, 1),
(NULL, "INFOMIL", "15 Rue Paul Mesplé", 31100, "Toulouse", "05.67.76.20.00", NULL, 1),
(NULL, "AIRBUS OPERATION SAS", "316 route de Bayonne", 31300, "Toulouse", "05.61.93.55.55", NULL, 1),
(NULL, "OPERANTIS", "23 Rue Jean Monnet", 31240, "Saint-Jean", "05.31.61.69.11", NULL, 1);

-- Début données "fonction" --

INSERT INTO `fonction` (IdFonction, LibelleFonction)
VALUES
(NULL, "Gérant"),
(NULL, "Responsable"),
(NULL, "Directeur Ressources Humaines"),
(NULL, "Directeur Adjoint"),
(NULL, "Secrétaire");

-- Début données "option" --

INSERT INTO `option` (LibelleOption, DescriptifOption)
VALUES
("SLAM", NULL),
("SISR", NULL);

-- Début données "qualite" --

INSERT INTO `qualite` (LibelleQualite, DescriptifQualite)
VALUES
("Responsable Section", NULL),
("Professeur référent", NULL);

-- Début données "cursus" --

INSERT INTO `cursus` (LibelleCursus, DescriptifCursus)
VALUES
("SIO1", NULL),
("SIO2", NULL);

-- Début données "statut" --

INSERT INTO `statut` (IdStatut, LibelleStatut)
VALUES
(NULL, "En cours"),
(NULL, "Terminé"),
(NULL, "Interrompu");