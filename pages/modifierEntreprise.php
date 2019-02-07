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

            <div id="contenu">

                <p>Vous pouvez, si vous le souhaitez, modifier les informations de l'entreprise <strong><?php echo "". $entreprise -> getDenomination() ; ?></strong> dans le formulaire ci-dessous.</p>
                
                <!-- Début du formulaire -->
                <form action="modifierEntreprise.php?idEntreprise=<?php echo $entreprise -> getIdEntreprise(); ?>" method="post" class="formulaire">

                <p><input type="hidden" name="idEntreprise" value="<?php $entreprise -> getIdEntreprise(); ?>"/></p>
                <p>Nom : <input type="text" name="denomination" value="<?php echo $entreprise -> getDenomination(); ?>" /></p>
                <p>Adresse : <input type="text" name="adresse" value="<?php echo $entreprise -> getAdresseEntreprise(); ?>"/></p>
                <p>Code postal : <input type="text" name="cp" value="<?php echo $entreprise -> getCp(); ?>"/></p>
                <p>Ville : <input type="text" name="ville" value="<?php echo $entreprise -> getVille(); ?>"/></p>
                <p>Téléphone : <input type="text" name="phone" value="<?php echo $entreprise -> getTelephoneEntreprise(); ?>"/></p>
                <p>Fax : <input type="text" name="fax" value="<?php echo $entreprise -> getFax(); ?>"/></p>
                <p>Nombre de stages : <input type="text" name="nbStage" value="<?php echo $entreprise -> getNombreStage(); ?>"
                <p><input type="submit" name="submit" value="Modifier" /></p>

                </form>
                <!-- Fin du formulaire -->
                
                <?php

                /** Récupère le champ "submit" du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                
                if ($submit) {

                    /** Récupère les variables du formulaire */
                    $idEntreprise = $_POST['idEntreprise'];
                    $denomination = $_POST['denomination'];
                    $adresseEntreprise = $_POST['adresse'];
                    $cp = $_POST['cp'];
                    $ville = $_POST['ville'];
                    $phone = $_POST['phone'];
                    $fax = $_POST['fax'];
                    $nbStage = $_POST['nbStage'];

                    $updateEntreprise = new entrepriseDAO();
    
                    $updateEntreprise -> updateByIdEntreprise($idEntreprise, $denomination, $adresseEntreprise, $cp, $ville, $telephoneEntreprise, $fax, $nbStage);
                    header ("Location: consulterEntreprise.php");

                    }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>