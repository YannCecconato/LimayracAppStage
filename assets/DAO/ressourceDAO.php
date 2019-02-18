<?php

class RessourceDAO extends DAO {

    // Constructeur
    function __construct(){
        parent::__construct();
    }

/** Fonction pour obtenir toutes les infos d'une ressource grâce à son ID */ 
    function find($idRessource){
        $sql = "SELECT * FROM ressource WHERE IdRessource = :idRessource";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idRessource' => $idRessource
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
        if ($row == NULL) {

            return NULL;

        } else {

            $ressource = new Ressource($row);
            return $ressource;

        }
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM ressource";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $ressources = array();
    foreach ($rows as $row) {

        $ressources[] = new ressource($row);

    }

    /** Retourne un tableau d'objets "ressource" */ 
    return $ressources;

    }

/** */
    function findAllByIdUtiliser($idRessourceUtiliser) {
        $sql = "SELECT * FROM ressource WHERE IdRessource = :idRessourceUtiliser";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ":idRessourceUtiliser" => $idRessourceUtiliser
            ));
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());

        }
    $ressources = array();
    foreach ($rows as $row) {

        $ressources[] = new ressource($row);

    }

    /** Retourne un tableau d'objets "eleve" */ 
    return $ressources;

    }

/** Fonction d'insertion des resources */    
    function insertionRessource($libelleRessource, $typeRessource) {
        $sql = "INSERT INTO ressource (LibelleRessource, TypeRessource) ";
        $sql .="VALUES (:libelleRessource, :typeRessource)";
        $params = array(
        ":libelleRessource" => $libelleRessource,
        ":typeRessource" => $typeRessource
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb; /** Retourne le nombre de mise à jour */
    }

/** Fonction pour supprimer un élève avec son ID */ 
    function deleteByIdRessource($idRessource) {
        $sql = "DELETE FROM ressource WHERE IdRessource = :idRessource";
        try {
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
                        ":idRessource" => $idRessource
                        ));
        } catch (PDOException $e) {

        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());

        }
    }

}


?>