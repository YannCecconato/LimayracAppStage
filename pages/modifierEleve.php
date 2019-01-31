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

                <p>Vous pouvez, si vous le souhaitez, modifier les informations de <?php echo "". $eleve -> getNomEleve() ." ". $eleve -> getPrenomEleve() .""; ?> dans le formulaire ci-dessous.</p>
                
                <!-- Début du formulaire -->
                <form action="modifierEleve.php" method="post" class="formulaire">

                <p>Nom : <input type="text" name="nom" value="<?php echo $eleve -> getNomEleve(); ?>" /></p>
                <p>Prénom : <input type="text" name="prenom" value="<?php echo $eleve -> getPrenomEleve(); ?>"/></p>
                <p>Sexe : <input type="text" name="genre" value="<?php echo $eleve -> getGenreEleve(); ?>"/></p>
                <p>Adresse : <input type="text" name="adresse" value="<?php echo $eleve -> getAdresseEleve(); ?>"/></p>
                <p>Téléphone : <input type="text" name="phone" value="<?php echo $eleve -> getTelephoneEleve(); ?>"/></p>
                <p>Adresse mail : <input type="text" name="email" value="<?php echo $eleve -> getEmailEleve(); ?>"/></p>
                <p>Option : <input type="text" name="option" value="<?php echo $eleve -> getOptionEleve(); ?>"/></p>
                <p>Cursus : <input type="text" name="cursus" value="<?php echo $eleve -> getLibelleCursusEleve(); ?>"/></p>
                <p><input type="submit" name="submit" value="Modifier" /></p>

                </form>
                <!-- Fin du formulaire -->
                
                <?php

                /** Récupère les champs du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                
                if ($submit) {

                    /** Récupère les variables du formulaire */
                    $nomEleve = $_POST['nom'];
                    $prenomEleve = $_POST['prenom'];
                    $genreEleve = $_POST['genre'];
                    $adresseEleve = $_POST['adresse'];
                    $telephoneEleve = $_POST['phone'];
                    $emailEleve = $_POST['email'];
                    $optionEleve = $_POST['option'];
                    $libelleCursusEleve = $_POST['cursus'];

                    $updateEleve = new eleveDAO();
    
                        $updateEleve -> updateByEmailEleve($prenomEleve, $nomEleve, $genreEleve, $adresseEleve, $telephoneEleve, $emailEleve, $optionEleve, $libelleCursusEleve);
                        header ("Location: consulterEleve.php");

                    }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>