<?php

    include "../assets/include/global.inc.php";
    session_start();
    
    /** isset : Détermine si "submit" est une variable définie */
    if (isset($submit)) {

        $idProfesseur = $_SESSION['idProfesseur'];

    } else {

        $idProfesseur = isset($_GET['idProfesseur']) ? $_GET['idProfesseur'] : "";
        $_SESSION['idProfesseur'] = $idProfesseur;

    }
    
    $professeurDAO = new professeurDAo();
    $professeur = $professeurDAO -> find($idProfesseur);

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

                <p>Données du professeur <?php echo "". $professeur -> getNomProfesseur() ." ". $professeur -> getPrenomProfesseur() .""; ?>.</p>
                
                <!-- Début du formulaire -->
                <form action="modifierProfesseur.php" method="post" class="formulaire">

                <p> Nom : <strong> <?php echo $professeur -> getNomProfesseur(); ?> </strong></p>
                <p> Prénom : <strong> <?php echo $professeur -> getPrenomProfesseur(); ?> </strong></p>
                <p> Sexe : <strong> <?php echo $professeur -> getGenreProfesseur(); ?> </strong></p>
                <p> Téléphone : <strong> <?php echo $professeur -> getTelephoneProfesseur(); ?> </strong></p>
                <p> Mail : <strong> <?php echo $professeur -> getEmailProfesseur(); ?> </strong></p>
                <p><input type="submit" name="submit" value="Supprimer" /></p>

                </form>
                <!-- Fin du formulaire -->
                
                <?php

                /** Récupère les champs du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                
                if ($submit) {

                    

                    }
                    if ($submit) {

                        /** Récupère les variables du formulaire */
                        $nomProfesseur = $_POST['nom'];
                        $prenomProfesseur = $_POST['prenom'];
                        $genreProfesseur = $_POST['genre'];
                        $telephoneProfesseur = $_POST['phone'];
                        $emailProfesseur = $_POST['email'];
    
                        $deleteProfesseur = new professeurDAO();
    
                        $deleteProfesseur -> delete($idProfesseur);
                        header ("Location: consulterProfesseur.php");
                
                    }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>