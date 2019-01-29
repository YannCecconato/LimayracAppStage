<?php

class Option {

    /* Déclaration des variables */
    private $idOption = 0;
    private $libelleOption = "?";
    private $descriptifOption = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of idOption
     */ 
    public function getIdOption()
    {
        return $this->idOption;
    }

    /**
     * Set the value of idOption
     *
     * @return  self
     */ 
    public function setIdOption($idOption)
    {
        $this->idOption = $idOption;

        return $this;
    }

    /**
     * Get the value of libelleOption
     */ 
    public function getLibelleOption()
    {
        return $this->libelleOption;
    }

    /**
     * Set the value of libelleOption
     *
     * @return  self
     */ 
    public function setLibelleOption($libelleOption)
    {
        $this->libelleOption = $libelleOption;

        return $this;
    }

    /**
     * Get the value of descriptifOption
     */ 
    public function getDescriptifOption()
    {
        return $this->descriptifOption;
    }

    /**
     * Set the value of descriptifOption
     *
     * @return  self
     */ 
    public function setDescriptifOption($descriptifOption)
    {
        $this->descriptifOption = $descriptifOption;

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