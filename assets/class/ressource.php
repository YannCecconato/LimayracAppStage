<?php

class Ressource {

    /* Déclaration des varibles */
    private $idressource = 0;
    private $libelleressource = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */

    /**
     * Get the value of idressource
     */ 
    public function getIdressource()
    {
        return $this->idressource;
    }

    /**
     * Set the value of idressource
     *
     * @return  self
     */ 
    public function setIdressource($idressource)
    {
        $this->idressource = $idressource;

        return $this;
    }

    /**
     * Get the value of libelleressource
     */ 
    public function getLibelleressource()
    {
        return $this->libelleressource;
    }

    /**
     * Set the value of libelleressource
     *
     * @return  self
     */ 
    public function setLibelleressource($libelleressource)
    {
        $this->libelleressource = $libelleressource;

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