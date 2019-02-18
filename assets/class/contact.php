<?php

class Contact {

    /* Déclaration des variables */
    private $idContact = 0;
    private $nomContact = "?";
    private $prenomContact = "?";
    private $emailContact = "?";
    private $telephoneContact ="?";
    private $idEntrepriseContact = "?";
    private $idFonctionContact = "?";
    private $LibelleGenreContact = 0;

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */

    /**
     * Get the value of idContact
     */ 
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set the value of idContact
     *
     * @return  self
     */ 
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Get the value of nomContact
     */ 
    public function getNomContact()
    {
        return $this->nomContact;
    }

    /**
     * Set the value of nomContact
     *
     * @return  self
     */ 
    public function setNomContact($nomContact)
    {
        $this->nomContact = $nomContact;

        return $this;
    }

    /**
     * Get the value of prenomContact
     */ 
    public function getPrenomContact()
    {
        return $this->prenomContact;
    }

    /**
     * Set the value of prenomContact
     *
     * @return  self
     */ 
    public function setPrenomContact($prenomContact)
    {
        $this->prenomContact = $prenomContact;

        return $this;
    }

    /**
     * Get the value of emailContact
     */ 
    public function getEmailContact()
    {
        return $this->emailContact;
    }

    /**
     * Set the value of emailContact
     *
     * @return  self
     */ 
    public function setEmailContact($emailContact)
    {
        $this->emailContact = $emailContact;

        return $this;
    }

    /**
     * Get the value of telephoneContact
     */ 
    public function getTelephoneContact()
    {
        return $this->telephoneContact;
    }

    /**
     * Set the value of telephoneContact
     *
     * @return  self
     */ 
    public function setTelephoneContact($telephoneContact)
    {
        $this->telephoneContact = $telephoneContact;

        return $this;
    }

    /**
     * Get the value of idEntrepriseContact
     */ 
    public function getIdEntrepriseContact()
    {
        return $this->idEntrepriseContact;
    }

    /**
     * Set the value of idEntrepriseContact
     *
     * @return  self
     */ 
    public function setIdEntrepriseContact($idEntrepriseContact)
    {
        $this->idEntrepriseContact = $idEntrepriseContact;

        return $this;
    }

    /**
     * Get the value of idFonctionContact
     */ 
    public function getIdFonctionContact()
    {
        return $this->idFonctionContact;
    }

    /**
     * Set the value of idFonctionContact
     *
     * @return  self
     */ 
    public function setIdFonctionContact($idFonctionContact)
    {
        $this->idFonctionContact = $idFonctionContact;

        return $this;
    }

    /**
     * Get the value of LibelleGenreContact
     */ 
    public function getLibelleGenreContact()
    {
        return $this->LibelleGenreContact;
    }

    /**
     * Set the value of LibelleGenreContact
     *
     * @return  self
     */ 
    public function setLibelleGenreContact($LibelleGenreContact)
    {
        $this->LibelleGenreContact = $LibelleGenreContact;

        return $this;
    }

    /* function hydrater */
    function hydrater(array $tableau) {
        foreach ($tableau as $cle => $valeur) {
            $methode = 'set' . $cle;
            if (method_exists($this, $methode)) {
                    $this->$methode($valeur);
            }
        }
    }
}

?>