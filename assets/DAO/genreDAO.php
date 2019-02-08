<?php

class GenreDAO extends DAO {

    // Constructeur
    function __construct(){
        parent::__construct();
    }

/** Fonction pour obtenir toutes les infos d'un élève grâce à son ID */ 
    function find($idGenre){
        $sql = "SELECT * FROM genre WHERE IdGenre = :idGenre";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idGenre' => $idGenre
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    if ($row == NULL) {

        return NULL;

    } else {

        $genre = new Genre($row);
        return $genre;

    }
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