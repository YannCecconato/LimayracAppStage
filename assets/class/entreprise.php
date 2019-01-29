<?php

class Entreprise {

    /* Déclaration des variables */
    private $idEntreprise = 0;
    private $denomination = "?";
    private $adresseEntreprise = "?";
    private $ville = "?";
    private $telephoneEntreprise = "?";
    private $fax = "?";
    private $nombreStage = 0;
    
    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of idEntreprise
     */ 
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set the value of idEntreprise
     *
     * @return  self
     */ 
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get the value of denomination
     */ 
    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * Set the value of denomination
     *
     * @return  self
     */ 
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get the value of adresseEntreprise
     */ 
    public function getAdresseEntreprise()
    {
        return $this->adresseEntreprise;
    }

    /**
     * Set the value of adresseEntreprise
     *
     * @return  self
     */ 
    public function setAdresseEntreprise($adresseEntreprise)
    {
        $this->adresseEntreprise = $adresseEntreprise;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of telephoneEntreprise
     */ 
    public function getTelephoneEntreprise()
    {
        return $this->telephoneEntreprise;
    }

    /**
     * Set the value of telephoneEntreprise
     *
     * @return  self
     */ 
    public function setTelephoneEntreprise($telephoneEntreprise)
    {
        $this->telephoneEntreprise = $telephoneEntreprise;

        return $this;
    }

    /**
     * Get the value of fax
     */ 
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set the value of fax
     *
     * @return  self
     */ 
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get the value of nombreStage
     */ 
    public function getNombreStage()
    {
        return $this->nombreStage;
    }

    /**
     * Set the value of nombreStage
     *
     * @return  self
     */ 
    public function setNombreStage($nombreStage)
    {
        $this->nombreStage = $nombreStage;

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