USE limayracappstage;

-- Début données "genre" --

INSERT INTO `genre` (LibelleGenre, DescriptifGenre)
VALUES
("Femme", NULL),
("Homme", NULL);

-- Début données "entreprise" --

INSERT INTO `entreprise` (IdEntreprise, Denomination, AdresseEntreprise, CP, Ville, TelephoneEntreprise, Fax, NombreStage)
VALUES
(1, "MONINFO", "60 rue Buissonnière", 31676, "Labège", "05.61.17.34.34", "05.61.17.34.35", 2),
(2, "INFOSYS LIMITED", "7 Avenue Didier Daurat", 31700, "Blagnac", "05.61.11.31.30", "05.34.50.91.90", 1),
(3, "COM6 INTERACTIVE", "3 Rue Antoine Lavoisier", 31140, "Launaguet", "05.34.27.24.24", NULL, 1),
(4, "ENSIACET", "4 Allée Emile Monso", 31030, "Toulouse CEDEX 4", "05.34.32.33.00", "05.34.32.33.99", 3),
(5, "WEISHARDT HOLDING", "27 Rue Maurice Weishardt", 81300, "Graulhet", "05.63.42.35.00", NULL, 2),
(6, "LE CAOUSOU", "42 Avenue Camille Pujol", 31500, "Toulouse CEDEX 5", "05.62.47.48.49", NULL, 2),
(7, "APIXIS", "130 Rue Galilée", 31670, "Labège", "05.61.28.69.73", NULL, 1),
(8, "SOCIETE DES CLINIQUES DU MIDI", "Château de Verdaich, Lieu-dit du Château de Verdaich", 31550, "Gaillac-Toulza", "05.61.50.91.00", NULL, 1),
(9, "LA POSTE USCC", NULL, NULL, "Toulouse", NULL, NULL, 2),
(10, "KORIAN LYON", NULL, NULL, "Lyon", NULL, NULL, 1),
(11, "ANHOD CONSULTING", "52 rue Jules Claretie", 31400, "Toulouse", "05.61.83.29.13", NULL, 1),
(12, "LDNR", "150 Rue de la Découverte", 31670, "Labège", "05.61.00.14.85", NULL, 3),
(13, "INOVANS SUD OUEST", "2 Rue du Professeur Pierre Vellas", 31027, "Toulouse CEDEX 3", "05.34.30.43.70", NULL, 1),
(14, "SITCOM SOFTWARE", "18 Rue Pharaon", 31000, "Toulouse", "05.61.14.92.99", NULL, 1),
(15, "D-LITE SYSTEMS", "20 Allée de Catchere", 31770, "Colomiers", "05.61.48.79.39", NULL, 1),
(16, "CNRS GET", "14 Avenue Edouard Belin", 31400, "Toulouse", "05.61.33.60.00", NULL, 1),
(17, "SDIS 31", "49 Chemin de l'Armurie", 31776, "Colomiers", "05.61.03.37.00", NULL, 1),
(18, "PIERRE FABRE", "Zone industrielle La Chartreuse", 81100, "Castres", "05.63.71.45.00", NULL, 1),
(19, "PETITES SOEURS DES PAUVRES", "130 Avenue Jean Rieux", 31500, "Toulouse", "05.61.80.73.64", NULL, 1),
(20, "CLINITECH PC", "1 Avenue de Villate", 31600, "Pins-Justaret", "05.61.76.22.61", NULL, 1),
(21, "COULEUR CITRON", "14 Avenue de l'Europe", 31520, "Ramonville-Saint-Agne", "05.34.51.38.15", NULL, 1),
(22, "SOGETI FRANCE", "9 Bd Henri Ziegler", 31700, "Blagnac", "05.34.36.28.00", NULL, 2),
(23, "IUCT - ONCOPOLE", "1 Avenue Irène Joliot-Curie", 31100, "Toulouse", "05.31.15.50.50", NULL, 1),
(24, "TECH MAHINDRA LIMITED", "22 Boulevard Deodat de Sévérac", 31770, "Colomiers", "05.61.15.25.10", NULL, 1),
(25, "CESARE NORI", "23 Place Victor Hugo", 31000, "Toulouse", "05.61.22.89.56", NULL, 1),
(26, "BELVIA IMMOBILIER", "16 Impasse René Couzinet", 31500, "Toulouse", "08.21.21.01.01", NULL, 1),
(27, "SRA SUD OUEST", "109 Avenue de Lespinet", 31500, "Toulouse", "05.31.47.15.15", NULL, 1),
(28, "QUADRAN", "8 Rue Louis Courtois de Viçose", 31100, "Toulouse", "05.34.56.21.70", NULL, 1),
(29, "CENTRE HOSPITALIER ARIEGE COUSERANS", "1 Chemin de Cailloup", 09201, "Pamiers", "05.61.96.20.20", NULL, 1),
(30, "LAAS-CNRS", "7, avenue du Colonel Roche", 31031, "Toulouse CEDEX 4", "05.61.33.62.00", "05.61.33.63.00", 2),
(31, "NEWREST GROUP INTERNATIONAL", "61 Boulevard Lazare Carnot", 31000, "Toulouse", "05.62.89.39.88", NULL, 1),
(32, "MADEO CONSULTANT", "86 rue du Gouverneur Générale Eboué", 92130, "Issy-Les-Moulineaux", "01.40.95.30.30", NULL, 1),
(33, "3R", "1 Rue Jacquard", 82006, "Montauban", "05.63.66.52.80", NULL, 1),
(34, "COPSONIC", "1471 Route de Saint-Nauphary", 82000, "Montauban", "05.63.67.81.20", NULL, 1),
(35, "AP FORMATION", "150 rue Nicolas Louis Vauquelin", 31100, "Toulouse", "05.34.61.26.23", NULL, 1),
(36, "L'UNIVERS DE L'EMBALLAGE", "ZI du Tuc", 82201, "Moissac", "05.63.04.63.30", NULL, 1),
(37, "AGORAVITA", "1 Rue Paul Mesplé", 31100, "Toulouse", "05.62.48.03.06", NULL, 1),
(38, "J.P FAUCHE INVESTISSEMENTS", "927 route de Moissac", 82130, "Lafrançaise", "05.63.65.85.33", "05.63.65.95.38", 1),
(39, "FARECO", "8 Route de Valbrillant", 13590, "Meyreuil", "04.42.58.63.71", NULL, 1),
(40, "ADII 81", "1 rue Louis Vicat, bat.1", 81000, "Albi", "09.81.72.51.86", "05.82.95.08.33", 1),
(41, "INSTITUT LIMAYRAC", "50 Rue de Limayrac", 31500, "Toulouse", "05.61.36.08.08", NULL, 1),
(42, "INFOMIL", "15 Rue Paul Mesplé", 31100, "Toulouse", "05.67.76.20.00", NULL, 1),
(43, "AIRBUS OPERATION SAS", "316 route de Bayonne", 31060, "Toulouse CEDEX 9", "05.61.93.55.55", NULL, 1),
(44, "OPERANTIS", "23 Rue Jean Monnet", 31240, "Saint-Jean", "05.31.61.69.11", NULL, 1),
(45, "COLLEGE PIERRE SUC", "Avenue Rhin et Danube", 81370, "Saint-Sulpice", NULL, NULL, 1),
(46, "NFCA COMMUNICATION", "76 allée Jean Jaurès", 31000, "Toulouse", "05.61.46.78.55", NULL, 1),
(47, "IMS INTERNATIONAL MOBILITY SOLUTION", "61 boulevard Lazare Carnot", 31000, "Toulouse", "05.61.21.02.10", NULL, 1),
(48, "LANDRY AVI-SINTEC SARL", "2 rue Sauveur Ledret", 97500, "Saint-Pierre et Miquelon", "05.08.41.49.10", NULL, 1),
(49, "EDF C.N.P.E DE GOLFECH", NULL, 82401, "Valence d'Agen", "05.63.29.39.49", NULL, 1),
(50, "ISTIA", "5 allées Antoine Machado", 31058, "Toulouse", "05.61.50.23.68", NULL, 1),
(51, "SAFRAN ELECTRICAL AND POWER", "1 rue Louis Bleriot", 31702, "Blagnac", "05.34.28.20.00", NULL, 1),
(52, "R.TECH", "Parc technologique Delta Sud", 09340, "Verniolle", NULL, NULL, 1),
(53, "CENTRE SPATIAL GUYANAIS", "Route de l'espace", 97310, "Kourou", "05.94.33.70.50", NULL, 1),
(54, "ACOSS TOLOUSE", "Avenue d'Atlanta", 31020, "Toulouse CEDEX 2", "05.61.61.64.00", NULL, 1),
(55, "SEMI INFORMATIQUE", "610 rue Georges Claude", 13852, "Aix en Provence", "04.42.24.40.08", NULL, 1),
(56, "AIRS INFORMATIQUE", "47 rue Péraudel", 81100, "Castres", "05.31.61.60.80", NULL, 1),
(57, "FRANCECOM", "2 boulevard Jean Moulin", 44100, "Nantes", "02.51.80.88.88", NULL, 1),
(58, "CROUS DE TOULOUSE", "58 rue du Taur", 31070, "Toulouse CEDEX 7", "05.61.12.54.00", NULL, 1),
(59, "SINERGIC INFORMATIQUE", "134 chemin de la salade Ponsan", 31400, "Toulouse", "05.62.88.22.70", NULL, 1);

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

