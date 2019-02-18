<?php

    include "../assets/include/global.inc.php";
    session_start();

    $genreDAO = new genreDAO();
    $genres = $genreDAO -> findALl();

    $cursusDAO = new cursusDAO();
    $cursuss = $cursusDAO -> findAll();

    $optionDAO = new optionDAO();
    $options = $optionDAO -> findAll();

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
            <div>

            <?php
                
                include "../assets/include/menuGestionEleve.php";
                
            ?>
                
            </div>
            <div id="contenu">

                <!-- Début du formulaire d'inscription de l'élève-->
                <form action="ajoutEleve.php" method="post" class="formulaire">

                    <p>Prénom : <input type="text" name="prenom" required /></p>
                    <p>Nom : <input type="text" name="nom" required /></p>
                    <p> <select name="libelleGenreEleve">
                            <option value=""> Choissisez un sexe </option>
                            <?php 

                            foreach ($genres as $genre) {

                                echo '<option'.' value="'. $genre -> getLibelleGenre() .'">'. $genre -> getLibelleGenre() .'</option>';

                            }

                            ?>
                        </select>
                    </p>
                    <p>Adresse : <input type="text" name="adresse" /></p>    
                    <p>Numéro de téléphone : <input type="text" name="phone"/></p>
                    <p>Adresse mail : <input type="email" name="email" required /></p>
                    <p> 
                        <select name="libelleCursusEleve" required>
                            <option value=""> Choisissez un cursus </option>
                            <?php 

                            foreach ($cursuss as $cursus) {

                                echo '<option'.' value="'. $cursus -> getLibelleCursus() .'">'. $cursus -> getLibelleCursus() .'</option>';

                            }

                            ?>
                        </select>
                    </p>
                    <p> 
                        <select name="idOptionEleve" required>
                            <option value=""> Choisissez une option </option>
                            <?php 

                            foreach ($options as $option) {

                                echo '<option'.' value="'. $option -> getLibelleOption() .'">'. $option -> getLibelleOption() .'</option>';

                            }

                            ?>
                        </select>
                    </p>    
                    <p><input type="submit" name="submit" value="Inscrire" /><input type="reset" value="Réinitialiser"></p>

                </form>
                <!-- Fin du formulaire d'inscription de l'élève-->


                <?php    

                    /** Récupère les champs du formulaire */
                    $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                    $genre = isset($_POST['genre']) ? $_POST['genre'] : '';

                    if ($submit) {
                        
                        /* Fonction php pour définir la syntaxe correcte d'une adresse mail */
                        $email_valide = preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email']);

                        if ($email_valide) { /* Vérifie si c'est un mail du type bla@bla.com */

                            /** Récupère les variables du formulaire */
                            $prenomEleve = $_POST['prenom'];
                            $nomEleve = $_POST['nom'];
                            $adresseEleve = $_POST['adresse'];
                            $telephoneEleve = $_POST['phone'];
                            $emailEleve = $_POST['email'];
                            $idOptionEleve = $_POST['idOptionEleve'];
                            $libelleCursusEleve = $_POST['libelleCursusEleve'];
                            $libelleGenreEleve = $_POST['libelleGenreEleve'];

                            $eleve = new EleveDAO();

                            if ($eleve->is_mail_exist($emailEleve) == false) { /** Vérifie si l'adresse mail n'a pas déjà été utilisée */

                                    /** Création d'un élève */
                                    $eleve -> insertionEleve($prenomEleve, $nomEleve, $adresseEleve, $telephoneEleve, $emailEleve, $libelleCursusEleve, $idOptionEleve, $libelleGenreEleve);
                                    header ("Location: consulterEleve.php");

                            } else { /** L'email saisit est déjà utilisé */

                                echo '<p class="erreur">L\'email que vous avez choisi est déjà utilisé par un autre utilisateur.</p>';

                            }
                            
                        } else { /** Si l'adresse mail n'est pas valide */

                            echo '<p class="erreur">Cette adresse email n\'est pas conforme.</p>';

                        }                        
                    }

                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>