<?php

    include "../assets/include/global.inc.php";
    session_start();

    $idRessource = isset($_GET['idRessource']) ? $_GET['idRessource'] : "";
    $ressourceDAO = new ressourceDAO();
    $ressource = $ressourceDAO -> find($idRessource);

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
                
                <!-- Début du formulaire -->
                <form action="supprimerRessource.php?idRessource=<?php echo $ressource -> getIdRessource(); ?>" method="post" class="formulaire">

                <p><input type="hidden" name="idRessource" value="<?php echo $ressource -> getIdRessource(); ?>"/></p>
                <p> Nom : <strong> <?php echo $ressource -> getLibelleRessource(); ?> </strong></p>
                <p> Adresse : <strong> <?php echo $ressource -> getTypeRessource(); ?> </strong></p>
            
                <p><input type="submit" name="submit" value="Supprimer" /></p>

                </form>
                <!-- Fin du formulaire -->
                
                <?php

                /** Récupère les champs du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";

                    if ($submit) {

                        /** Récupère les variables du formulaire */
                        $idRessource = $_POST['idRessource'];
    
                        $deleteRessource = new ressourceDAO();
    
                        $deleteRessource -> deleteByIdRessource($idRessource);
                        header ("Location: consulterRessource.php");
                
                    }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>