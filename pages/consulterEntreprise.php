<?php

    include "../assets/include/global.inc.php";
    session_start();

    $entrepriseDAO = new entrepriseDAO();
    $entreprises = $entrepriseDAO -> findAll();

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
                
                include "../assets/include/menuGestionEntreprise.php";
                
            ?>
                
            </div>
            <div id="contenu">

            <?php

                echo "<table>";
                echo "<tr>";
                echo "<th>Dénomination</th>";
                echo "<th>Adresse</th>";
                echo "<th>Code postal</th>";
                echo "<th>Ville</th>";
                echo "<th>Téléphone</th>";
                echo "<th>Fax</th>";
                echo "<th>Nombre de stage(s)</th>";
                echo "<th>Modifier</th>";
                echo "<th>Supprimer</th>";
                echo "</tr>";

                foreach ($entreprises as $entreprise) {

                    echo "<tr>";
                    echo "<td>". $entreprise -> getDenomination() ."</td>";
                    echo "<td>". $entreprise -> getAdresseEntreprise() ."</td>";
                    echo "<td>". $entreprise -> getCp() ."</td>";
                    echo "<td>". $entreprise -> getVille() ."</td>";
                    echo "<td>". $entreprise -> getTelephoneEntreprise() ."</td>";
                    echo "<td>". $entreprise -> getFax() ."</td>";
                    echo '<td>'. $entreprise -> getNombreStage() .'</td>';
                    echo '<td><a href="modifierEntreprise.php?idEntreprise='. $entreprise -> getIdEntreprise() .'"> Modifier </td>';
                    echo '<td><a href="supprimerEntreprise.php?idEntreprise='. $entreprise -> getIdEntreprise() .'"> Supprimer </td>';
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