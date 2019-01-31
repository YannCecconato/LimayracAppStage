<?php

class ProfesseurDAO extends DAO {

/** Constructeur */
    function __construct() {
        parent::__construct();
    }

/** Fonction findAll() */
    function findAll() {
        $sql = "SELECT * FROM professeur";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $professeur = array();
    foreach ($rows as $row) {
        $professeur[] = new professeur($row);
    }
    /** Retourne un tableau d'objets "professeur" */ 
    return $professeur;
    } 

/** Fonction pour trouver les informations d'un professeur grâce à son adresse mail */
    function findByEmailProfesseur($emailProfesseur) {
        $sql = "SELECT * FROM professeur WHERE EmailProfesseur = :emailProfesseur";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':emailProfesseur' => $emailProfesseur
            ));
            $row = $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
        $professeur = new professeur($row);
        return $professeur; /** Retourne l'objet métier */
    }

/** Fonction pour inscrire un professeur */
    function inscription_professeur($prenomProfesseur, $nomProfesseur, $genreProfesseur, $telephoneProfesseur, $emailProfesseur, $mdp, $idQualiteProfesseur) {
        $sql = "INSERT INTO professeur (PrenomProfesseur, NomProfesseur, GenreProfesseur, TelephoneProfesseur, EmailProfesseur, MDP, IdQualiteProfesseur) ";
        $sql .= "VALUES (:prenomProfesseur, :nomProfesseur, :genreProfesseur, :telephoneProfesseur, :emailProfesseur, :mdp, :idQualiteProfesseur)";
            try {
                $sth = $this->pdo->prepare($sql);
                $sth->execute(array(
                    ':prenomProfesseur' => $prenomProfesseur,
                    ':nomProfesseur' => $nomProfesseur,
                    ':genreProfesseur' => $genreProfesseur,
                    ':telephoneProfesseur' => $telephoneProfesseur,
                    ':emailProfesseur' => $emailProfesseur,
                    ':mdp' => $mdp,
                    ':idQualiteProfesseur' => $idQualiteProfesseur
                ));
            } catch (PDOException $ex) {
                die("Erreur lors de la requête SQL : " . $ex->getMessage());
            }    
    }

/** Fonction pour mettre à jour un professeur */
    function updateByEmailProfesseur($nomProfesseur, $prenomProfesseur, $genreProfesseur, $telephoneProfesseur, $emailProfesseur, $mdp) {
        $sql = "UPDATE professeur SET ";
        $sql .= "NomProfesseur = :nomProfesseur, ";
        $sql .= "PrenomProfesseur = :prenomProfesseur, ";
        $sql .= "GenreProfesseur = :genreProfesseur, ";
        $sql .= "TelephoneProfesseur = :telephoneProfesseur, ";
        $sql .= "EmailProfesseur = :emailProfesseur, ";
        $sql .= "MDP = :mdp ";
        $sql .= "WHERE EmailProfesseur = :emailProfesseur";
        $params = array(
            ":nomProfesseur" => $nomProfesseur,
            ":prenomProfesseur" => $prenomProfesseur,
            ":genreProfesseur" => $genreProfesseur,
            ":telephoneProfesseur" => $telephoneProfesseur,
            ":emailProfesseur" => $emailProfesseur,
            ":mdp" => $mdp
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb;
    }

/** Fonction pour que 2 professeurs ne puissent avoir la même adresse mail */
    function is_mail_exist($emailProfesseur) {
        $sql  = "SELECT * FROM professeur WHERE EmailProfesseur = :emailProfesseur";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':emailProfesseur' => $emailProfesseur
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

/** Fonction pour verifier les informations de connexion */
    function verify_login($emailProfesseur, $mdp) {
        $sql  = "SELECT EmailProfesseur, MDP ";
        $sql .= "FROM professeur ";
        $sql .= "WHERE EmailProfesseur = :emailProfesseur";
            try {
                $sth = $this->pdo->prepare($sql);
                $sth->execute(array(
                    ':emailProfesseur' => $emailProfesseur
                ));
                $row = $sth->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $ex) {
                die("Erreur lors de la requête SQL : " . $ex->getMessage());
            }
            if (password_verify($mdp, $row['MDP']) && $emailProfesseur == $row["EmailProfesseur"]) {   // Verification que le mot de passe est bien le bon
                return true;    // Si tout est bon retourne vrai
            } else {
                return false;   // Si le mot de passe ou le mail est faux, retourne faux
            }
            
    }

}


?>