-- Début données "contact" --

INSERT INTO `contact` (IdContact, NomContact, PrenomContact, EmailContact, TelephoneContact, IdEntrepriseContact, IdFonctionContact, LibelleGenreContact)
VALUES
(NULL, "PITON", "Patrick", "ppiton@banque-edel.fr", NULL, 1, NULL, "Homme"),
(NULL, "CLERC", "Guillaume", "gclerc@banque-edel.fr", "05.61.17.57.34", 1, NULL, "Homme"),
(NULL, "CARIVEN", "Damien", NULL, NULL, 2, NULL, "Homme"),
(NULL, "POLITO", "Gilles", NULL, NULL, 3, NULL, "Homme"),
(NULL, "ALLOULA", "Karim", "karim.alloula@ensiacet.fr", "05.34.32.33.53", 4, NULL, "Homme"),
(NULL, "OTTIN", "Philippe", "philippe.ottin@weishardt.com", "05.63.42.35.04", 5, NULL, "Homme"),
(NULL, "MOREL", "Gilles", "g.morel@caousou.com", "05.81.31.00.51", 6, NULL, "Homme"),
(NULL, "ESPY", "Guillaume", "g.espy@apixis.fr", "06.30.71.10.97", 7, NULL, "Homme"),
(NULL, "PINEL", "Martin", "m.pinel@clinique-verdaich.com", "05.61.50.91.93", 8, NULL, "Homme"),
(NULL, "BARILLER", "Eric", "bariller.eric@gmail.com", "06.41.99.50.99", 9, NULL, "Homme"),
(NULL, "PIERRE", NULL, NULL, NULL, 10, NULL, NULL),
(NULL, "OUSTEAU", "Hugues", NULL, NULL, 11, NULL, "Homme"),
(NULL, "MARCO", "Emile", NULL, "06.88.69.65.34", 12, NULL, "Homme"),
(NULL, "MONIN", "Mathieu", "m.monin@inovans.fr", "07.83.32.01.31", 13, NULL, "Homme"),
(NULL, "DAHAN", "Roni", "rdahan@sitcom.fr", "06.30.74.35.93", 14, NULL, "Homme"),
(NULL, "TOURE", "Lamine", "lamine.toure@d-lite-systems.com", "05.61.48.79.59", 15, NULL, "Homme"),
(NULL, "AZEMA", "Philippe", "philippe-azema@get.obs-mip.fr", "05.61.33.26.35", 16, NULL, "Homme"),
(NULL, "LECLERC", "Ludovic", "ludovic.leclerc@sdis31.fr", "05.61.06.38.51", 17, NULL, "Homme"),
(NULL, "SEGUIER", "Régis", "regis.seguier@pierre-fabre.com", "05.63.71.40.56", 18, NULL, "Homme"),
(NULL, "JOOSEP", "Laurent", "laurent.joosep@psdp.fr", "06.88.64.64.84", 19, NULL, "Homme"),
(NULL, "ARASH", "Daraei", "contact@clinitech.fr", "05.61.76.22.61", 20, NULL, "Homme"),
(NULL, "PRIOT", "Pierre", "pierre@couleur-citron.com", "05.34.51.38.15", 21, NULL, "Homme"),
(NULL, "SIMPERE", "Olivier", "olivier.simpere@sogeti.com", NULL, 22, NULL, "Homme"),
(NULL, "LEMOINE", "Julien", "julien.lemoine@sogeti.com", NULL, 22, NULL, "Homme"),
(NULL, "JEANNELLE", "Denis", "jeannelle.denis@iucr-oncopole.fr", NULL, 23, NULL, "Homme"),
(NULL, "THULL", "Laurent", "laurent.thull@techmahindra.com", "06.85.30.20.86", 24, NULL, "Homme"),
(NULL, "MARGUERY", "Pierre", "pierre.cesarenori@gmail.com", NULL, 25, NULL, "Homme"),
(NULL, "MARCILLAC", "Charles", "cmarcillac@citya.com", "05.61.12.93.56", 26, NULL, "Homme"),
(NULL, "SICILIA", "Luigi", "luigi.sicilia@groupe-sra.fr", "05.31.47.15.15", 27, NULL, "Homme"),
(NULL, "YORK", "Kerwin", "kerwin.york@ensiacet.fr", "05.34.32.33.57", 4, NULL, "Homme"),
(NULL, "MARRONCLE", "David", "david.marroncle@quadran.eu", "05.34.56.21.70", 28, NULL, "Homme"),
(NULL, "SCHAUMBURG", "Gérard", NULL, "06.47.86.56.35", 29, NULL, "Homme"),
(NULL, "STRASSE", "Olivier", "olivier.strasse@lass.fr", NULL, 30, NULL, "Homme"),
(NULL, "GARRIGUES", "Romain", "r.garrigues@newrest.eu", "05.62.89.80.67", 31, NULL, "Homme"),
(NULL, "MONTEIL", "Thierry", "monteil@lass.fr", "06.30.50.21.31", 30, NULL, "Homme"),
(NULL, "VERNET", "Gilles", "gilles.vernet@madeo.fr", "01.40.95.30.30", 32, NULL, "Homme"),
(NULL, "BERTRANDA", "Stéphane", "stephane.bertranda@3r-npp.com", NULL, 33, NULL, "Homme"),
(NULL, "BOUZINAC", "Grégory", "gregory@gmiscon.com", "05.63.67.89.24", 34, NULL, "Homme"),
(NULL, "BUCHNER", "Nina", "nina.buchner@ldnr.fr", "06.09.06.46.16", 12, NULL, "Femme"),
(NULL, "VANDERSTRAETEN", NULL, NULL, NULL, 35, NULL, "Homme"),
(NULL, "LEBEQUE", "Bruno", NULL, "06.98.42.45.72", 36, NULL, "Homme"),
(NULL, "MOUNEY", "Fabien", NULL, NULL, 22, NULL, "Homme"),
(NULL, "DRUET", NULL, NULL, NULL, 37, NULL, "Homme"),
(NULL, "VIDAILLAC", "Philippe", "pvidaillac@fauche.com", "05.63.65.85.33", 38, NULL, "Homme"),
(NULL, "LAGUARIGUE", "Jean-Baptiste", "jb.laguarigue@fareco.fayat.com", "06.61.06.67.23", 39, NULL, "Homme"),
(NULL, "FONVIEILLE", "Ludovic", "st@adii.fr", "09.83.22.27.29", 40, NULL, "Homme"),
(NULL, "PUJOL", "Daniel", "daniel.pujol@limayrac.fr", NULL, 41, NULL, "Homme"),
(NULL, "DUCOURET", NULL, NULL, NULL, 42, NULL, "Homme"),
(NULL, "TRANVOUEZ", "Olivier", "olivier.tranvouez@airbus.com", "05.67.19.37.97", 43, NULL, "Homme"),
(NULL, "PEYRUSSE", "Alain", "a.peyrusse@operantis.com", "05.31.61.59.12", 44, NULL, "Homme"),
(NULL, "CHAMINADE", "David", "david.chaminade@ac-toulouse.fr", "06.33.93.21.41", 45, NULL, "Homme"),
(NULL, "BOUZNAD", NULL, NULL, NULL, 46, NULL, "Homme"),
(NULL, "THIRY", "Sandra", NULL, NULL, 47, NULL, "Femme"),
(NULL, "DRAKE", "Morgan", "mdrake@landryavi.com", NULL, 48, NULL, "Homme"),
(NULL, "DELHAYE", "Stéphane", "stephane.delhaye@3r-rpp.com", "05.63.66.91.64", 36, NULL, "Homme"),
(NULL, "BOUINEAU", "Gaëtan", "gaetan.bouineau@edf.fr", "05.63.29.39.26", 49, NULL, "Homme"),
(NULL, "FELALI", "Mohamed", "mohamed.felali@limayrac.fr", "05.61.36.08.55", 41, NULL, "Homme"),
(NULL, "CORREGE", "Thomas", "thomas.correge@univ-tlse2.fr", "06.95.37.29.19", 50, NULL, "Homme"),
(NULL, "THERON", "Guillaume", NULL, NULL, 51, NULL, "Homme"),
(NULL, "LAFITE", "Jonathan", "jonathan.lafite@rtech.fr", NULL, 52, NULL, "Homme"),
(NULL, "RAHIM", "Imran", "imran.rahim@cnes.fr", "05.94.33.49.50", 53, NULL, "Homme"),
(NULL, "BERNARD", "Xavier", "xavier.bernard@acoss.fr", "05.61.61.64.56", 54, NULL, "Homme"),
(NULL, "SEMANAZ", "Frédéric", "administratif@semi-informatique.com", "05.61.61.64.56", 55, NULL, "Homme"),
(NULL, "DOAT", "Olivier", "p.calves@airs.fr", NULL, 56, NULL, "Homme"),
(NULL, "BOURDENET", "Mathieu", "mathieub@francecom.fr", "06.43.31.80.82", 57, NULL, "Homme"),
(NULL, "JAY", "Xavier", "xavier.jay@crous-toulouse.fr", "05.61.12.54.00", 58, NULL, "Homme"),
(NULL, "MENEAU", NULL, "smeneau@infomil.com", NULL, 42, NULL, "Homme");

