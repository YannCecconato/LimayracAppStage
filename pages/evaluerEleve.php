<?php

    include "../assets/include/global.inc.php";
    date_default_timezone_set('UTC');
    session_start();

    $emailProfesseur = $_SESSION['email'];
    $professeurDAO = new professeurDAO();
    $professeur = $professeurDAO -> findByEmailProfesseur($emailProfesseur);

    $idEleve = isset($_GET['idEleve']) ? $_GET['idEleve'] : "";
    $eleveDAO = new eleveDAO();
    $eleve = $eleveDAO -> find($idEleve);

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

                <title>Évaluation</title>

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
                <p> Évaluation du stage de <strong><?php echo $eleve -> getNomEleve(); ?> <?php echo $eleve -> getPrenomEleve(); ?></strong></p>

                <table>
                <strong>Informations du professeur : </strong>
                <tr>
                    <th>Nom et prénom du professeur</th>
                    <td><?php echo $professeur -> getNomProfesseur(); ?></td>
                    <td><?php echo $professeur -> getPrenomProfesseur(); ?></td>
                </tr>
                <tr>
                    <th>Date du jour</th>
                    <td><?php echo date('jS l F Y'); ?></td>
                </tr>
                </table>

                <table>
                <strong>Informations de l'élève : </strong>
                <tr>
                    <th>Nom et prénom de l'élève</th>
                    <td><?php echo $eleve -> getNomEleve(); ?></td>
                    <td><?php echo $eleve -> getPrenomEleve(); ?></td>
                </tr>
                </table>


                <?php

                ?> 

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>