<html>
    <nav>
        <div id="menu">
                <ul class="navbar">
                    <li class="active"><a href="index.php" class="a_menu"> Accueil </a></li>
                    <?php
                    
                        if (isset($_SESSION['email']) == false){ /** Si la session n'est pas activée */

                            echo '<li class="right"><a href="pages/inscription.php" class="a_menu"> Inscription </a></li>';
                            echo '<li class="right"><a href="pages/connexion.php" class="a_menu"> Connexion </a></li>';

                        } else if ($_SESSION['idQualiteProfesseur'] == 1) { /** Si le professeur est un référent */

                            echo '<li class="right"><a href="pages/deconnexion.php" class="a_menu">Se déconnecter</a></li>';
                            echo '<li class="right"><a href="pages/perso.php" class="a_menu"> Espace personnel </a></li>';
                            echo '<li class="active"><a href="pages/gestion.php" class="a_menu"> Gestion </a></li>';

                        } else {

                        }

                    ?>
                </ul>
        </div>
    </nav>
</html>