<?php

class OptionDAO extends DAO {

    // Constructeur
    function __construct(){
        parent::__construct();
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM option";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $options = array();
    foreach ($rows as $row) {

        $options[] = new option($row);

    }

    /** Retourne un tableau d'objets "eleve" */ 
    return $options;

    }

}


?>