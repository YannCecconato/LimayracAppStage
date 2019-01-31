<?php

    include "../assets/include/global.inc.php";
    session_start();
    
    $idEleve = isset($_GET['idEleve']) ? $_GET['idEleve'] : "";
    $eleveDAO = new eleveDAO();
    $eleve = $eleveDAO -> findByIdEleve($idEleve);

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

                <p>Données de l'élève <?php echo "". $eleve -> getNomEleve() ." ". $eleve -> getPrenomEleve() .""; ?>.</p>
                
                <!-- Début du formulaire -->
                <form action="modifierEleve.php" method="post" class="formulaire">

                <p> Nom : <strong> <?php echo $eleve -> getNomEleve(); ?> </strong></p>
                <p> Prénom : <strong> <?php echo $eleve -> getPrenomEleve(); ?> </strong></p>
                <p> Sexe : <strong> <?php echo $eleve -> getGenreEleve(); ?> </strong></p>
                <p> Adresse : <strong> <?php echo $eleve -> getAdresseEleve(); ?> </strong></p>
                <p> Téléphone : <strong> <?php echo $eleve -> getTelephoneEleve(); ?> </strong></p>
                <p> Mail : <strong> <?php echo $eleve -> getEmailEleve(); ?> </strong></p>
                <p> Option : <strong> <?php echo $eleve -> getOptionEleve(); ?> </strong></p>
                <p> Cursus : <strong> <?php echo $eleve -> getLibelleCursusEleve(); ?> </strong></p>
                <p><input type="submit" name="submit" value="Supprimer" /></p>

                </form>
                <!-- Fin du formulaire -->
                
                <?php

                /** Récupère les champs du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                
                if ($submit) {

                    $deleteEleve = new eleveDAO();
    
                        $deleteEleve -> delete($idEleve);
                        header ("Location: consulterEleve.php");

                    }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>