<?php

    include "../assets/include/global.inc.php";
    session_start();

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
            <div>

            <?php
                
                include "../assets/include/menuGestionProfesseur.php";
                
            ?>
                
            </div>
            <div id="contenu">

                <!-- Début du formulaire d'inscription du professeur référent -->
                <form action="ajoutProfesseur.php" method="post" class="formulaire">

                    <p> Prénom : <input type="text" name="prenom" required /></p>
                    <p> Nom : <input type="text" name="nom" required /></p>
                    <p> Sexe : 
                        <select name="libelleGenreProfesseur">
                            <option value=""> Choisissez un sexe </option>
                            <?php 

                                foreach ($genres as $genre) {

                                    echo '<option'.' value="'. $genre -> getLibelleGenre() .'">'. $genre -> getLibelleGenre() .'</option>';

                                }

                            ?>
                        </select>
                    </p>
                    <p> Numéro de téléphone : <input type="text" name="phone"/></p>
                    <p> Adresse mail : <input type="text" name="email" required /></p>
                    <p> Mot de passe : <input type="password" name="password" required /></p>
                    <p> Confirmation mot de passe : <input type="password" name="confirm_pass" required /></p>
                    <p><input type="hidden" name="libelleQualiteProfesseur" value="Professeur référent"/></p>    
                    <p><input type="submit" name="submit" value="Inscrire" /><input type="reset" value="Réinitialiser"/></p>

                </form>
                <!-- Fin du formulaire d'inscription du professeur référent -->

                <?php    

                    /** Récupère les champs du formulaire */
                    $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                    $genre = isset($_POST['genre']) ? $_POST['genre'] : '';

                    if ($submit) {
                        
                        /* Fonction php pour définir la syntaxe correcte d'une adresse mail */
                        $email_valide = preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email']);

                        if ($email_valide) { /* Vérifie si c'est un mail du type bla@bla.com */

                            /** Récupère les variables du formulaire */
                            $prenomProfesseur = $_POST['prenom'];
                            $nomProfesseur = $_POST['nom'];
                            $telephoneProfesseur = $_POST['phone'];
                            $emailProfesseur = $_POST['email'];
                            $password = $_POST['password'];
                            $password_confirm = $_POST['confirm_pass'];
                            $libelleQualiteProfesseur = $_POST['libelleQualiteProfesseur'];
                            $libelleGenreProfesseur = $_POST['libelleGenreProfesseur'];

                            $newprofesseur = new ProfesseurDAO();

                            if ($newprofesseur->is_mail_exist($emailProfesseur) == false) { /** Vérifie si l'adresse mail n'a pas déjà été utilisée */

                                if ($password == $password_confirm) {

                                    $password = password_hash($password, PASSWORD_BCRYPT); /** Hachage du mot de passe */

                                    /** Création d'un professeur */
                                    $newprofesseur -> inscriptionProfesseur($prenomProfesseur, $nomProfesseur, $telephoneProfesseur, $emailProfesseur, $password, $libelleQualiteProfesseur, $libelleGenreProfesseur);
                                    header ("Location: consulterProfesseur.php");

                                } else { /** Si les 2 mots de passe ne sont pas identiques */

                                    echo '<p class="erreur">Les 2 mots de passe ne sont pas identiques.</p>';

                                }

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