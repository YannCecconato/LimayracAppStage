<?php

class Pme {

    /* Déclaration des variables */
    private $idEntreprisePME = 0;

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */

    /**
     * Get the value of idEntreprisePME
     */ 
    public function getIdEntreprisePME()
    {
        return $this->idEntreprisePME;
    }

    /**
     * Set the value of idEntreprisePME
     *
     * @return  self
     */ 
    public function setIdEntreprisePME($idEntreprisePME)
    {
        $this->idEntreprisePME = $idEntreprisePME;

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