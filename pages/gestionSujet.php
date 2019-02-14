<?php

session_start();

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
                
                include "../assets/include/menuGestionSujet.php";
                
                ?>
                
            </div>
            <div id="contenu">

                <p>Ici, vous pouvez gérer les sujets en ajoutant, consultant, supprimant ou modifiant leurs données.</p>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>