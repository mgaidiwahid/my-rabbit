<?php

namespace MR\BackOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="engraissement")
 */
class Engraissement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(name="numero_cage", type="integer")
     */
    private $numero_cage;     
    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    /**
     * @ORM\Column(name="nombre_laperaux", type="integer")
     */
    private $nombre_laperaux;  
    /**
     * @ORM\Column(name="poids", type="float")
     */
    private $poids;  
    /**
     * @ORM\Column(name="observation", type="text")
     */
    private $observation;  
    
    public function __construct()
    {

    $this->date = new \Datetime();
    }     
    /**
    
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
     * Set numeroCage
     *
     * @param integer $numeroCage
     *
     * @return Engraissement
     */
    public function setNumeroCage($numeroCage)
    {
        $this->numero_cage = $numeroCage;

        return $this;
    }

    /**
     * Get numeroCage
     *
     * @return integer
     */
    public function getNumeroCage()
    {
        return $this->numero_cage;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Engraissement
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nombreLaperaux
     *
     * @param integer $nombreLaperaux
     *
     * @return Engraissement
     */
    public function setNombreLaperaux($nombreLaperaux)
    {
        $this->nombre_laperaux = $nombreLaperaux;

        return $this;
    }

    /**
     * Get nombreLaperaux
     *
     * @return integer
     */
    public function getNombreLaperaux()
    {
        return $this->nombre_laperaux;
    }

    /**
     * Set poids
     *
     * @param float $poids
     *
     * @return Engraissement
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Engraissement
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }
}
