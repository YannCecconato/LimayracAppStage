<html>
    <nav>
        <div id="menu">
                <ul class="navbar">
                    <li class="active"><a href="index.php" class="a_menu"> Accueil </a></li>
                    <?php
                    
                    
                        if (isset($_SESSION['email']) == false){ /** Si la session n'est pas activée */

                            echo '<li class="right"><a href="pages/inscription.php" class="a_menu"> Inscription </a></li>';
                            echo '<li class="right"><a href="pages/connexionRS.php" class="a_menu"> Connexion Responsable </a></li>';
                            echo '<li class="right"><a href="pages/connexionPR.php" class="a_menu"> Connexion Référent </a></li>';

                        } else if ($_SESSION['libelleQualiteProfesseur'] == "Responsable Section") { /** Si le professeur est un responsable de section */

                            echo '<li class="right"><a href="pages/deconnexion.php" class="a_menu">Se déconnecter</a></li>';
                            echo '<li class="right"><a href="pages/perso.php" class="a_menu"> Espace personnel </a></li>';
                            echo '<li class="active"><a href="pages/gestionEleve.php" class="a_menu"> Élèves </a></li>';
                            echo '<li class="active"><a href="pages/gestionProfesseur.php" class="a_menu"> Professeurs </a></li>';
                            echo '<li class="active"><a href="pages/gestionRessource.php" class="a_menu"> Ressources </a></li>';
                            echo '<li class="active"><a href="pages/gestionEntreprise.php" class="a_menu"> Entreprises </a></li>';
                            echo '<li class="active"><a href="pages/gestionContact.php" class="a_menu"> Contacts </a></li>';
                            echo '<li class="active"><a href="pages/gestionSujet.php" class="a_menu"> Sujets </a></li>';

                        } else if ($_SESSION['libelleQualiteProfesseur'] == "Professeur référent") { /** Si le professeur est un professeur référent */
                            
                            echo '<li class="right"><a href="pages/deconnexion.php" class="a_menu"> Se déconnecter </a></li>';
                            echo '<li class="right"><a href="pages/perso.php" class="a_menu"> Espace personnel </a></li>';
                            echo '<li class="active"><a href="pages/gestionEleve.php" class="a_menu"> Élèves </a></li>';
                            echo '<li class="active"><a href="pages/gestionSujet.php" class="a_menu"> Sujets </a></li>';
                            
                        }

                    ?>
                </ul>
        </div>
    </nav>
</html>