<?php

    include "../assets/include/global.inc.php";
    session_start();
    
    $emailProfesseur = $_SESSION['email'];
    $professeurDAO = new professeurDAO();
    $professeur = $professeurDAO -> findByEmailProfesseur($emailProfesseur);

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

                <p>Vous pouvez, si vous le souhaitez, modifier vos informations dans le formulaire ci-dessous.</p>
                
                <!-- Début du formulaire -->
                <form action="modifierPerso.php" method="post" class="formulaire">

                <p>Nom : <input type="text" name="nom" value="<?php echo $professeur -> getNomProfesseur(); ?>" /></p>
                <p>Prénom : <input type="text" name="prenom" value="<?php echo $professeur -> getPrenomProfesseur(); ?>"/></p>
                <p>Sexe : <input type="text" name="genre" value="<?php echo $professeur -> getGenreProfesseur(); ?>"/></p>
                <p>Téléphone : <input type="text" name="phone" value="<?php echo $professeur -> getTelephoneProfesseur(); ?>"/></p>
                <p>Adresse mail : <input type="text" name="email" value="<?php echo $professeur -> getEmailProfesseur(); ?>" disabled/></p>
                <p>Ancien mot de passe : <input type="password" name="password"/></p>
                <p>Confirmation ancien mot de passe : <input type="password" name="verifoldpassword"/></p>
                <p>Nouveau mot de passe : <input type="password" name="newpassword"/></p>
                <p>Confirmation nouveau mot de passe : <input type="password" name="verifpassword"/></p>
                <p><input type="submit" name="submit" value="Modifier" /></p>

                </form>
                <!-- Fin du formulaire -->
                
                <?php

                /** Récupère les champs du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
                
                if ($submit) {

                    /** Récupère les variables du formulaire */
                    $nomProfesseur = $_POST['nom'];
                    $prenomProfesseur = $_POST['prenom'];
                    $genreProfesseur = $_POST['genre'];
                    $telephoneProfesseur = $_POST['phone'];
                    $emailProfesseur = $_SESSION['email'];
                    $password = $_POST['password'];
                    $verifoldpassword = $_POST['verifoldpassword'];
                    $newpassword = $_POST['newpassword'];
                    $verifpassword = $_POST['verifpassword'];

                    $updateprofesseur = new professeurDAO();

                        if ($password == $verifoldpassword) {

                            if ($newpassword == $verifpassword) { /** Si le nouveau mot de passe et la vérification de celui-ci sont identiques */

                            $newpassword = password_hash($newpassword, PASSWORD_BCRYPT); /** Hachage du mot de passe */
                            $verifpassword = password_hash($verifpassword, PASSWORD_BCRYPT); /** Hachage du mot de passe */
    
                            $updateprofesseur -> updateByEmailProfesseur($nomProfesseur, $prenomProfesseur, $genreProfesseur, $telephoneProfesseur, $emailProfesseur, $verifpassword);
                            header ("Location: information.php");
    
                            } else { /** Sinon erreur */
    
                                echo '<p class="erreur">Les 2 nouveaux mots de passe ne sont pas identiques.</p>';
    
                            }

                        } else { /** Sinon erreur */

                            echo '<p class="erreur">Les 2 anciens mots de passe ne sont pas identiques.</p>';

                        }

                    }
                
                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>