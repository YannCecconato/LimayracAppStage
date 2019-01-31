<?php

    include "../assets/include/global.inc.php";
    session_start();

    $eleveDAO = new eleveDAO();
    $eleves = $eleveDAO->findAll();

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
                echo "<th>Prénom</th>";
                echo "<th>Nom</th>";
                echo "<th>Genre</th>";
                echo "<th>Adresse</th>";
                echo "<th>Telephone</th>";
                echo "<th>Email</th>";
                echo "<th>Option</th>";
                echo "<th>Cursus</th>";
                echo "<th>Modifier</th>";
                echo "<th>Supprimer</th>";
                echo "</tr>";

                foreach ($eleves as $eleve) {

                    echo "<tr>";
                    echo "<td>". $eleve -> getPrenomEleve() ."</td>";
                    echo "<td>". $eleve -> getNomEleve() ."</td>";
                    echo "<td>". $eleve -> getGenreEleve() ."</td>";
                    echo "<td>". $eleve -> getAdresseEleve() ."</td>";
                    echo "<td>". $eleve -> getTelephoneEleve() ."</td>";
                    echo "<td>". $eleve -> getEmailEleve() ."</td>";
                    echo "<td>". $eleve -> getOptionEleve() ."</td>";
                    echo "<td>". $eleve -> getLibelleCursusEleve() ."</td>";
                    echo '<td><a href="modifierEleve.php?idEleve='. $eleve -> getIdEleve() .'"> Modifier </td>';
                    echo '<td><a href="supprimerEleve.php?idEleve='. $eleve -> getIdEleve() .'"> Supprimer </td>';
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