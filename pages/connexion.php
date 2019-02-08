<?php

    include "../assets/include/global.inc.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

                <title>Connexion</title>

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

                <p> Veuillez vous connecter pour poursuivre sur le site. </p>
                
                <!-- Début du formulaire de connexion -->
                <form action="connexion.php" method="post" class="formulaire">
                
                    <p>Adresse Mail : <input type="text" name="email" required /></p>
                    <p>Mot de passe : <input type="password" name="password" required /></p>
                    <p><input type="submit" name="submit" value="Se connecter" /></p>

                </form>
                <!-- Fin du formulaire de connexion -->

                <a href="inscription.php" class="non_inscrit"> 
                    <button class="button">
                        Vous n'avez pas de compte ? <br/>Cliquez ici
                    </button>
                </a>

                <?php

                    /** Récupération des valeurs du formulaire */
                    $emailProfesseur = isset($_POST['email']) ? $_POST['email'] : " ";
                    $password = isset($_POST['password']) ? $_POST['password'] : " ";
                    $submit = isset($_POST['submit']);

                    if ($submit == 1) {

                        $logProfesseur = new professeurDAO();

                        if ($logProfesseur -> verify_login($emailProfesseur, $password)) { /** Vérification des informations de connexion */

                            session_start(); /** Lancement d'une session */
                            /** Stockage des variables dans une variable de session */
                            $_SESSION['email'] = $emailProfesseur;
                            $_SESSION['password'] = $password;
                            $_SESSION['idQualiteProfesseur'] = 1;
                            header ("Location: ../index.php"); /** Redirection vers la page d'acceuil */

                        } else { /** Les informations ne correspondent à aucun utilisateur */

                            echo '<p class="erreur">La saisie de votre identifiant ou de votre mot de passe est incorecte, veuillez saisir de nouveau vos informations de connexion.</p>';

                        }
                    }

                ?> 

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>