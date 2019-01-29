<?php

class Qualite {

    /* Déclaration des variables */
    private $idQualite = 0;
    private $libelleQualite = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of idQualite
     */ 
    public function getIdQualite()
    {
        return $this->idQualite;
    }

    /**
     * Set the value of idQualite
     *
     * @return  self
     */ 
    public function setIdQualite($idQualite)
    {
        $this->idQualite = $idQualite;

        return $this;
    }

    /**
     * Get the value of libelleQualite
     */ 
    public function getLibelleQualite()
    {
        return $this->libelleQualite;
    }

    /**
     * Set the value of libelleQualite
     *
     * @return  self
     */ 
    public function setLibelleQualite($libelleQualite)
    {
        $this->libelleQualite = $libelleQualite;

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