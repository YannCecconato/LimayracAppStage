<?php

class MotCle {

    /* Déclaration des variables */
    private $idMotCle = 0;
    private $libelleMotCle = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */

    /**
     * Get the value of idMotCle
     */ 
    public function getIdMotCle()
    {
        return $this->idMotCle;
    }

    /**
     * Set the value of idMotCle
     *
     * @return  self
     */ 
    public function setIdMotCle($idMotCle)
    {
        $this->idMotCle = $idMotCle;

        return $this;
    }

    /**
     * Get the value of libelleMotCle
     */ 
    public function getLibelleMotCle()
    {
        return $this->libelleMotCle;
    }

    /**
     * Set the value of libelleMotCle
     *
     * @return  self
     */ 
    public function setLibelleMotCle($libelleMotCle)
    {
        $this->libelleMotCle = $libelleMotCle;

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