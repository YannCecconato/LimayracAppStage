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
            <div id="contenu">

                <!-- Début du formulaire d'inscription de l'élève-->
                <form action="ajoutRessource.php" method="post" class="formulaire">

                    <p>Nom : <input type="text" name="libelleRessource"/></p>
                    <p>
                        <select name="typeRessource">
                            <option value=""> Choisissez un type </option>
                            <option value="Materielle"> Materielle </option>
                            <option value="Logicielle"> Logicielle </option>
                        </select>
                    </p>        
                    <p><input type="submit" name="submit" value="Ajouter" /><input type="reset" value="Réinitialiser"></p>

                </form>
                <!-- Fin du formulaire d'inscription de l'élève-->

                <?php    

                    /** Récupère le champ "submit" du formulaire */
                    $submit = isset($_POST['submit']) ? $_POST['submit'] : "";

                    if ($submit) {

                            /** Récupère les variables du formulaire */
                            $libelleRessource = $_POST['libelleRessource'];
                            $typeRessource = $_POST['typeRessource'];

                            $ressource = new RessourceDAO();

                            /** Création d'une entreprise */
                            $ressource -> insertionRessource($libelleRessource, $typeRessource);
                            header ("Location: consulterRessource.php"); 

                    }

                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>