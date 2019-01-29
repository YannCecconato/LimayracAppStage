<?php

class GrandeEntreprise {

    /* Déclaration des variables */
    private $division = "?";
    private $idEntrepriseGE = 0;

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of division
     */ 
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set the value of division
     *
     * @return  self
     */ 
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get the value of idEntrepriseGE
     */ 
    public function getIdEntrepriseGE()
    {
        return $this->idEntrepriseGE;
    }

    /**
     * Set the value of idEntrepriseGE
     *
     * @return  self
     */ 
    public function setIdEntrepriseGE($idEntrepriseGE)
    {
        $this->idEntrepriseGE = $idEntrepriseGE;

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