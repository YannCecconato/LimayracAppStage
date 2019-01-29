<?php

class Sujet {

    /* Déclaration des variables */
    private $idSujet = 0;
    private $descriptifSujet = "?";
    private $dateDebut = "?";
    private $dateFin = "?";
    private $absence = 0;
    private $retard = 0;
    private $integrationEquipe = 0;
    private $autonomie = 0;
    private $adaptation = 0;
    private $realisationSatisfaisante = 0;
    private $curiosite = 0;
    private $etudiantStage2nd = 0;
    private $participationE6 = 0;
    private $idEleveSujet = 0;
    private $idProfesseurSujet = 0;
    private $idEntrepriseSujet = 0;
    private $idContactSujet = 0;
    private $idRessourceSujet = 0;

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
     * Get the value of absence
     */ 
    public function getAbsence()
    {
        return $this->absence;
    }

    /**
     * Set the value of absence
     *
     * @return  self
     */ 
    public function setAbsence($absence)
    {
        $this->absence = $absence;

        return $this;
    }

    /**
     * Get the value of retard
     */ 
    public function getRetard()
    {
        return $this->retard;
    }

    /**
     * Set the value of retard
     *
     * @return  self
     */ 
    public function setRetard($retard)
    {
        $this->retard = $retard;

        return $this;
    }

    /**
     * Get the value of integrationEquipe
     */ 
    public function getIntegrationEquipe()
    {
        return $this->integrationEquipe;
    }

    /**
     * Set the value of integrationEquipe
     *
     * @return  self
     */ 
    public function setIntegrationEquipe($integrationEquipe)
    {
        $this->integrationEquipe = $integrationEquipe;

        return $this;
    }

    /**
     * Get the value of autonomie
     */ 
    public function getAutonomie()
    {
        return $this->autonomie;
    }

    /**
     * Set the value of autonomie
     *
     * @return  self
     */ 
    public function setAutonomie($autonomie)
    {
        $this->autonomie = $autonomie;

        return $this;
    }

    /**
     * Get the value of adaptation
     */ 
    public function getAdaptation()
    {
        return $this->adaptation;
    }

    /**
     * Set the value of adaptation
     *
     * @return  self
     */ 
    public function setAdaptation($adaptation)
    {
        $this->adaptation = $adaptation;

        return $this;
    }

    /**
     * Get the value of realisationSatisfaisante
     */ 
    public function getRealisationSatisfaisante()
    {
        return $this->realisationSatisfaisante;
    }

    /**
     * Set the value of realisationSatisfaisante
     *
     * @return  self
     */ 
    public function setRealisationSatisfaisante($realisationSatisfaisante)
    {
        $this->realisationSatisfaisante = $realisationSatisfaisante;

        return $this;
    }

    /**
     * Get the value of curiosite
     */ 
    public function getCuriosite()
    {
        return $this->curiosite;
    }

    /**
     * Set the value of curiosite
     *
     * @return  self
     */ 
    public function setCuriosite($curiosite)
    {
        $this->curiosite = $curiosite;

        return $this;
    }

    /**
     * Get the value of etudiantStage2nd
     */ 
    public function getEtudiantStage2nd()
    {
        return $this->etudiantStage2nd;
    }

    /**
     * Set the value of etudiantStage2nd
     *
     * @return  self
     */ 
    public function setEtudiantStage2nd($etudiantStage2nd)
    {
        $this->etudiantStage2nd = $etudiantStage2nd;

        return $this;
    }

    /**
     * Get the value of participationE6
     */ 
    public function getParticipationE6()
    {
        return $this->participationE6;
    }

    /**
     * Set the value of participationE6
     *
     * @return  self
     */ 
    public function setParticipationE6($participationE6)
    {
        $this->participationE6 = $participationE6;

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