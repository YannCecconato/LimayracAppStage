<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

                <title>Application de Gestion des Stages</title>

        <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
    </head>

    <body>
        <div id="conteneur">
            <div id="entete">
                <ul>
                    <?php

                        include "assets/include/menu.php";

                    ?>
                </ul>
            </div>
            <div>
                
            </div>
            <div id="contenu">

                <?php
                    if (isset($_SESSION['email'])){

                        echo '<p>Bonjour, vous êtes actuellement connecté avec l\'adresse suivante : '. $_SESSION['email'] .'</p>';

                    } else {

                        echo '<p>Bienvenue sur le site de gestion des stages, veuillez vous connecter ou vous inscrire afin d\'avoir accès aux fonctionnalités du site.</p>';
                        echo '<p>Si vous êtes <strong>Responsable de Section</strong>, nous vous invitons à créer un compte en utilisant l\'onglet "Inscription" ou à vous connecter en utilisant l\'onglet "Connexion Responsable"</p>';
                        echo '<p>Cependant, si vous êtes <strong>Professeur Référent</strong>, nous vous invitons à vous connecter en allant sur l\'onglet "Connexion Référent" avec vos identifiants fournis par votre Responsable de Section</p>';

                    }    
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>