<?php

class UtiliserDAO extends DAO {

    /** Constructeur */
    function __construct(){
        parent::__construct();
    }

/** Fonction pour obtenir toutes les infos d'un élève grâce à son ID */ 
    function find($idSujetUtiliser){
        $sql = "SELECT * FROM utiliser WHERE IdSujetUtiliser = :idSujetUtiliser";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idSujetUtiliser' => $idSujetUtiliser
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
        if ($row == NULL) {

            return NULL;

        } else {

            $utiliser = new Utiliser($row);
            return $utiliser;

        }
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM utiliser";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $utilisers = array();
    foreach ($rows as $row) {

        $utilisers[] = new utiliser($row);

    }

    /** Retourne un tableau d'objets "utiliser" */ 
    return $utilisers;

    }

/** Fonction d'insertion des resources */    
    function insertionUtiliser($idSujetUtiliser, $idRessourceUtiliser) {
        $sql = "INSERT INTO utiliser (IdSujetUtiliser, IdRessourceUtiliser) ";
        $sql .="VALUES (:idSujetUtiliser, :idRessourceUtiliser)";
        $params = array(
        ":idSujetUtiliser" => $idSujetUtiliser,
        ":idRessourceUtiliser" => $idRessourceUtiliser
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb; /** Retourne le nombre de mise à jour */
    }

}

?>