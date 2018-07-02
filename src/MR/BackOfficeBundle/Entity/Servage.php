<?php

namespace MR\BackOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="servage")
 */
class Servage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
  /**
   * @ORM\ManyToOne(targetEntity="MR\BackOfficeBundle\Entity\Lapin", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $femelle ;

    /**
     * @ORM\Column(name="date_servage", type="datetime")
     */
    private $date_servage;
   
    /**
     * @ORM\Column(name="nbr_lapereaux", type="integer")
     */
    private $nbr_lapereaux;
    /**
     * @ORM\Column(name="poids_totale", type="float")
     */
    private $poids_totale;
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateServage
     *
     * @param \DateTime $dateServage
     *
     * @return Servage
     */
    public function setDateServage($dateServage)
    {
        $this->date_servage = $dateServage;

        return $this;
    }

    /**
     * Get dateServage
     *
     * @return \DateTime
     */
    public function getDateServage()
    {
        return $this->date_servage;
    }

    /**
     * Set nbrLapereaux
     *
     * @param integer $nbrLapereaux
     *
     * @return Servage
     */
    public function setNbrLapereaux($nbrLapereaux)
    {
        $this->nbr_lapereaux = $nbrLapereaux;

        return $this;
    }

    /**
     * Get nbrLapereaux
     *
     * @return integer
     */
    public function getNbrLapereaux()
    {
        return $this->nbr_lapereaux;
    }

    /**
     * Set poidsTotale
     *
     * @param float $poidsTotale
     *
     * @return Servage
     */
    public function setPoidsTotale($poidsTotale)
    {
        $this->poids_totale = $poidsTotale;

        return $this;
    }

    /**
     * Get poidsTotale
     *
     * @return float
     */
    public function getPoidsTotale()
    {
        return $this->poids_totale;
    }

    /**
     * Set idLapinFemelle
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $idLapinFemelle
     *
     * @return Servage
     */
    public function setIdLapinFemelle(\MR\BackOfficeBundle\Entity\Lapin $idLapinFemelle)
    {
        $this->id_lapin_femelle = $idLapinFemelle;

        return $this;
    }

    /**
     * Get idLapinFemelle
     *
     * @return \MR\BackOfficeBundle\Entity\Lapin
     */
    public function getIdLapinFemelle()
    {
        return $this->id_lapin_femelle;
    }

    /**
     * Set femelle
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $femelle
     *
     * @return Servage
     */
    public function setFemelle(\MR\BackOfficeBundle\Entity\Lapin $femelle)
    {
        $this->femelle = $femelle;

        return $this;
    }

    /**
     * Get femelle
     *
     * @return \MR\BackOfficeBundle\Entity\Lapin
     */
    public function getFemelle()
    {
        return $this->femelle;
    }
}
