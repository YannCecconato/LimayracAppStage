<?php

class Professeur {

    /** Déclaration des variables */
    private $idProfesseur = 0;
    private $prenomProfesseur = "?";
    private $nomProfesseur = "?";
    private $telephoneProfesseur = "?";
    private $emailProfesseur = "?";
    private $mdp = "?";
    private $libelleQualiteProfesseur = "?";
    private $libelleGenreProfesseur = 0;

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

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get the value of libelleQualiteProfesseur
     */ 
    public function getLibelleQualiteProfesseur()
    {
        return $this->libelleQualiteProfesseur;
    }

    /**
     * Set the value of libelleQualiteProfesseur
     *
     * @return  self
     */ 
    public function setLibelleQualiteProfesseur($libelleQualiteProfesseur)
    {
        $this->libelleQualiteProfesseur = $libelleQualiteProfesseur;

        return $this;
    }

    /**
     * Get the value of libelleGenreProfesseur
     */ 
    public function getLibelleGenreProfesseur()
    {
        return $this->libelleGenreProfesseur;
    }

    /**
     * Set the value of libelleGenreProfesseur
     *
     * @return  self
     */ 
    public function setLibelleGenreProfesseur($libelleGenreProfesseur)
    {
        $this->libelleGenreProfesseur = $libelleGenreProfesseur;

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