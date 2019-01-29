<?php

class Distinguer {

    /* Déclaration des variables */
    private $idProfesseurDistinguer = 0;
    private $idQualiteDistinguer = 0;

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */

    /**
     * Get the value of idProfesseurDistinguer
     */ 
    public function getIdProfesseurDistinguer()
    {
        return $this->idProfesseurDistinguer;
    }

    /**
     * Set the value of idProfesseurDistinguer
     *
     * @return  self
     */ 
    public function setIdProfesseurDistinguer($idProfesseurDistinguer)
    {
        $this->idProfesseurDistinguer = $idProfesseurDistinguer;

        return $this;
    }

    /**
     * Get the value of idQualiteDistinguer
     */ 
    public function getIdQualiteDistinguer()
    {
        return $this->idQualiteDistinguer;
    }

    /**
     * Set the value of idQualiteDistinguer
     *
     * @return  self
     */ 
    public function setIdQualiteDistinguer($idQualiteDistinguer)
    {
        $this->idQualiteDistinguer = $idQualiteDistinguer;

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