<?php

class ProfesseurDAO extends DAO {

/** Constructeur */
    function __construct() {
        parent::__construct();
    }

/** Fonction pour obtenir toutes les infos d'un élève grâce à son ID */ 
    function find($idProfesseur) {
        $sql = "SELECT * FROM professeur WHERE IdProfesseur = :idProfesseur";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idProfesseur' => $idProfesseur
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    if ($row == NULL) {

        return NULL;

    } else {

        $professeur = new Professeur($row);
        return $professeur;

    }
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
    
    /** Fonction findAll() */
    function findAllByLibelleQualite($libelleQualiteProfesseur) {
        $sql = "SELECT * FROM professeur WHERE LibelleQualiteProfesseur = :libelleQualiteProfesseur";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':libelleQualiteProfesseur' => $libelleQualiteProfesseur
            ));
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $professeurs = array();
    foreach ($rows as $row) {
        $professeurs[] = new professeur($row);
    }
    /** Retourne un tableau d'objets "professeur" */ 
    return $professeurs;
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

/** Fonction pour trouver les informations d'un professeur grâce à sa qualité */
    function findByLibelleQualiteProfesseur($libelleQualiteProfesseur) {
        $sql = "SELECT * FROM professeur WHERE IdQualiteProfesseur = :idQualiteProfesseur";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':libelleQualiteProfesseur' => $libelleQualiteProfesseur
            ));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());

        }
        $professeur = new professeur($row);
        return $professeur; /** Retourne l'objet métier */
    }

/** Fonction pour inscrire un professeur */
    function inscriptionProfesseur($prenomProfesseur, $nomProfesseur, $telephoneProfesseur, $emailProfesseur, $mdp, $libelleQualiteProfesseur, $libelleGenreProfesseur) {
        $sql = "INSERT INTO professeur (PrenomProfesseur, NomProfesseur, TelephoneProfesseur, EmailProfesseur, MDP, LibelleQualiteProfesseur, LibelleGenreProfesseur) ";
        $sql .= "VALUES (:prenomProfesseur, :nomProfesseur, :telephoneProfesseur, :emailProfesseur, :mdp, :libelleQualiteProfesseur, :libelleGenreProfesseur)";
            try {
                $sth = $this->pdo->prepare($sql);
                $sth->execute(array(
                    ':prenomProfesseur' => $prenomProfesseur,
                    ':nomProfesseur' => $nomProfesseur,
                    ':telephoneProfesseur' => $telephoneProfesseur,
                    ':emailProfesseur' => $emailProfesseur,
                    ':mdp' => $mdp,
                    ':libelleQualiteProfesseur' => $libelleQualiteProfesseur,
                    ':libelleGenreProfesseur' => $libelleGenreProfesseur
                ));
            } catch (PDOException $ex) {

                die("Erreur lors de la requête SQL : " . $ex->getMessage());

            }    
    }    

/** Fonction pour mettre à jour un professeur par son Email */
    function updateByEmailProfesseur($nomProfesseur, $prenomProfesseur, $telephoneProfesseur, $emailProfesseur, $libelleGenreProfesseur) {
        $sql = "UPDATE professeur SET ";
        $sql .= "NomProfesseur = :nomProfesseur, ";
        $sql .= "PrenomProfesseur = :prenomProfesseur, ";
        $sql .= "TelephoneProfesseur = :telephoneProfesseur, ";
        $sql .= "EmailProfesseur = :emailProfesseur, ";
        $sql .= "LibelleGenreProfesseur = :libelleGenreProfesseur ";
        $sql .= "WHERE EmailProfesseur = :emailProfesseur";
        $params = array(
            ":nomProfesseur" => $nomProfesseur,
            ":prenomProfesseur" => $prenomProfesseur,
            ":telephoneProfesseur" => $telephoneProfesseur,
            ":emailProfesseur" => $emailProfesseur,
            ":libelleGenreProfesseur" => $libelleGenreProfesseur
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb;
    }

/** Fonction pour mettre à jour le mot de passe d'un professeur par son Email */
    function updateMDPByEmailProfesseur($mdp, $emailProfesseur) {
        $sql = "UPDATE professeur SET ";
        $sql .= "MDP = :mdp ";
        $sql .= "WHERE EmailProfesseur = :emailProfesseur";
        $params = array(
            ":mdp" => $mdp,
            ":emailProfesseur" => $emailProfesseur
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

/** Fonction pour supprimer un élève avec son ID */ 
    function deleteByIdProfesseur($idProfesseur) {
        $sql = "DELETE FROM professeur WHERE IdProfesseur = :idProfesseur";
        try {
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
                        ":idProfesseur" => $idProfesseur
                        ));
        } catch (PDOException $e) {

        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());

        }
    }

}


?>