<?php

class EleveDAO extends DAO {

    // Constructeur
    function __construct(){
        parent::__construct();
    }

/** Fonction d'insertion des étudiants */    
    function insert(Eleve $eleve) {
        $sql = "INSERT INTO eleve (IdEleve, PrenomEleve, NomEleve, GenreEleve, AdresseEleve, TelephoneEleve, EmailEleve, LibelleCursusEleve, IdOptionEleve) ";
        $sql .="VALUES (:ideleve, :prenomEleve, :nomeleve, :genreeleve, :adresseeleve, :telephoneeleve, :emaileleve, :libellecursuseleve, :idoptioneleve)";
        $params = array(
        ":ideleve" => $eleve -> getIdEleve(),
        ":prenomEleve" => $eleve -> getPrenomEleve(),
        ":nomeleve" => $eleve -> getNomeleve(),
        ":genreeleve" => $eleve -> getGenreEleve(),
        ":adresseeleve" => $eleve -> getAdresseEleve(),
        ":telephoneeleve" => $eleve -> getTelephoneEleve(),
        ":emaileleve" => $eleve -> getEmailEleve(),
        ":libellecursuseleve" => $eleve -> getLibelleCursusEleve(),
        ":idoptioneleve" => $eleve -> getIdOptionEleve()
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb; /** Retourne le nombre de mise à jour */
    }

/** Fonction pour que 2 élèves ne puissent être inscrit avec la même adresse mail ou empêcher l'inscription de 2 fois le même élève */
    function is_mail_exist($emailEleve) {
        $sql  = "SELECT * FROM eleve WHERE EmailEleve = :emailEleve";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':emailEleve' => $emailEleve
            ));
            $row = $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            die("Erreur lors de la requête SQL : " . $ex->getMessage());
        }
        if (count($row) != 1) {  /** 1 car count($row) vaut 1 lorsque $row est vide */
            return true ;  /** Si $row contient des informations alors retourne vrai */
        } else {
            return false ; /** Si $row est vide alors retourne faux */
        }
    }

}




?>