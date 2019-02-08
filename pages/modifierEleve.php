<?php

    include "../assets/include/global.inc.php";
    session_start();
    

    $idEleve = isset($_GET['idEleve']) ? $_GET['idEleve'] : "";
    $eleveDAO = new eleveDAO();
    $eleve = $eleveDAO -> find($idEleve);

    $cursusDAO = new cursusDAO();
    $cursuss = $cursusDAO -> findAll();

    $optionDAO = new optionDAO();
    $options = $optionDAO -> findAll();

    $genreDAO = new genreDAO();
    $genres = $genreDAO -> findAll();

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

                <p>Vous pouvez, si vous le souhaitez, modifier les informations de <?php echo "". $eleve -> getNomEleve() ." ". $eleve -> getPrenomEleve() .""; ?> dans le formulaire ci-dessous.</p>
                
                <!-- Début du formulaire -->
                <form action="modifierEleve.php?idEleve=<?php echo $eleve -> getIdEleve(); ?>" method="post" class="formulaire">

                <p><input type="hidden" name="idEleve" value="<?php echo $eleve -> getIdEleve(); ?>"/></p>
                <p>Nom : <input type="text" name="nom" value="<?php echo $eleve -> getNomEleve(); ?>" /></p>
                <p>Prénom : <input type="text" name="prenom" value="<?php echo $eleve -> getPrenomEleve(); ?>"/></p>
                <p>Genre : <select name="libelleGenreEleve"> 
                <?php 

                    foreach ($genres as $genre) {

                        if ($eleve -> getLibelleGenreEleve() == $genre -> getLibelleGenre()) {

                            echo '<option'.' value="'. $genre -> getLibelleGenre() .'"'.' selected="selected"'.'>'. $genre -> getLibelleGenre() .'</option>';

                        } else {

                            echo '<option'.' value="'. $genre -> getLibelleGenre() .'"'.'>'. $genre -> getLibelleGenre() .'</option>';
                            
                        }

                    }

                ?>
                </select></p>
                <p>Adresse : <input type="text" name="adresse" value="<?php echo $eleve -> getAdresseEleve(); ?>"/></p>
                <p>Téléphone : <input type="text" name="phone" value="<?php echo $eleve -> getTelephoneEleve(); ?>"/></p>
                <p>Adresse mail : <input type="text" name="email" value="<?php echo $eleve -> getEmailEleve(); ?>"/></p>
                <p>Cursus : <select name="libelleCursusEleve"> 
                <?php 

                    foreach ($cursuss as $cursus) {

                        if ($eleve -> getLibelleCursusEleve() == $cursus -> getLibelleCursus()) {

                            echo '<option'.' value="'. $cursus -> getLibelleCursus() .'"'.' selected="selected"'.'>'. $cursus -> getLibelleCursus() .'</option>';

                        } else {

                            echo '<option'.' value="'. $cursus -> getLibelleCursus() .'"'.'>'. $cursus -> getLibelleCursus() .'</option>';
                            
                        }

                    }

                ?>
                </select></p>
                <p>Option : <select name="libelleOptionEleve"> 
                <?php 

                    foreach ($options as $option) {

                        if ($eleve -> getLibelleOptionEleve() == $option -> getLibelleOption()) {

                            echo '<option'.' value="'. $option -> getLibelleOption() .'"'.' selected="selected"'.'>'. $option -> getLibelleOption() .'</option>';

                        } else {

                            echo '<option'.' value="'. $option -> getLibelleOption() .'"'.'>'. $option -> getLibelleOption() .'</option>';
                            
                        }

                    }

                ?>
                </select></p>
                <p><input type="submit" name="submit" value="Modifier" /></p>

                </form>
                <!-- Fin du formulaire -->
                
                <?php

                /** Récupère le champ "submit" du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                
                if ($submit) {

                    /** Récupère les variables du formulaire */
                    $idEleve = $_POST['idEleve'];
                    $prenomEleve = $_POST['prenom'];
                    $nomEleve = $_POST['nom'];
                    $adresseEleve = $_POST['adresse'];
                    $telephoneEleve = $_POST['phone'];
                    $emailEleve = $_POST['email'];
                    $libelleOptionEleve = $_POST['libelleOptionEleve'];
                    $libelleCursusEleve = $_POST['libelleCursusEleve'];
                    $libelleGenreEleve = $_POST['libelleGenreEleve'];

                    $updateEleve = new eleveDAO();
    
                    $updateEleve -> updateByIdEleve($idEleve, $prenomEleve, $nomEleve, $adresseEleve, $telephoneEleve, $emailEleve, $libelleOptionEleve, $libelleCursusEleve,  $libelleGenreEleve);
                    header ("Location: consulterEleve.php");

                }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>