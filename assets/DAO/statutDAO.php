<?php

class StatutDAO extends DAO {

    // Constructeur
    function __construct(){
        parent::__construct();
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM statut";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $status = array();
    foreach ($rows as $row) {

        $status[] = new statut($row);

    }

    /** Retourne un tableau d'objets "eleve" */ 
    return $status;

    }

/** Fonction pour obtenir toutes les infos d'un statut grâce à son ID */ 
    function find($idStatut){
        $sql = "SELECT * FROM statut WHERE IdStatut = :idStatut";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idStatut' => $idStatut
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    if ($row == NULL) {

        return NULL;

    } else {

        $statut = new Statut($row);
        return $statut;

    }
    }

}


?>