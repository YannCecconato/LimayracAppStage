<?php

class Genre {

    /* Déclaration des variables */
    private $libelleGenre = "?";
    private $descriptifGenre = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    }

    /**
     * Get the value of libelleGenre
     */ 
    public function getLibelleGenre()
    {
        return $this->libelleGenre;
    }

    /**
     * Set the value of libelleGenre
     *
     * @return  self
     */ 
    public function setLibelleGenre($libelleGenre)
    {
        $this->libelleGenre = $libelleGenre;

        return $this;
    }

    /**
     * Get the value of descriptifGenre
     */ 
    public function getDescriptifGenre()
    {
        return $this->descriptifGenre;
    }

    /**
     * Set the value of descriptifGenre
     *
     * @return  self
     */ 
    public function setDescriptifGenre($descriptifGenre)
    {
        $this->descriptifGenre = $descriptifGenre;

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