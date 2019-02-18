<?php

    include "../assets/include/global.inc.php";
    session_start();

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
                
                include "../assets/include/menuGestionEntreprise.php";
                
            ?>

            </div>
            <div id="contenu">

                <!-- Début du formulaire d'inscription de l'élève-->
                <form action="ajoutEntreprise.php" method="post" class="formulaire">

                    <p>Dénomination : <input type="text" name="denomination" required /></p>
                    <p>Adresse : <input type="text" name="adresse" required/></p>   
                    <p>Code postal : <input type="text" name="cp" required/></p> 
                    <p>Ville : <input type="text" name="ville" required/></p>
                    <p>Numéro de téléphone : <input type="text" name="telephoneEntreprise"/></p>
                    <p>Fax : <input type="text" name="fax" /></p>
                    <p>Nombre de stage(s) accepté(s) : <input type="text" name="nbStage" /></p>  
                    <p><input type="submit" name="submit" value="Inscrire" /><input type="reset" value="Réinitialiser"></p>

                </form>
                <!-- Fin du formulaire d'inscription de l'élève-->

                <?php    

                    /** Récupère le champ "submit" du formulaire */
                    $submit = isset($_POST['submit']) ? $_POST['submit'] : "";

                    if ($submit) {

                            /** Récupère les variables du formulaire */
                            $denomination = $_POST['denomination'];
                            $adresseEntreprise = $_POST['adresse'];
                            $cp = $_POST['cp'];
                            $ville = $_POST['ville'];
                            $telephoneEntreprise = $_POST['telephoneEntreprise'];
                            $fax = $_POST['fax'];
                            $nbStage = $_POST['nbStage'];

                            $entreprise = new EntrepriseDAO();

                            /** Création d'une entreprise */
                            $entreprise -> insertionEntreprise($denomination, $adresseEntreprise, $cp, $ville, $telephoneEntreprise, $fax, $nbStage);
                            $_SESSION['nbStage'] = $nbStage;
                            header ("Location: consulterEntreprise.php");

                    }

                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>