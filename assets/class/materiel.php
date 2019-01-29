<?php

class Materiel {

    /* Déclaration des variables */
    private $idRessourceMateriel = 0;

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of idRessourceMateriel
     */ 
    public function getIdRessourceMateriel()
    {
        return $this->idRessourceMateriel;
    }

    /**
     * Set the value of idRessourceMateriel
     *
     * @return  self
     */ 
    public function setIdRessourceMateriel($idRessourceMateriel)
    {
        $this->idRessourceMateriel = $idRessourceMateriel;

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