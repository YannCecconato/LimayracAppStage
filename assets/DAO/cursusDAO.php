<?php

class CursusDAO extends DAO {

    /** Constructeur */
    function __construct(){
        parent::__construct();
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM cursus";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $cursuss = array();
    foreach ($rows as $row) {

        $cursuss[] = new cursus($row);

    }

    /** Retourne un tableau d'objets "eleve" */ 
    return $cursuss;

    }

}


?>