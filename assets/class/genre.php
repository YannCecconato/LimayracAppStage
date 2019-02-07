<?php

class Genre {

    /* Déclaration des variables */
    private $idGenre = 0;
    private $civilite = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */
    

    /**
     * Get the value of idGenre
     */ 
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Set the value of idGenre
     *
     * @return  self
     */ 
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    /**
     * Get the value of civilite
     */ 
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set the value of civilite
     *
     * @return  self
     */ 
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

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