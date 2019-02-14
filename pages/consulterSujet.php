<?php

    include "../assets/include/global.inc.php";
    session_start();

    $sujetDAO = new sujetDAO();
    $sujets = $sujetDAO->findAll();

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
                <form action="ConsulterSujet.php" method="post" class="formulaire">
                    <p> Rechercher un sujet par nom : <input type="text" name="recherche" placeholder="Recherche" />
                    <input type="submit" name="submit" value="Recherche" /></p>
                </form>

            <?php
            
                $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
                $submit = isset($_POST['submit']);

                echo "<table>";
                echo "<tr>";
                echo "<th>Sujet</th>";
                echo "<th>Date Début</th>";
                echo "<th>Date Fin</th>";
                echo "<th>Élève</th>";
                echo "<th>Statut</th>";
                echo "<th>Professeur</th>";
                echo "<th>Entreprise</th>";
                echo "<th>Maître de stage</th>";
                echo "<th>Détails</th>";
                echo "</tr>";

                foreach ($sujets as $sujet) {

                    $idEleve = $sujet -> getIdEleveSujet();
                    $eleveDAO = new eleveDAO();
                    $eleve = $eleveDAO -> find($idEleve);
                
                    $idStatut = $sujet -> getIdStatutSujet();
                    $statutDAO = new statutDAO();
                    $statut = $statutDAO -> find($idStatut);
                
                    $idProfesseur = $sujet -> getIdProfesseurSujet();
                    $professeurDAO = new professeurDAO();
                    $professeur = $professeurDAO -> find($idProfesseur);

                    $idEntreprise = $sujet -> getIdEntrepriseSujet();
                    $entrepriseDAO = new entrepriseDAO();
                    $entreprise = $entrepriseDAO -> find($idEntreprise);

                    $idContact = $sujet -> getIdContactSujet();
                    $contactDAO = new contactDAO();
                    $contact = $contactDAO -> find($idContact);

                        echo "<tr>";
                        echo "<td>". $sujet -> getDescriptifSujet() ."</td>";
                        echo "<td>". $sujet -> getDateDebut() ."</td>";
                        echo "<td>". $sujet -> getDateFin() ."</td>";
                        echo "<td>". $eleve -> getPrenomEleve() .' '. $eleve -> getNomEleve() ."</td>";
                        echo "<td>". $statut -> getLibelleStatut() ."</td>";
                        echo "<td>". $professeur -> getPrenomProfesseur() .' '. $professeur -> getNomProfesseur() ."</td>";
                        echo "<td>". $entreprise -> getDenomination() ."</td>";
                        echo "<td>". $contact -> getNomContact() .' '. $contact -> getPrenomContact() ."</td>";
                        echo '<td><a href="detailsSujet.php?idSujet='. $sujet -> getIdSujet() .'"> Détails </td>';
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