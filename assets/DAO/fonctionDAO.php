<?php

class FonctionDAO extends DAO {

    // Constructeur
    function __construct(){
        parent::__construct();
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM fonction";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $fonctions = array();
    foreach ($rows as $row) {

        $fonctions[] = new fonction($row);

    }

    /** Retourne un tableau d'objets "fonction" */ 
    return $fonctions;

    }

}


?>