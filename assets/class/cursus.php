<?php

class Cursus {

    /* Déclaration des variables */
    private $libelleCursus = "?";
    private $descriptifCursus = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */

    /**
     * Get the value of libelleCursus
     */ 
    public function getLibelleCursus()
    {
        return $this->libelleCursus;
    }

    /**
     * Set the value of libelleCursus
     *
     * @return  self
     */ 
    public function setLibelleCursus($libelleCursus)
    {
        $this->libelleCursus = $libelleCursus;

        return $this;
    }

    /**
     * Get the value of descriptifCursus
     */ 
    public function getDescriptifCursus()
    {
        return $this->descriptifCursus;
    }

    /**
     * Set the value of descriptifCursus
     *
     * @return  self
     */ 
    public function setDescriptifCursus($descriptifCursus)
    {
        $this->descriptifCursus = $descriptifCursus;

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