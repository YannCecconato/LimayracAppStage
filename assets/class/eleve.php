<?php

class Eleve {

    /* Déclaration des variables */
    private $idEleve = 0;
    private $prenomEleve = "?";
    private $nomEleve = "?";
    private $adresseEleve = "?";
    private $telephoneEleve = "?";
    private $emailEleve = "?";
    private $libelleCursusEleve = "?";
    private $libelleOptionEleve = "?";
    private $libelleGenreEleve = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */

    /**
     * Get the value of idEleve
     */ 
    public function getIdEleve()
    {
        return $this->idEleve;
    }

    /**
     * Set the value of idEleve
     *
     * @return  self
     */ 
    public function setIdEleve($idEleve)
    {
        $this->idEleve = $idEleve;

        return $this;
    }

    /**
     * Get the value of prenomEleve
     */ 
    public function getPrenomEleve()
    {
        return $this->prenomEleve;
    }

    /**
     * Set the value of prenomEleve
     *
     * @return  self
     */ 
    public function setPrenomEleve($prenomEleve)
    {
        $this->prenomEleve = $prenomEleve;

        return $this;
    }

    /**
     * Get the value of nomEleve
     */ 
    public function getNomEleve()
    {
        return $this->nomEleve;
    }

    /**
     * Set the value of nomEleve
     *
     * @return  self
     */ 
    public function setNomEleve($nomEleve)
    {
        $this->nomEleve = $nomEleve;

        return $this;
    }

    /**
     * Get the value of adresseEleve
     */ 
    public function getAdresseEleve()
    {
        return $this->adresseEleve;
    }

    /**
     * Set the value of adresseEleve
     *
     * @return  self
     */ 
    public function setAdresseEleve($adresseEleve)
    {
        $this->adresseEleve = $adresseEleve;

        return $this;
    }

    /**
     * Get the value of telephoneEleve
     */ 
    public function getTelephoneEleve()
    {
        return $this->telephoneEleve;
    }

    /**
     * Set the value of telephoneEleve
     *
     * @return  self
     */ 
    public function setTelephoneEleve($telephoneEleve)
    {
        $this->telephoneEleve = $telephoneEleve;

        return $this;
    }

    /**
     * Get the value of emailEleve
     */ 
    public function getEmailEleve()
    {
        return $this->emailEleve;
    }

    /**
     * Set the value of emailEleve
     *
     * @return  self
     */ 
    public function setEmailEleve($emailEleve)
    {
        $this->emailEleve = $emailEleve;

        return $this;
    }

    /**
     * Get the value of libelleCursusEleve
     */ 
    public function getLibelleCursusEleve()
    {
        return $this->libelleCursusEleve;
    }

    /**
     * Set the value of libelleCursusEleve
     *
     * @return  self
     */ 
    public function setLibelleCursusEleve($libelleCursusEleve)
    {
        $this->libelleCursusEleve = $libelleCursusEleve;

        return $this;
    }

    /**
     * Get the value of libelleOptionEleve
     */ 
    public function getLibelleOptionEleve()
    {
        return $this->libelleOptionEleve;
    }

    /**
     * Set the value of libelleOptionEleve
     *
     * @return  self
     */ 
    public function setLibelleOptionEleve($libelleOptionEleve)
    {
        $this->libelleOptionEleve = $libelleOptionEleve;

        return $this;
    }

    /**
     * Get the value of libelleGenreEleve
     */ 
    public function getLibelleGenreEleve()
    {
        return $this->libelleGenreEleve;
    }

    /**
     * Set the value of libelleGenreEleve
     *
     * @return  self
     */ 
    public function setLibelleGenreEleve($libelleGenreEleve)
    {
        $this->libelleGenreEleve = $libelleGenreEleve;

        return $this;
    }

    /** function hydrater */
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