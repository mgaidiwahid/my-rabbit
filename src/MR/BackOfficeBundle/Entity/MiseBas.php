<?php

namespace MR\BackOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="misebas")
 * @ORM\Entity(repositoryClass="MR\BackOfficeBundle\Repository\MiseBasRepository")
 */
class MiseBas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(name="date_mise_bas", type="datetime")
     */
    private $date_mise_bas;
    /**
     * @ORM\Column(name="nombre_vivants", type="integer")
     */
    private $nombre_vivants;    
    /**
     * @ORM\Column(name="nombre_morts", type="integer")
     */
    private $nombre_morts;
    /**
     * @ORM\Column(name="nombre_adoptes", type="integer")
     */
    private $nombre_adoptes; 
    /**
     * @ORM\Column(name="nombre_rejetes", type="integer")
     */
    private $nombre_rejetes;
    
   /**
   * @ORM\OneToOne(targetEntity="MR\BackOfficeBundle\Entity\Lapin", cascade={"persist"})
   */
   private $lapin;
  
    public function __construct()
    {

    $this->date_mise_bas = new \Datetime();
    
    }     
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
     * Set dateMiseBas
     *
     * @param \DateTime $dateMiseBas
     *
     * @return MiseBas
     */
    public function setDateMiseBas($dateMiseBas)
    {
        $this->date_mise_bas = $dateMiseBas;

        return $this;
    }

    /**
     * Get dateMiseBas
     *
     * @return \DateTime
     */
    public function getDateMiseBas()
    {
        return $this->date_mise_bas;
    }

    /**
     * Set nombreVivants
     *
     * @param integer $nombreVivants
     *
     * @return MiseBas
     */
    public function setNombreVivants($nombreVivants)
    {
        $this->nombre_vivants = $nombreVivants;

        return $this;
    }

    /**
     * Get nombreVivants
     *
     * @return integer
     */
    public function getNombreVivants()
    {
        return $this->nombre_vivants;
    }

    /**
     * Set nombreMorts
     *
     * @param integer $nombreMorts
     *
     * @return MiseBas
     */
    public function setNombreMorts($nombreMorts)
    {
        $this->nombre_morts = $nombreMorts;

        return $this;
    }

    /**
     * Get nombreMorts
     *
     * @return integer
     */
    public function getNombreMorts()
    {
        return $this->nombre_morts;
    }

    /**
     * Set nombreAdoptes
     *
     * @param integer $nombreAdoptes
     *
     * @return MiseBas
     */
    public function setNombreAdoptes($nombreAdoptes)
    {
        $this->nombre_adoptes = $nombreAdoptes;

        return $this;
    }

    /**
     * Get nombreAdoptes
     *
     * @return integer
     */
    public function getNombreAdoptes()
    {
        return $this->nombre_adoptes;
    }

    /**
     * Set nombreRejetes
     *
     * @param integer $nombreRejetes
     *
     * @return MiseBas
     */
    public function setNombreRejetes($nombreRejetes)
    {
        $this->nombre_rejetes = $nombreRejetes;

        return $this;
    }

    /**
     * Get nombreRejetes
     *
     * @return integer
     */
    public function getNombreRejetes()
    {
        return $this->nombre_rejetes;
    }

    /**
     * Set lapin
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $lapin
     *
     * @return MiseBas
     */
    public function setLapin(\MR\BackOfficeBundle\Entity\Lapin $lapin = null)
    {
        return $this->lapin = $lapin;

        
    }

    /**
     * Get lapin
     *
     * @return \MR\BackOfficeBundle\Entity\Lapin
     */
    public function getLapin()
    {
        return $this->lapin;
    }
}
