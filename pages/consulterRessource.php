<?php

    include "../assets/include/global.inc.php";
    session_start();

    $ressourceDAO = new ressourceDAO();
    $ressources = $ressourceDAO -> findAll();

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
                
            </div>
            <div id="contenu">

            <?php

                echo "<table>";
                echo "<tr>";
                echo "<th>Nom</th>";
                echo "<th>Type</th>";
                echo "<th>Supprimer</th>";
                echo "</tr>";

                foreach ($ressources as $ressource) {

                    echo "<tr>";
                    echo "<td>". $ressource -> getLibelleRessource() ."</td>";
                    echo "<td>". $ressource -> getTypeRessource() ."</td>";
                    echo '<td><a href="supprimerRessource.php?idRessource='. $ressource -> getIdRessource() .'"> Supprimer </td>';
                    echo "</tr>";

                }

                echo "</table>";
        
            ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>