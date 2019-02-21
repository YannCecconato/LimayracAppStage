<?php

    include "../assets/include/global.inc.php";
    session_start();

    $sujetDAO = new sujetDAO();
    $sujets = $sujetDAO -> findAll();

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

    $ressourceDAO = new ressourceDAO();
    $ressources = $ressourceDAO -> findAll();

    $utiliserDAO = new utiliserDAO();
    $utilisers = $utiliserDAO -> findAll();
    
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
                
                include "../assets/include/menuGestionSujet.php";
                
            ?>
                
            </div>
                <script type='text/javascript'>
    
                function getXhr(){
                                    var xhr = null; 
                    if(window.XMLHttpRequest) // Firefox et autres
                    xhr = new XMLHttpRequest(); 
                    else if(window.ActiveXObject){ // Internet Explorer 
                    try {
                                xhr = new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (e) {
                                xhr = new ActiveXObject("Microsoft.XMLHTTP");
                            }
                    }
                    else { // XMLHttpRequest non supporté par le navigateur 
                    alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
                    xhr = false; 
                    } 
                                    return xhr;
                }
    
                /**
                * Méthode qui sera appelée sur le click du bouton
                */
                function go(){
                    var xhr = getXhr();
                    // On défini ce qu'on va faire quand on aura la réponse
                    xhr.onreadystatechange = function(){
                        // On ne fait quelque chose que si on a tout reçu et que le serveur est ok
                        if(xhr.readyState == 4 && xhr.status == 200){
                            leselect = xhr.responseText;
                            // On se sert de innerHTML pour rajouter les options a la liste
                            document.getElementById('contact').innerHTML = leselect;
                        }
                    }
    
                    // Ici on va voir comment faire du post
                    xhr.open("POST","ajaxLivre.php",true);
                    // ne pas oublier ça pour le post
                    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                    // ne pas oublier de poster les arguments
                    // ici, l'id de l'auteur
                    sel = document.getElementById('entreprise');
                    idEntreprise = sel.options[sel.selectedIndex].value;
                    xhr.send("idEntreprise="+idEntreprise);
                }
            </script>
            <div id="contenu">

            <?php    

                /** Récupère les champs du formulaire */
                $submit = isset($_POST['submit']) ? $_POST['submit'] : "";

                if ($submit) {

                    /** Récupère les variables du formulaire */
                    $descriptifSujet = $_POST['descriptifSujet'];
                    $dateDebut = $_POST['dateDebut'];
                    $dateFin = $_POST['dateFin'];
                    $idEleveSujet = $_POST['idEleveSujet'];
                    $idRessourceUtiliser = $_POST['idRessourceUtiliser'];
                    $idStatutSujet = $_POST['idStatutSujet'];
                    $idProfesseurSujet = $_POST['idProfesseurSujet'];
                    $idEntrepriseSujet = $_POST['idEntrepriseSujet'];
                    $idContactSujet = $_POST['idContactSujet'];

                    $sujet = new SujetDAO();

                    /** Création d'un sujet */
                    $sujet -> insertionSujet($descriptifSujet, $dateDebut, $dateFin, $idEleveSujet, $idStatutSujet, $idProfesseurSujet, $idEntrepriseSujet, $idContactSujet);
                    $idSujet = $sujetDAO -> pdo -> lastInsertId();
                    var_dump($idSujet);

                    foreach ($ressources as $ressource) {

                        $utiliser = new UtiliserDAO();
                        $utiliser -> insertionUtiliser($idSujet, $idRessourceUtiliser);
                    
                    }

                    header ("Location: consulterSujet.php");
                                                
                }

            ?>

                <!-- Début du formulaire d'inscription de l'élève-->
                <form action="ajoutSujet.php" method="post" class="formulaire">

                    <p> Sujet du stage </p>  
                    <textarea name="descriptifSujet" rows="10" cols="50"></textarea>
                    <p> Date de début : <input type="date" name="dateDebut" /></p>
                    <p> Date de fin : <input type="date" name="dateFin" /></p>
                    <p> Si une donnée est manquante dans les choix ci-dessous, ajoutez-la ! </p>
                    <p> 
                        <select name="idEleveSujet">
                            <option value=""> Choissisez un élève </option>
                            <?php 
                                foreach ($eleves as $eleve) {

                                    echo '<option'.' value="'. $eleve -> getIdEleve() .'"'.''.'>'. $eleve -> getPrenomEleve() ." ".  $eleve -> getNomEleve() .'</option>';

                                }
                            ?>
                        </select>
                    </p>
                    <p> Veuillez sélectionner la(les) ressource(s) utilisée(s) : </p>
                    <p>
                        <?php
                            foreach ($ressources as $ressource) {

                                echo '<input type="checkbox" id="'. $ressource -> getIdRessource() .'" name="idRessourceUtiliser" value="'. $ressource -> getIdRessource() .'">';
                                echo '<label for="'. $ressource -> getIdRessource() .'">'. $ressource -> getLibelleRessource() .'</label>';
                            
                            }
                        ?>
                    </p>
                    <p> 
                        <select name="idStatutSujet">
                            <option value=""> Choissisez un statut </option>
                            <?php 
                                foreach ($status as $statut) {

                                    echo '<option'.' value="'. $statut -> getIdStatut() .'"'.''.'>'. $statut -> getLibelleStatut() .'</option>';

                                }
                            ?>
                        </select>
                    </p>
                    <p> 
                        <select name="idProfesseurSujet">
                            <option value=""> Choissisez un professeur </option>
                            <?php 
                                foreach ($professeurs as $professseur) {

                                    echo '<option'.' value="'. $professseur -> getIdProfesseur() .'"'.''.'>'. $professseur -> getPrenomProfesseur() ." ". $professseur -> getNomProfesseur() .'</option>';

                                }
                            ?>
                        </select>
                    </p>
                    <p> 
                        <select name="idEntrepriseSujet">
                            <option value=""> Choissisez une entreprise </option>
                            <?php
                                foreach ($entreprises as $entreprise) {

                                    echo "<option value='". $entreprise -> getIdEntreprise() ."'>". $entreprise -> getDenomination() ."</option>";

                                }
                            ?>
                        </select>
                    </p>
                    <p>
                        <select name="idContactSujet">
                            <option value=""> Choissisez un contact </option>
                            <?php
                                foreach ($contacts as $contact) {

                                    echo '<option'.' value="'. $contact -> getIdContact() .'"'.''.'>'. $contact -> getPrenomContact() ." ". $contact -> getNomContact() .'</option>';                           

                                }
                            ?>
                        </select>
                    </p>
                    <p><input type="submit" name="submit" value="Ajouter" /><input type="reset" value="Réinitialiser"></p>

                </form>
                <!-- Fin du formulaire d'inscription de l'élève-->

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>