<?php

class Sujet {

    /* Déclaration des variables */
    private $idSujet = 0;
    private $descriptifSujet = "?";
    private $dateDebut = "?";
    private $dateFin = "?";
    private $idEleveSujet = 0;
    private $idStatutSujet = 0;
    private $idProfesseurSujet = 0;
    private $idEntrepriseSujet = 0;
    private $idContactSujet = 0;

    /* function construct */
    function __construct(array $tableau = null) {
        if ($tableau != null) {
            $this->hydrater($tableau);
        }
    } /* function construct */

    /**
     * Get the value of idSujet
     */ 
    public function getIdSujet()
    {
        return $this->idSujet;
    }

    /**
     * Set the value of idSujet
     *
     * @return  self
     */ 
    public function setIdSujet($idSujet)
    {
        $this->idSujet = $idSujet;

        return $this;
    }

    /**
     * Get the value of descriptifSujet
     */ 
    public function getDescriptifSujet()
    {
        return $this->descriptifSujet;
    }

    /**
     * Set the value of descriptifSujet
     *
     * @return  self
     */ 
    public function setDescriptifSujet($descriptifSujet)
    {
        $this->descriptifSujet = $descriptifSujet;

        return $this;
    }

    /**
     * Get the value of dateDebut
     */ 
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */ 
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get the value of dateFin
     */ 
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set the value of dateFin
     *
     * @return  self
     */ 
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    
    /**
     * Get the value of idEleveSujet
     */ 
    public function getIdEleveSujet()
    {
        return $this->idEleveSujet;
    }

    /**
     * Set the value of idEleveSujet
     *
     * @return  self
     */ 
    public function setIdEleveSujet($idEleveSujet)
    {
        $this->idEleveSujet = $idEleveSujet;

        return $this;
    }


    /**
     * Get the value of idStatutSujet
     */ 
    public function getIdStatutSujet()
    {
        return $this->idStatutSujet;
    }

    /**
     * Set the value of idStatutSujet
     *
     * @return  self
     */ 
    public function setIdStatutSujet($idStatutSujet)
    {
        $this->idStatutSujet = $idStatutSujet;

        return $this;
    }

    /**
     * Get the value of idProfesseurSujet
     */ 
    public function getIdProfesseurSujet()
    {
        return $this->idProfesseurSujet;
    }

    /**
     * Set the value of idProfesseurSujet
     *
     * @return  self
     */ 
    public function setIdProfesseurSujet($idProfesseurSujet)
    {
        $this->idProfesseurSujet = $idProfesseurSujet;

        return $this;
    }

    /**
     * Get the value of idEntrepriseSujet
     */ 
    public function getIdEntrepriseSujet()
    {
        return $this->idEntrepriseSujet;
    }

    /**
     * Set the value of idEntrepriseSujet
     *
     * @return  self
     */ 
    public function setIdEntrepriseSujet($idEntrepriseSujet)
    {
        $this->idEntrepriseSujet = $idEntrepriseSujet;

        return $this;
    }

    /**
     * Get the value of idContactSujet
     */ 
    public function getIdContactSujet()
    {
        return $this->idContactSujet;
    }

    /**
     * Set the value of idContactSujet
     *
     * @return  self
     */ 
    public function setIdContactSujet($idContactSujet)
    {
        $this->idContactSujet = $idContactSujet;

        return $this;
    }

    /**
     * Get the value of idRessourceSujet
     */ 
    public function getIdRessourceSujet()
    {
        return $this->idRessourceSujet;
    }

    /**
     * Set the value of idRessourceSujet
     *
     * @return  self
     */ 
    public function setIdRessourceSujet($idRessourceSujet)
    {
        $this->idRessourceSujet = $idRessourceSujet;

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