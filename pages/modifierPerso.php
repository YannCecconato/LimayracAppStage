<?php

    include "../assets/include/global.inc.php";
    session_start();
    
    $emailProfesseur = $_SESSION['email'];
    $professeurDAO = new professeurDAO();
    $professeur = $professeurDAO -> findByEmailProfesseur($emailProfesseur);

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
            <div>
                
            </div>
            <div id="contenu">

                <?php var_dump($professeur); ?>
                
                <p>Vous pouvez, si vous le souhaitez, modifier vos informations dans le formulaire ci-dessous.</p>
                
                <!-- Début du formulaire -->
                <form action="modifierPerso.php" method="post" class="formulaire">

                <p><input type="hidden" name="idProfesseur" values="<?php echo $professeur -> getIdProfesseur(); ?>" /></p>
                <p>Nom : <input type="text" name="nom" value="<?php echo $professeur -> getNomProfesseur(); ?>" /></p>
                <p>Prénom : <input type="text" name="prenom" value="<?php echo $professeur -> getPrenomProfesseur(); ?>"/></p>
                <p>Sexe : <select name="libelleGenreProfesseur">
                <?php 

                    foreach ($genres as $genre) {

                        if ($professeur -> getLibelleGenreProfesseur() == $genre -> getLibelleGenre()) {

                            echo '<option'.' value="'. $genre -> getLibelleGenre() .'"'.' selected="selected"'.'>'. $genre -> getLibelleGenre() .'</option>';

                        } else {

                            echo '<option'.' value="'. $genre -> getLibelleGenre() .'"'.'>'. $genre -> getLibelleGenre() .'</option>';

                        }

                    }
                
                ?></select></p>
                <p>Téléphone : <input type="text" name="phone" value="<?php echo $professeur -> getTelephoneProfesseur(); ?>"/></p>
                <p>Adresse mail : <input type="text" name="email" value="<?php echo $professeur -> getEmailProfesseur(); ?>"/></p>
                <p><input type="submit" name="submit" value="Modifier" /></p>

                </form>
                <!-- Fin du formulaire -->
                
                <?php

                /** Récupère les champs du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                
                if ($submit) {

                    /** Récupère les variables du formulaire */
                    $idProfesseur = $_POST['idProfesseur'];
                    $nomProfesseur = $_POST['nom'];
                    $prenomProfesseur = $_POST['prenom'];
                    $telephoneProfesseur = $_POST['phone'];
                    $emailProfesseur = $_SESSION['email'];
                    $libelleGenreProfesseur = $_POST['libelleGenreProfesseur'];

                    $updateprofesseur = new professeurDAO();
    
                    $updateprofesseur -> updateByEmailProfesseur($nomProfesseur, $prenomProfesseur, $telephoneProfesseur, $emailProfesseur, $libelleGenreProfesseur);
                    header ("Location: information.php");

                    }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>