-- Début données "eleve" --

INSERT INTO `eleve` (IdEleve, PrenomEleve, NomEleve, AdresseEleve, TelephoneEleve, EmailEleve, LibelleCursusEleve, LibelleOptionEleve, LibelleGenreEleve)
VALUES
(NULL, "ALBOUY", "Benjamin", "", "06.40.66.42.75", "benji.albouy@gmail.com", "SIO2", "SISR", "Homme"),
(NULL, "BARBÉ", "Paco", "", "06.72.82.46.36", "paco.barbe@outlook.fr", "SIO2", "SLAM", "Homme"),
(NULL, "BARTHE", "Damien", "", "06.73.05.64.85", "damien09200@gmail.com", "SIO2", "SLAM", "Homme"),
(NULL, "BELLINO", "Antoine", "", "06.28.73.48.85", "antoine.bellino@limayrac.fr", "SIO2", "SLAM", "Homme"),
(NULL, "BONNEFONT", "Clément", "", "06.86.57.62.00", "clement.bonnefont1@gmail.com", "SIO2", "SLAM", "Homme"),
(NULL, "BOUBE-ASTUGUE", "Antoine", "", "06.86.67.29.85", "boubeastugue@outlook.fr", "SIO2", "SLAM", "Homme"),
(NULL, "BOUHCHIR", "Othman", "", "06.50.21.05.63", "othman.bouhchir@limayrac.fr", "SIO2", "SLAM", "Homme"),
(NULL, "BRY", "Quentin", "", "06.47.99.70.42", "quentinbry975@gmail.com", "SIO2", "SISR", "Homme"),
(NULL, "CALAS", "Benoit", "", "06.05.18.68.46", "benoit.calas@limayrac.fr", "SIO2", "SISR", "Homme"),
(NULL, "CARLES", "Benjamin", "", "06.46.72.43.66", "ben.carles31@gmail.com", "SIO2", "SLAM", "Homme"),
(NULL, "CARRIÉ", "Romain", "", "06.23.73.30.49", "roro82700@gmail.com", "SIO2", "SISR", "Homme"),
(NULL, "CECCONATO", "Yann", "172 rue Edmond Rostand, 31200 TOULOUSE", "06.35.52.57.21", "cecconato.yann@gmail.com", "SIO2", "SLAM", "Homme"),
(NULL, "DO REGO", "Yann", "", "06.18.71.35.03", "yanndorego@gmail.com", "SIO2", "SLAM", "Homme"),
(NULL, "ESTIEU", "Vincent", "", "06.30.82.78.26", "estieu.vincent@gmail.com", "SIO2", "SLAM", "Homme"),
(NULL, "FANJEAUX", "Gaël", "", "06.38.25.80.13", "gael.fanjeaux@gmail.com", "SIO2", "SLAM", "Homme"),
(NULL, "HUVEY", "Raphaël", "", "06.02.17.41.16", "raphael.huvey@gmail.com", "SIO2", "SISR", "Homme"),
(NULL, "ISSANCHOU", "Louis", "", "06.73.41.26.39", "louis.issanchou@limayrac.fr", "SIO2", "SLAM", "Homme"),
(NULL, "MANDINE", "Louis", "", "06.25.92.15.02", "louis.mandine99@gmail.com", "SIO2", "SISR", "Homme"),
(NULL, "MAURIES", "Bertrand", "", "06.73.75.88.27", "betrandmauries51@gmail.com", "SIO2", "SISR", "Homme"),
(NULL, "PAGES", "Fabien", "", "06.81.31.92.20", "fabien.pages0477@gmail.com", "SIO2", "SLAM", "Homme"),
(NULL, "PORTEFAIX", "Paul", "", "06.16.25.23.03", "paul.portefaix@limayrac.fr", "SIO2", "SISR", "Homme"),
(NULL, "PRADIER", "Alexandre", "", "06.06.90.14.91", "alex.ping48@gmail.com", "SIO2", "SISR", "Homme"),
(NULL, "TEISSEIRE", "Cyril", "", "06.84.41.28.37", "cyril.teisseire@orange.fr", "SIO2", "SLAM", "Homme"),
(NULL, "VUCIC", "Antoine", "", "06.52.81.06.65", "antoine.vucic@gmail.com", "SIO2", "SLAM", "Homme");