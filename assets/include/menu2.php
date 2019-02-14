<html>
    <nav>
        <div id="menu">
                <ul class="navbar">
                    <li class="active"><a href="../index.php" class="a_menu"> Accueil </a></li>

                    <?php
                    
                        if (isset($_SESSION['email']) == false){ /** Si la session n'est pas activée */

                            echo '<li class="right"><a href="inscription.php" class="a_menu"> Inscription </a></li>';
                            echo '<li class="right"><a href="connexionRS.php" class="a_menu"> Connexion Responsable </a></li>';
                            echo '<li class="right"><a href="connexionPR.php" class="a_menu"> Connexion Référent </a></li>';

                        } else if ($_SESSION['libelleQualiteProfesseur'] == "Responsable Section") { /** Si le professeur est un responsable de section */

                            echo '<li class="right"><a href="deconnexion.php" class="a_menu"> Se déconnecter </a></li>';
                            echo '<li class="right"><a href="perso.php" class="a_menu"> Espace personnel </a></li>';
                            echo '<li class="active"><a href="gestionEleve.php" class="a_menu"> Élèves </a></li>';
                            echo '<li class="active"><a href="gestionProfesseur.php" class="a_menu"> Professeurs </a></li>';
                            echo '<li class="active"><a href="gestionEntreprise.php" class="a_menu"> Entreprises </a></li>';
                            echo '<li class="active"><a href="gestionSujet.php" class="a_menu"> Sujets </a></li>';

                        } else if ($_SESSION['libelleQualiteProfesseur'] == "Professeur référent") { /** Si le professeur est un professeur référent */

                            echo '<li class="right"><a href="deconnexion.php" class="a_menu"> Se déconnecter </a></li>';
                            echo '<li class="right"><a href="perso.php" class="a_menu"> Espace personnel </a></li>';
                            echo '<li class="active"><a href="gestionEleve.php" class="a_menu"> Élèves </a></li>';
                            echo '<li class="active"><a href="gestionSujet.php" class="a_menu"> Sujets </a></li>';
                        }

                    ?>

                </ul>
        </div>
    </nav>
</html>