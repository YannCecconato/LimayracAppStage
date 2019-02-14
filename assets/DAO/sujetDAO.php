<?php

class SujetDAO extends DAO {

    // Constructeur
    function __construct(){
        parent::__construct();
    }

/** Fonction pour obtenir toutes les infos d'un élève grâce à son ID */ 
    function find($idSujet){
        $sql = "SELECT * FROM sujet WHERE IdSujet = :idSujet";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idSujet' => $idSujet
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    if ($row == NULL) {

        return NULL;

    } else {

        $sujet = new Sujet($row);
        return $sujet;

    }
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM sujet";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $sujets = array();
    foreach ($rows as $row) {

        $sujets[] = new sujet($row);

    }

    /** Retourne un tableau d'objets "sujet" */ 
    return $sujets;

    }

/** Fonction d'insertion des étudiants */    
    function insertionSujet($descriptifSujet, $dateDebut, $dateFin, $idEleveSujet, $idStatutSujet, $idProfesseurSujet, $idEntrepriseSujet, $idContactSujet) {
        $sql = "INSERT INTO sujet (DescriptifSujet, DateDebut, DateFin, IdEleveSujet, IdStatutSujet, IdProfesseurSujet, IdEntrepriseSujet, IdContactSujet) ";
        $sql .="VALUES (:descriptifSujet, :dateDebut, :dateFin, :idEleveSujet, :idStatutSujet, :idProfesseurSujet, :idEntrepriseSujet, :idContactSujet)";
        $params = array(
        ":descriptifSujet" => $descriptifSujet,
        ":dateDebut" => $dateDebut,
        ":dateFin" => $dateFin,
        ":idEleveSujet" => $idEleveSujet,
        ":idStatutSujet" => $idStatutSujet,
        ":idProfesseurSujet" => $idProfesseurSujet,
        ":idEntrepriseSujet" => $idEntrepriseSujet,
        ":idContactSujet" => $idContactSujet
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb; /** Retourne le nombre de mise à jour */
    }

}


?>