<?php

class Retrouver {

    /* Déclaration des variables */
    private $idSujetRetrouver = 0;
    private $idMotCleRetrouver = 0;

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of idSujetRetrouver
     */ 
    public function getIdSujetRetrouver()
    {
        return $this->idSujetRetrouver;
    }

    /**
     * Set the value of idSujetRetrouver
     *
     * @return  self
     */ 
    public function setIdSujetRetrouver($idSujetRetrouver)
    {
        $this->idSujetRetrouver = $idSujetRetrouver;

        return $this;
    }

    /**
     * Get the value of idMotCleRetrouver
     */ 
    public function getIdMotCleRetrouver()
    {
        return $this->idMotCleRetrouver;
    }

    /**
     * Set the value of idMotCleRetrouver
     *
     * @return  self
     */ 
    public function setIdMotCleRetrouver($idMotCleRetrouver)
    {
        $this->idMotCleRetrouver = $idMotCleRetrouver;

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