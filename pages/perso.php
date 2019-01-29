<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

                <title>Espace personnel</title>

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
                
                include "../assets/include/menuperso.php";
                
                ?>
                
            </div>
            <div id="contenu">

                <p> Voici votre espace personnel. Vous pouvez y faire toutes les modifications concernant votre compte. </p> 

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>