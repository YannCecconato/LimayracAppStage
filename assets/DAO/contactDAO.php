<?php

class ContactDAO extends DAO {

    // Constructeur
    function __construct(){
        parent::__construct();
    }

/** Fonction pour obtenir toutes les infos d'un contact grâce à son ID */ 
    function find($idContact){
        $sql = "SELECT * FROM contact WHERE IdContact = :idContact";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idContact' => $idContact
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    if ($row == NULL) {

        return NULL;

    } else {

        $contact = new Contact($row);
        return $contact;

    }
    }

/** Fonction pour obtenir toutes les infos d'un élève grâce à son ID */ 
    function findByIdEntreprise($idEntrepriseContact){
        $sql = "SELECT * FROM contact WHERE IdEntrepriseContact = :idEntrepriseContact";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':idEntrepriseContact' => $idEntrepriseContact
        ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    if ($row == NULL) {

        return NULL;

    } else {

        $contact = new Contact($row);
        return $contact;

    }
    }

/** function findAll() */ 
    function findAll() {
        $sql = "SELECT * FROM contact";
        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }
    $contacts = array();
    foreach ($rows as $row) {

        $contacts[] = new contact($row);

    }

    /** Retourne un tableau d'objets "eleve" */ 
    return $contacts;

    }

    /** Fonction d'insertion des étudiants */    
    function insertionContact($nomContact, $prenomContact, $emailContact, $telephoneContact, $idEntreprise, $idFonction, $libelleGenreContact) {
        $sql = "INSERT INTO eleve (NomContact, PrenomContact, EmailContact, TelephoneContact, IdEntreprise, IdFonction, LibelleGenreContact) ";
        $sql .="VALUES (:nomContact, :prenomContact, :emailContact, :telephoneContact, :idEntreprise, :idFonction, :libelleGenreContact)";
        $params = array(
        ":nomContact" => $nomContact,
        ":prenomContact" => $prenomContact,
        ":emailContact" => $emailContact,
        ":telephoneContact" => $telephoneContact,
        ":idEntreprise" => $idEntreprise,
        ":idFonction" => $idFonction,
        ":libelleGenreContact" => $libelleGenreContact
        );
        $sth = $this->executer($sql, $params); /** On passe par la méthode de la classe mère */
        $nb = $sth->rowcount();
        return $nb; /** Retourne le nombre de mise à jour */
    }



}


?>