<?php

    include "../assets/include/global.inc.php";
    session_start();

    $emailProfesseur = $_SESSION['email'];
    $professeurDAO = new professeurDAO();
    $professeur = $professeurDAO -> findByEmailProfesseur($emailProfesseur);

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

                <p>Vous retrouverez, ci-dessous, toutes les informations relatives à votre compte.</p>
                
                <!-- Début du formulaire -->
                <form action="information.php" method="post" class="formulaire">

                    <p> Nom : <strong> <?php echo $professeur -> getNomProfesseur(); ?> </strong></p>
                    <p> Prénom : <strong> <?php echo $professeur -> getPrenomProfesseur(); ?> </strong></p>
                    <p> Sexe : <strong> <?php echo $professeur -> getLibelleGenreProfesseur(); ?> </strong></p>    
                    <p> Téléphone : <strong> <?php echo $professeur -> getTelephoneProfesseur(); ?> </strong></p>
                    <p> Adresse mail : <strong> <?php echo $_SESSION['email'] ?> </strong></p>
                    <p> Qualité : <strong> <?php if ($_SESSION['idQualiteProfesseur'] == 1) {

                                                    echo "Responsable de Section";

                                                 } else {

                                                     echo "Professeur référent";

                                                 }
                    
                    ?> </strong> </p>

                </form>
                <!-- Fin du formulaire -->

                <?php
                
                ?>

            </div> 
            <div id="piedpage">

                <a href="modifierPerso.php" class="modif_infos"> 
                    <button class="button">
                        Vous souhaitez modifier vos <strong>INFORMATIONS</strong> ? <br/>Cliquez ici 
                    </button>
                </a>

            </div>       
        </div>
            
    </body>
</html>