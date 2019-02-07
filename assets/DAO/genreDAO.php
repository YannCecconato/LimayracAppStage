<?php

class GenreDAO extends DAO {

    // Constructeur
    function __construct(){
        parent::__construct();
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM genre";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $genres = array();
    foreach ($rows as $row) {

        $genres[] = new genre($row);

    }

    /** Retourne un tableau d'objets "eleve" */ 
    return $genres;

    }

}


?>