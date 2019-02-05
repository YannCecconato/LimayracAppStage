<?php

class EntrepriseDAO extends DAO {

    // Constructeur
    function __construct(){

        parent::__construct();

    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM entreprise";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $entreprises = array();
    foreach ($rows as $row) {

        $entreprises[] = new entreprise($row);

    }

    /** Retourne un tableau d'objets "entreprise" */ 
    return $entreprises;

    }

/** Fonction d'insertion des entreprises */    
    function insertionEntreprise($denomination, $adresseEntreprise, $cp, $ville, $telephoneEntreprise, $fax, $nbstage) {
        $sql = "INSERT INTO entreprise (Denomination, AdresseEntreprise, CP, Ville, TelephoneEntreprise, Fax, NombreStage) ";
        $sql .="VALUES (:denomination, :adresseEntreprise, :cp, :ville, :telephoneEntreprise, :fax, :nbstage)";
        $params = array(
        ":denomination" => $denomination,
        ":adresseEntreprise" => $adresseEntreprise,
        ":cp" => $cp,
        ":ville" => $ville,
        ":telephoneEntreprise" => $telephoneEntreprise,
        ":fax" => $fax,
        ":nbstage" => $nbstage
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb; /** Retourne le nombre de mise à jour */
    }

}


?>