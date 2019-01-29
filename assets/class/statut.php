<?php

class Statut {

    /* Déclaration des variables */
    private $idStatut = 0;
    private $libelleStatut = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of idStatut
     */ 
    public function getIdStatut()
    {
        return $this->idStatut;
    }

    /**
     * Set the value of idStatut
     *
     * @return  self
     */ 
    public function setIdStatut($idStatut)
    {
        $this->idStatut = $idStatut;

        return $this;
    }

    /**
     * Get the value of libelleStatut
     */ 
    public function getLibelleStatut()
    {
        return $this->libelleStatut;
    }

    /**
     * Set the value of libelleStatut
     *
     * @return  self
     */ 
    public function setLibelleStatut($libelleStatut)
    {
        $this->libelleStatut = $libelleStatut;

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