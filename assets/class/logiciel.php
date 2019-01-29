<?php

class Logiciel {

    /* Déclaration des variables */
    private $idRessourceLogiciel = 0;

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of idRessourceLogiciel
     */ 
    public function getIdRessourceLogiciel()
    {
        return $this->idRessourceLogiciel;
    }

    /**
     * Set the value of idRessourceLogiciel
     *
     * @return  self
     */ 
    public function setIdRessourceLogiciel($idRessourceLogiciel)
    {
        $this->idRessourceLogiciel = $idRessourceLogiciel;

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