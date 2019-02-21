<?php

class Ressource {

    /* Déclaration des varibles */
    private $idRessource = 0;
    private $libelleRessource = "?";
    private $typeRessource = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    }

    /**
     * Get the value of idRessource
     */ 
    public function getIdRessource()
    {
        return $this->idRessource;
    }

    /**
     * Set the value of idRessource
     *
     * @return  self
     */ 
    public function setIdRessource($idRessource)
    {
        $this->idRessource = $idRessource;

        return $this;
    }

    /**
     * Get the value of libelleRessource
     */ 
    public function getLibelleRessource()
    {
        return $this->libelleRessource;
    }

    /**
     * Set the value of libelleRessource
     *
     * @return  self
     */ 
    public function setLibelleRessource($libelleRessource)
    {
        $this->libelleRessource = $libelleRessource;

        return $this;
    }

    /**
     * Get the value of typeRessource
     */ 
    public function getTypeRessource()
    {
        return $this->typeRessource;
    }

    /**
     * Set the value of typeRessource
     *
     * @return  self
     */ 
    public function setTypeRessource($typeRessource)
    {
        $this->typeRessource = $typeRessource;

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