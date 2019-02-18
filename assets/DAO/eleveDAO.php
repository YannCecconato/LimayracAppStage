<?php

class EleveDAO extends DAO {

    // Constructeur
    function __construct() {

        parent::__construct();
        
    }

/** Fonction pour obtenir toutes les infos d'un élève grâce à son ID */ 
    function find($idEleve){
        $sql = "SELECT * FROM eleve WHERE IdEleve = :idEleve";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idEleve' => $idEleve
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
        if ($row == NULL) {

            return NULL;

        } else {

            $eleve = new Eleve($row);
            return $eleve;

        }
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM eleve";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $eleves = array();
    foreach ($rows as $row) {

        $eleves[] = new eleve($row);

    }

    /** Retourne un tableau d'objets "eleve" */ 
    return $eleves;

    }

/** Fonction d'insertion des étudiants */    
    function insertionEleve($prenomEleve, $nomEleve, $adresseEleve, $telephoneEleve, $emailEleve, $libelleCursusEleve, $libelleOptionEleve, $libelleGenreEleve) {
        $sql = "INSERT INTO eleve (PrenomEleve, NomEleve, AdresseEleve, TelephoneEleve, EmailEleve, LibelleCursusEleve,LibelleOptionEleve, libelleGenreEleve) ";
        $sql .="VALUES (:prenomEleve, :nomEleve, :adresseEleve, :telephoneEleve, :emailEleve, :libelleCursusEleve, :libelleOptionEleve, :libelleGenreEleve)";
        $params = array(
        ":prenomEleve" => $prenomEleve,
        ":nomEleve" => $nomEleve,
        ":adresseEleve" => $adresseEleve,
        ":telephoneEleve" => $telephoneEleve,
        ":emailEleve" => $emailEleve,
        ":libelleOptionEleve" => $libelleOptionEleve,
        ":libelleCursusEleve" => $libelleCursusEleve,
        ":libelleGenreEleve" => $libelleGenreEleve
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb; /** Retourne le nombre de mise à jour */
    }

/** Fonction pour mettre à jour un élève grâce à son ID*/
    function updateByIdEleve($idEleve, $prenomEleve, $nomEleve, $adresseEleve, $telephoneEleve, $emailEleve, $libelleOptionEleve, $libelleCursusEleve, $libelleGenreEleve) {
        $sql = "UPDATE eleve SET ";
        $sql .= "PrenomEleve = :prenomEleve, ";
        $sql .= "NomEleve = :nomEleve, ";
        $sql .= "AdresseEleve = :adresseEleve, ";
        $sql .= "TelephoneEleve = :telephoneEleve, ";
        $sql .= "EmailEleve = :emailEleve, ";
        $sql .= "LibelleOptionEleve = :libelleOptionEleve, ";
        $sql .= "LibelleCursusEleve = :libelleCursusEleve, ";
        $sql .= "LibelleGenreEleve = :libelleGenreEleve ";
        $sql .= "WHERE IdEleve = :idEleve";
        $params = array(
            ":prenomEleve" => $prenomEleve,
            ":nomEleve" => $nomEleve,
            ":adresseEleve" => $adresseEleve,
            ":telephoneEleve" => $telephoneEleve,
            ":emailEleve" => $emailEleve,
            ":libelleOptionEleve" => $libelleOptionEleve,
            ":libelleCursusEleve" => $libelleCursusEleve,
            ":libelleGenreEleve" => $libelleGenreEleve,
            ":idEleve" => $idEleve
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb;
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
        } if (count($row) != 1) {  /** 1 car count($row) vaut 1 lorsque $row est vide */

            return true ;  /** Si $row contient des informations alors retourne vrai */

        } else {

            return false ; /** Si $row est vide alors retourne faux */
            
        }
    }
    
/** Fonction pour supprimer un élève avec son ID */ 
    function deleteByIdEleve($idEleve) {
        $sql = "DELETE FROM eleve WHERE IdEleve = :idEleve";
        try {
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
                        ":idEleve" => $idEleve
                        ));
        } catch (PDOException $e) {

        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());

        }
    }
}

?>