<?php

class EntrepriseDAO extends DAO {

    // Constructeur
    function __construct(){

        parent::__construct();

    }

/** Fonction pour obtenir toutes les infos d'un élève grâce à son ID */ 
    function find($idEntreprise){
        $sql = "SELECT * FROM entreprise WHERE IdEntreprise = :idEntreprise";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idEntreprise' => $idEntreprise
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    if ($row == NULL) {

        return NULL;

    } else {

        $entreprise = new Entreprise($row);
        return $entreprise;

    }
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

/** Fonction pour mettre à jour une entreprise grâce à son ID*/
    function updateByIdEntreprise($idEntreprise, $denomination, $adresseEntreprise, $cp, $ville, $telephoneEntreprise, $fax, $nbStage) {
        $sql = "UPDATE eleve SET ";
        $sql .= "Denomination = :denomination, ";
        $sql .= "AdresseEntreprise = :adresseEntreprise, ";
        $sql .= "CP = :cp, ";
        $sql .= "Ville = :ville, ";
        $sql .= "TelephoneEntreprise = :telephoneEntreprise, ";
        $sql .= "Fax = :fax ";
        $sql .= "NombreStage = :nbStage";
        $sql .= "WHERE IdEntreprise = :idEntreprise";
        $params = array(
            ":denomination" => $denomination,
            ":adresseEntreprise" => $adresseEntreprise,
            ":cp" => $cp,
            ":ville" => $ville,
            ":telephoneEntreprise" => $telephoneEntreprise,
            ":fax" => $libelleCursusEntrfaxeprise,
            ":nbStage" => $nbStage,
            ":idEntreprise" => $idEntreprise
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb;
}

}


?>