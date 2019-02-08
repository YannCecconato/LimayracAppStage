<?php

class Option {

    /* Déclaration des variables */
    private $libelleOption = "?";
    private $descriptifOption = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
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
    }
}

?>