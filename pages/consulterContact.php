<?php

    include "../assets/include/global.inc.php";
    session_start();

    $contactDAO = new contactDAO();
    $contacts = $contactDAO -> findAll();

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
                
                include "../assets/include/menuGestionContact.php";
                
            ?>
                
            </div>
            <div id="contenu">

            <?php

                echo "<table>";
                echo "<tr>";
                echo "<th>Nom</th>";
                echo "<th>Prénom</th>";
                echo "<th>Genre</th>";
                echo "<th>Email</th>";
                echo "<th>Téléphone</th>";
                echo "<th>Entreprise</th>";
                echo "<th>Fonction</th>";
                echo "<th>Modifier</th>";
                echo "<th>Supprimer</th>";
                echo "</tr>";

                foreach ($contacts as $contact) {

                    echo "<tr>";
                    echo "<td>". $contact -> getNomContact() ."</td>";
                    echo "<td>". $contact -> getPrenomContact() ."</td>";
                    echo "<td>". $contact -> getLibelleGenreContact() ."</td>";
                    echo "<td>". $contact -> getEmailContact() ."</td>";
                    echo "<td>". $contact -> getTelephoneContact() ."</td>";
                    echo "<td>". $contact -> getIdEntrepriseContact() ."</td>";
                    echo '<td>'. $contact -> getIdFonctionContact() .'</td>';
                    echo '<td><a href="modifierContact.php?idContact='. $contact -> getIdContact() .'"> Modifier </td>';
                    echo '<td><a href="supprimerContact.php?idContact='. $contact -> getIdContact() .'"> Supprimer </td>';
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