<?php

    include "../assets/include/global.inc.php";

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

                <title>Inscription</title>

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
                
            </div>
            <div id="contenu">

                <p> Veuillez créer un compte pour poursuivre sur le site. </p>

                <!-- Début du formulaire d'inscription -->
                <form action="inscription.php" method="post" class="formulaire">

                    <p>Nom : <input type="text" name="nom" required /></p>
                    <p>Prénom : <input type="text" name="prenom" required /></p>
                    <p> <select name="genre">
                        <option value="Femme"> Femme </option>
                        <option value="Homme"> Homme </option>
                        </select>
                    </p>        
                    <p>Numéro de téléphone : <input type="text" name="phone" required /></p>
                    <p>Adresse Mail : <input type="text" name="email" required /></p>
                    <p>Mot de passe : <input type="password" name="password" required /></p>
                    <p>Confirmation mot de passe : <input type="password" name="confirm_pass" required /></p>
                    <p><input type="submit" name="submit" value="S'inscrire" /><input type="reset" value="Réinitialiser"></p>

                </form>
                <!-- Fin du formulaire d'inscription -->

                <?php
                
                    /** Récupère les champs du formulaire */
                    $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                    $genre = isset($_POST['genre']) ? $_POST['genre'] : '';

                    if ($submit) {
                        
                        /* Fonction php pour définir la syntaxe correcte d'une adresse mail */
                        $email_valide = preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email']);

                        if ($email_valide) { /* Vérifie si c'est un mail du type bla@bla.com */

                            /** Récupère les variables du formulaire */
                            $nomProfesseur = $_POST['nom'];
                            $prenomProfesseur = $_POST['prenom'];
                            $genreProfesseur = $_POST['genre'];
                            $telephoneProfesseur = $_POST['phone'];
                            $emailProfesseur = $_POST['email'];
                            $password = $_POST['password'];
                            $password_confirm = $_POST['confirm_pass'];

                            $professeur = new professeurDAO();

                            if ($professeur->is_mail_exist($emailProfesseur) == false) { /** Vérifie si l'adresse mail n'a pas déjà été utilisée */
                                
                                if ($password == $password_confirm) { /** Vérifie que les 2 mots de passe saisis soient identiques */

                                    $password = password_hash($password, PASSWORD_BCRYPT); /** Hachage du mot de passe */

                                    /** Création d'un professeur */
                                    $professeur -> inscription_professeur($prenomProfesseur, $nomProfesseur, $genreProfesseur, $telephoneProfesseur, $emailProfesseur, $password);

                                    isset($_SESSION) ? "" : session_start(); /** Démarrage d'une session */
                                    /** Stockage des variables dans une variable de session */
                                    $_SESSION['nom'] = $nomProfesseur; 
                                    $_SESSION['prenom'] = $prenomProfesseur;
                                    $_SESSION['genre'] = $genreProfesseur;
                                    $_SESSION['phone'] = $telephoneProfesseur;
                                    $_SESSION['email'] = $emailProfesseur;
                                    $_SESSION['idQualiteProfesseur'] = "ResponsableSection";
                                    header ("Location: ../index.php");

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