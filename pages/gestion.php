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
                
                include "../assets/include/menugestion.php";
                
                ?>
                
            </div>
            <div id="contenu">

                <p>Voici la liste des étudiants que vous avez à charge.</p>

                

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>