<?php

    include "../assets/include/global.inc.php";
    session_start();

    $idEntreprise = isset($_GET['idEntreprise']) ? $_GET['idEntreprise'] : "";
    $entrepriseDAO = new entrepriseDAO();
    $entreprise = $entrepriseDAO -> find($idEntreprise);

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

                <p>Données de l'entreprise <strong><?php echo "". $entreprise -> getDenomination() .""; ?></strong>.</p>
                
                <!-- Début du formulaire -->
                <form action="supprimerEntreprise.php?idEntreprise=<?php echo $entreprise -> getIdEntreprise(); ?>" method="post" class="formulaire">

                <p><input type="hidden" name="idEntreprise" value="<?php echo $entreprise -> getIdEntreprise(); ?>"/></p>
                <p> Nom : <strong> <?php echo $entreprise -> getDenomination(); ?> </strong></p>
                <p> Adresse : <strong> <?php echo $entreprise -> getAdresseEntreprise(); ?> </strong></p>
                <p> Code postal : <strong> <?php echo $entreprise -> getCp(); ?> </strong></p>
                <p> Ville : <strong> <?php echo $entreprise -> getVille(); ?> </strong></p>
                <p> Téléphone : <strong> <?php echo $entreprise -> getTelephoneEntreprise(); ?> </strong></p>
                <p> Fax : <strong> <?php echo $entreprise -> getFax(); ?> </strong></p>
                <p> Nombre de stage : <strong> <?php echo $entreprise -> getNombreStage(); ?> </strong></p>
            
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
                        $idEntreprise = $_POST['idEntreprise'];
    
                        $deleteEntreprise = new entrepriseDAO();
    
                        $deleteEntreprise -> deleteByIdEntreprise($idEntreprise);
                        header ("Location: consulterEntreprise.php");
                
                    }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>