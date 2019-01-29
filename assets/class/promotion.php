<?php

class Promotion {

    /* Déclaration des variables */
    private $libellePromotion = "?";
    private $descriptifPromotion = "?";
    private $nombreEleve = "?";
    private $libelleCursusPromotion = "?";

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */


    /**
     * Get the value of libellePromotion
     */ 
    public function getLibellePromotion()
    {
        return $this->libellePromotion;
    }

    /**
     * Set the value of libellePromotion
     *
     * @return  self
     */ 
    public function setLibellePromotion($libellePromotion)
    {
        $this->libellePromotion = $libellePromotion;

        return $this;
    }

    /**
     * Get the value of descriptifPromotion
     */ 
    public function getDescriptifPromotion()
    {
        return $this->descriptifPromotion;
    }

    /**
     * Set the value of descriptifPromotion
     *
     * @return  self
     */ 
    public function setDescriptifPromotion($descriptifPromotion)
    {
        $this->descriptifPromotion = $descriptifPromotion;

        return $this;
    }

    /**
     * Get the value of nombreEleve
     */ 
    public function getNombreEleve()
    {
        return $this->nombreEleve;
    }

    /**
     * Set the value of nombreEleve
     *
     * @return  self
     */ 
    public function setNombreEleve($nombreEleve)
    {
        $this->nombreEleve = $nombreEleve;

        return $this;
    }

    /**
     * Get the value of libelleCursusPromotion
     */ 
    public function getLibelleCursusPromotion()
    {
        return $this->libelleCursusPromotion;
    }

    /**
     * Set the value of libelleCursusPromotion
     *
     * @return  self
     */ 
    public function setLibelleCursusPromotion($libelleCursusPromotion)
    {
        $this->libelleCursusPromotion = $libelleCursusPromotion;

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