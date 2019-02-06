<?php

    include "../assets/include/global.inc.php";
    session_start();

    $professeurDAO = new professeurDAO();
    $professeurs = $professeurDAO->findAll();

    $idQualiteProfesseur = $_SESSION['idQualiteProfesseur'];

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
                echo "<th>Telephone</th>";
                echo "<th>Email</th>";
                echo "<th>Supprimer</th>";
                echo "</tr>";

                foreach ($professeurs as $professeur) {

                    $findByIdQualiteProfesseur = new professeurDAO();
                    $findByIdQualiteProfesseur -> findByIdQualiteProfesseur($idQualiteProfesseur);

                        echo "<tr>";
                        echo "<td>". $professeur -> getPrenomProfesseur() ."</td>";
                        echo "<td>". $professeur -> getNomProfesseur() ."</td>";
                        echo "<td>". $professeur -> getGenreProfesseur() ."</td>";
                        echo "<td>". $professeur -> getTelephoneProfesseur() ."</td>";
                        echo "<td>". $professeur -> getEmailProfesseur() ."</td>";
                        echo '<td><a href="supprimerProfesseur.php?idProfesseur='. $professeur -> getIdProfesseur() .'"> Supprimer </td>';
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