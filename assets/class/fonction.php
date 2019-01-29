<?php

class Fonction {

    /* Déclaration des variables */
    private $idFonction = 0;
    private $libelleFonction = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of idFonction
     */ 
    public function getIdFonction()
    {
        return $this->idFonction;
    }

    /**
     * Set the value of idFonction
     *
     * @return  self
     */ 
    public function setIdFonction($idFonction)
    {
        $this->idFonction = $idFonction;

        return $this;
    }

    /**
     * Get the value of libelleFonction
     */ 
    public function getLibelleFonction()
    {
        return $this->libelleFonction;
    }

    /**
     * Set the value of libelleFonction
     *
     * @return  self
     */ 
    public function setLibelleFonction($libelleFonction)
    {
        $this->libelleFonction = $libelleFonction;

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