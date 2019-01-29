<?php

class Professeur {

    /** Déclaration des variables */
    private $idProfesseur = 0;
    private $prenomProfesseur = "?";
    private $nomProfesseur = "?";
    private $genreProfesseur = "?";
    private $telephoneProfesseur = "?";
    private $emailProfesseur = "?";

    /** function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /** function construct */

    /**
     * Get the value of idProfesseur
     */ 
    public function getIdProfesseur()
    {
        return $this->idProfesseur;
    }

    /**
     * Set the value of idProfesseur
     *
     * @return  self
     */ 
    public function setIdProfesseur($idProfesseur)
    {
        $this->idProfesseur = $idProfesseur;

        return $this;
    }

    /**
     * Get the value of prenomProfesseur
     */ 
    public function getPrenomProfesseur()
    {
        return $this->prenomProfesseur;
    }

    /**
     * Set the value of prenomProfesseur
     *
     * @return  self
     */ 
    public function setPrenomProfesseur($prenomProfesseur)
    {
        $this->prenomProfesseur = $prenomProfesseur;

        return $this;
    }

    /**
     * Get the value of nomProfesseur
     */ 
    public function getNomProfesseur()
    {
        return $this->nomProfesseur;
    }

    /**
     * Set the value of nomProfesseur
     *
     * @return  self
     */ 
    public function setNomProfesseur($nomProfesseur)
    {
        $this->nomProfesseur = $nomProfesseur;

        return $this;
    }

    /**
     * Get the value of genreProfesseur
     */ 
    public function getGenreProfesseur()
    {
        return $this->genreProfesseur;
    }

    /**
     * Set the value of genreProfesseur
     *
     * @return  self
     */ 
    public function setGenreProfesseur($genreProfesseur)
    {
        $this->genreProfesseur = $genreProfesseur;

        return $this;
    }

    /**
     * Get the value of telephoneProfesseur
     */ 
    public function getTelephoneProfesseur()
    {
        return $this->telephoneProfesseur;
    }

    /**
     * Set the value of telephoneProfesseur
     *
     * @return  self
     */ 
    public function setTelephoneProfesseur($telephoneProfesseur)
    {
        $this->telephoneProfesseur = $telephoneProfesseur;

        return $this;
    }

    /**
     * Get the value of emailProfesseur
     */ 
    public function getEmailProfesseur()
    {
        return $this->emailProfesseur;
    }

    /**
     * Set the value of emailProfesseur
     *
     * @return  self
     */ 
    public function setEmailProfesseur($emailProfesseur)
    {
        $this->emailProfesseur = $emailProfesseur;

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
    } /* function hydrater */

}

?>