<?php

    include "../assets/include/global.inc.php";
    session_start();

    $cursusDAO = new cursusDAO();
    $cursuss = $cursusDAO -> findAll();

    $eleveDAO = new eleveDAO();
    $eleves = $eleveDAO -> findAll();

    $statutDAO = new statutDAO();
    $status = $statutDAO -> findAll();

    $professeurDAO = new professeurDAO();
    $professeurs = $professeurDAO -> findAll();

    $entrepriseDAO = new entrepriseDAO();
    $entreprises = $entrepriseDAO -> findAll();

    $contactDAO = new contactDAO();
    $contacts = $contactDAO -> findAll();
    
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

                <!-- Début du formulaire d'inscription de l'élève-->
                <form action="ajoutSujet.php" method="post" class="formulaire">

                    <p> Sujet du stage </p>  
                    <textarea name="descriptifSujet" rows="10" cols="50"></textarea>
                    <p> Date de début : <input type="date" name="dateDebut" /></p>
                    <p> Date de fin : <input type="date" name="dateFin" /></p>
                    <p> Si une donnée est manquante dans les choix ci-dessous, ajoutez-les ! </p>
                    <p> 
                        <select name="idEleveSujet">
                            <option value=""> Choissisez un élève </option>
                            <?php 
                                foreach($eleves as $eleve) {

                                    echo '<option'.' value="'. $eleve -> getIdEleve() .'"'.''.'>'. $eleve -> getPrenomEleve() ." ".  $eleve -> getNomEleve() .'</option>';

                                }
                            ?> 
                        </select>
                    </p>
                    <p> 
                        <select name="idStatutSujet">
                            <option value=""> Choissisez un statut </option>
                            <?php 
                                foreach($status as $statut) {

                                    echo '<option'.' value="'. $statut -> getIdStatut() .'"'.''.'>'. $statut -> getLibelleStatut() .'</option>';

                                }
                            ?> 
                        </select>
                    </p>
                    <p> 
                        <select name="idProfesseurSujet">
                            <option value=""> Choissisez un professeur </option>
                            <?php 
                                foreach($professeurs as $professseur) {

                                    echo '<option'.' value="'. $professseur -> getIdProfesseur() .'"'.''.'>'. $professseur -> getPrenomProfesseur() ." ". $professseur -> getNomProfesseur() .'</option>';

                                }
                            ?> 
                        </select>
                    </p>
                    <p> 
                        <select name="idEntrepriseSujet">
                            <option value=""> Choissisez une entreprise </option>
                            <?php 

                                foreach($entreprises as $entreprise) {

                                    echo '<option'.' value="'. $entreprise -> getIdEntreprise() .'"'.''.'>'. $entreprise -> getDenomination() .'</option>';

                                }
                            ?>
                        </select>
                    </p>
                    <p>
                        <select name="idContactSujet">
                            <option value=""> Choissisez un contact </option>
                            <?php
                                
                                foreach($contacts as $contact) {

                                    echo '<option'.' value="'. $contact -> getIdContact() .'"'.''.'>'. $contact -> getPrenomContact() ." ". $contact -> getNomContact() .'</option>';

                                }
                            ?> 
                        </select>
                    </p>
                    <p><input type="submit" name="submit" value="Inscrire" /><input type="reset" value="Réinitialiser"></p>

                </form>
                <!-- Fin du formulaire d'inscription de l'élève-->

                <?php    

                    /** Récupère les champs du formulaire */
                    $submit = isset($_POST['submit']) ? $_POST['submit'] : "";

                    if ($submit) {

                            /** Récupère les variables du formulaire */
                            $descriptifSujet = $_POST['descriptifSujet'];
                            $dateDebut = $_POST['dateDebut'];
                            $dateFin = $_POST['dateFin'];
                            $idEleveSujet = $_POST['idEleveSujet'];
                            $idStatutSujet = $_POST['idStatutSujet'];
                            $idProfesseurSujet = $_POST['idProfesseurSujet'];
                            $idEntrepriseSujet = $_POST['idEntrepriseSujet'];
                            $idContactSujet = $_POST['idContactSujet'];

                            $sujet = new SujetDAO();

                            /** Création d'un sujet */
                            $sujet -> insertionSujet($descriptifSujet, $dateDebut, $dateFin, $idEleveSujet, $idStatutSujet, $idProfesseurSujet, $idEntrepriseSujet, $idContactSujet);
                            header ("Location: consulterSujet.php");
                                                    
                    }

                ?>

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>