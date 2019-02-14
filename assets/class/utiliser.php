<?php

class Utiliser {

    /* Déclaration des variables */
    private $idSujetUtiliser = 0;
    private $idRessourceUtiliser = 0;

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    }

    /**
     * Get the value of idSujetUtiliser
     */ 
    public function getIdSujetUtiliser()
    {
        return $this->idSujetUtiliser;
    }

    /**
     * Set the value of idSujetUtiliser
     *
     * @return  self
     */ 
    public function setIdSujetUtiliser($idSujetUtiliser)
    {
        $this->idSujetUtiliser = $idSujetUtiliser;

        return $this;
    }

    /**
     * Get the value of idRessourceUtiliser
     */ 
    public function getIdRessourceUtiliser()
    {
        return $this->idRessourceUtiliser;
    }

    /**
     * Set the value of idRessourceUtiliser
     *
     * @return  self
     */ 
    public function setIdRessourceUtiliser($idRessourceUtiliser)
    {
        $this->idRessourceUtiliser = $idRessourceUtiliser;

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
    }
}

?>