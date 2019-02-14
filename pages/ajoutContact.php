<?php

    include "../assets/include/global.inc.php";
    session_start();

    $entrepriseDAO = new entrepriseDAO();
    $entreprises = $entrepriseDAO -> findAll();

    $fonctionDAO = new fonctionDAO();
    $fonctions = $fonctionDAO -> findAll();

    $genreDAO = new genreDAO();
    $genres = $genreDAO -> findALl();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

                <title>Application de Gestion des Stages</title>

        <link rel="stylesheet" type="text/css" href="../assets/css/styles.css" />
    </head>

    <body>
        <div id="conteneur">
            <div id="entete">
                <ul>
                    <?php

                        include "../assets/include/menu2.php";

                    ?>
                </ul>
            </div>
            <div id="contenu">

                <!-- Début du formulaire d'inscription de l'élève-->
                <form action="ajoutContact.php.php" method="post" class="formulaire">

                    <p>Nom : <input type="text" name="nomContact" required /></p>
                    <p>Prénom : <input type="text" name="prenomContact" required/></p>   
                    <p>Email : <input type="text" name="emailContact" required/></p> 
                    <p>Téléphone : <input type="text" name="telephoneContact" required/></p>
                    <p>Entreprise : <select name="idEntreprise">
                        <option value=""> Choisissez une entreprise </option>
                    <?php 

                    foreach ($entreprises as $entreprise) {

                            echo '<option'.' value="'. $entreprise -> getIdEntreprise() .'">'. $entreprise -> getDenomination() .'</option>';

                        }

                    ?>
                    </select>
                    </p>
                    <p>Fonction : <select name="idFonction">
                        <option value=""> Choisissez une fonction </option>
                    <?php 

                    foreach ($fonctions as $fonction) {

                            echo '<option'.' value="'. $fonction -> getIdFonction() .'">'. $fonction -> getLibelleFonction() .'</option>';

                        }

                    ?>
                    </select>
                    </p>
                    <p>Genre : <select name="libelleGenreContact">
                        <option value=""> Choisissez un sexe </option>
                    <?php 

                    foreach ($genres as $genre) {

                            echo '<option'.' value="'. $genre -> getLibelleGenre() .'">'. $genre -> getLibelleGenre() .'</option>';

                        }

                    ?>
                    </select>
                    </p>
                    <p><input type="submit" name="submit" value="Ajouter" /><input type="reset" value="Réinitialiser"></p>

                </form>
                <!-- Fin du formulaire d'inscription de l'élève-->

                <?php    

                    /** Récupère le champ "submit" du formulaire */
                    $submit = isset($_POST['submit']) ? $_POST['submit'] : "";

                    if ($submit) {

                            /** Récupère les variables du formulaire */
                            $nomContact = $_POST['nomContact'];
                            $prenomContact = $_POST['prenomContact'];
                            $emailContact = $_POST['emailContact'];
                            $telephoneContact = $_POST['telephoneContact'];
                            $idEntreprise = $_POST['idEntreprise'];
                            $idFonction = $_POST['idFonction'];
                            $libelleGenreContact = $_POST['libelleGenreContact'];

                            $contact = new ContactDAO();

                            /** Création d'une entreprise */
                            $contact -> insertionContact($nomContact, $prenomContact, $emailContact, $telephoneContact, $idEntreprise, $idFonction, $libelleGenreContact);
                            header ("Location: consulterContact.php"); 

                    }

                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>