<?php

    include "../assets/include/global.inc.php";
    session_start();


    $idEleve = isset($_GET['idEleve']) ? $_GET['idEleve'] : "";

    $eleveDAO = new eleveDAO();
    $eleve = $eleveDAO -> find($idEleve);

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
                <form action="supprimerEleve.php?idEleve=<?php echo $eleve -> getIdEleve(); ?>" method="post" class="formulaire">

                <p><input type="hidden" name="idEleve" value="<?php echo $eleve -> getIdEleve(); ?>"/></p>
                <p> Nom : <strong> <?php echo $eleve -> getNomEleve(); ?> </strong></p>
                <p> Prénom : <strong> <?php echo $eleve -> getPrenomEleve(); ?> </strong></p>
                <p> Sexe : <strong> <?php echo $eleve -> getLibelleGenreEleve(); ?> </strong></p>
                <p> Adresse : <strong> <?php echo $eleve -> getAdresseEleve(); ?> </strong></p>
                <p> Téléphone : <strong> <?php echo $eleve -> getTelephoneEleve(); ?> </strong></p>
                <p> Mail : <strong> <?php echo $eleve -> getEmailEleve(); ?> </strong></p>
                <p> Option : <strong> <?php echo $eleve -> getLibelleOptionEleve(); ?> </strong></p>
                <p> Cursus : <strong> <?php echo $eleve -> getLibelleCursusEleve(); ?> </strong></p>
                <p><input type="submit" name="submit" value="Supprimer" /></p>

                </form>
                <!-- Fin du formulaire -->
                
                <?php

                /** Récupère les champs du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                
                if ($submit) {

                    /** Récupère les variables du formulaire */
                    $idEleve = $_POST['idEleve'];
    
                    $deleteEleve = new eleveDAO();
    
                    $deleteEleve -> deleteByIdEleve($idEleve);
                    header ("Location: consulterEleve.php");
                
                }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>