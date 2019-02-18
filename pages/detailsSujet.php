<?php

    include "../assets/include/global.inc.php";
    date_default_timezone_set('UTC');
    session_start();

    $idSujet = isset($_GET['idSujet']) ? $_GET['idSujet'] : "";
    $sujetDAO = new sujetDAO();
    $sujet = $sujetDAO -> find($idSujet);

    $idEleve = $sujet -> getIdEleveSujet();
    $eleveDAO = new eleveDAO();
    $eleve = $eleveDAO -> find($idEleve);
                
    $idProfesseur = $sujet -> getIdProfesseurSujet();
    $professeurDAO = new professeurDAO();
    $professeur = $professeurDAO -> find($idProfesseur);

    $idEntreprise = $sujet -> getIdEntrepriseSujet();
    $entrepriseDAO = new entrepriseDAO();
    $entreprise = $entrepriseDAO -> find($idEntreprise);

    $idContact = $sujet -> getIdContactSujet();
    $contactDAO = new contactDAO();
    $contact = $contactDAO -> find($idContact);

    $idUtiliser = $sujet -> getIdSujet();
    $utiliserDAO = new utiliserDAO();
    $utiliser = $utiliserDAO -> find($idUtiliser);

    $ressourceDAO = new ressourceDAO();
    $ressources = $ressourceDAO -> findAllByIdUtiliser($idUtiliser);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

                <title>Évaluation</title>

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
                <p> Évaluation du stage de <strong><?php echo $eleve -> getPrenomEleve() ?> <?php echo $eleve -> getNomEleve(); ?></strong></p>

                <table>
                <strong>Informations du professeur : </strong>
                <tr>
                    <th>Nom et prénom : </th>
                        <td><?php echo $professeur -> getPrenomProfesseur(); ?> <?php echo $professeur -> getNomProfesseur() ?></td>
                </tr>
                <tr>
                    <th>Date du jour</th>
                        <td><?php echo date('jS l F Y'); ?></td>
                </tr>
                </table>

                <table>
                <strong> Informations de l'élève : </strong>
                <tr>
                    <th> Nom et prénom :</th>
                        <td><?php echo $eleve -> getPrenomEleve(); ?> <?php echo $eleve -> getNomEleve(); ?></td>
                </tr>
                </table>

                <table>
                <strong> Informations de l'entreprise : </strong>
                <tr>
                    <th> Dénomination : </th>
                        <td><?php echo $entreprise -> getDenomination(); ?></td>
                </tr>
                <tr>
                    <th> Adresse : </th>
                        <td><?php echo $entreprise -> getAdresseEntreprise(); ?></td>
                        <td><?php echo $entreprise -> getCp(); ?></td>
                        <td><?php echo $entreprise -> getVille(); ?></td>
                </tr>
                <tr>
                    <th> Téléphone : </th>
                        <td><?php echo $entreprise -> getTelephoneEntreprise(); ?> </td>
                </tr>
                </table>

                <table>
                <strong> Informations du Maître de stage : </strong>
                <tr>
                    <th> Nom et prénom : </th>
                        <td><?php echo $contact -> getPrenomContact(); ?> <?php echo $contact -> getNomContact(); ?></td>
                </tr>
                <tr>
                    <th> Fonction : </th>
                        <td><?php echo $contact -> getIdFonctionContact(); ?></td>
                </tr>
                <tr>
                    <th> Téléphone : </th>
                        <td><?php echo $contact -> getTelephoneContact(); ?></td>
                </tr>
                <tr>
                    <th> Email : </th>
                        <td><?php echo $contact -> getEmailContact(); ?></td>
                </tr>
                </table>

                <table>
                <strong> Sujet du stage : </strong>
                <tr>
                    <td><?php echo $sujet -> getDescriptifSujet(); ?></td>
                </tr>
                </table>

                <table>
                <strong> Ressource(s) utilisée(s) : </strong>
                <tr>
                    <td><?php foreach ($ressources as $ressource) {

                            echo $ressource -> getLibelleRessource();

                        } ?></td>
                </tr>
                </table>

                <?php

                ?> 

            </div> 
            <div id="piedpage">

            </div>       
        </div>
            
    </body>
</html>