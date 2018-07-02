<?php

namespace MR\BackOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="saillie")
 */
class Saillie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
   

    /**
     * @ORM\Column(name="date_saillie", type="datetime")
     */
    private $date_saillie;
   
    /**
     * @ORM\Column(name="palpation", type="boolean")
     */
    private $palpation;

  /**
   * @ORM\ManyToOne(targetEntity="MR\BackOfficeBundle\Entity\Lapin", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */

    private $femelle;

  /**
   * @ORM\ManyToOne(targetEntity="MR\BackOfficeBundle\Entity\Lapin" , cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */

    private $male;
    
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
     * Set dateSaillie
     *
     * @param \DateTime $dateSaillie
     *
     * @return Saillie
     */
    public function setDateSaillie($dateSaillie)
    {
        $this->date_saillie = $dateSaillie;

        return $this;
    }

    /**
     * Get dateSaillie
     *
     * @return \DateTime
     */
    public function getDateSaillie()
    {
        return $this->date_saillie;
    }

    /**
     * Set palpation
     *
     * @param string $palpation
     *
     * @return Saillie
     */
    public function setPalpation($palpation)
    {
        $this->palpation = $palpation;

        return $this;
    }

    /**
     * Get palpation
     *
     * @return string
     */
    public function getPalpation()
    {
        return $this->palpation;
    }

    /**
     * Set idLapinFemelle
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $idLapinFemelle
     *
     * @return Saillie
     */
    public function setIdLapinFemelle(\MR\BackOfficeBundle\Entity\Lapin $idLapinFemelle = null)
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
     * Set idLapinMale
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $idLapinMale
     *
     * @return Saillie
     */
    public function setIdLapinMale(\MR\BackOfficeBundle\Entity\Lapin $idLapinMale = null)
    {
        $this->id_lapin_male = $idLapinMale;

        return $this;
    }

    /**
     * Get idLapinMale
     *
     * @return \MR\BackOfficeBundle\Entity\Lapin
     */
    public function getIdLapinMale()
    {
        return $this->id_lapin_male;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->id_lapin_femelle = new \Doctrine\Common\Collections\ArrayCollection();
        $this->id_lapin_male = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idLapinFemelle
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $idLapinFemelle
     *
     * @return Saillie
     */
    public function addIdLapinFemelle(\MR\BackOfficeBundle\Entity\Lapin $idLapinFemelle)
    {
        $this->id_lapin_femelle[] = $idLapinFemelle;

        return $this;
    }

    /**
     * Remove idLapinFemelle
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $idLapinFemelle
     */
    public function removeIdLapinFemelle(\MR\BackOfficeBundle\Entity\Lapin $idLapinFemelle)
    {
        $this->id_lapin_femelle->removeElement($idLapinFemelle);
    }

    /**
     * Add idLapinMale
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $idLapinMale
     *
     * @return Saillie
     */
    public function addIdLapinMale(\MR\BackOfficeBundle\Entity\Lapin $idLapinMale)
    {
        $this->id_lapin_male[] = $idLapinMale;

        return $this;
    }

    /**
     * Remove idLapinMale
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $idLapinMale
     */
    public function removeIdLapinMale(\MR\BackOfficeBundle\Entity\Lapin $idLapinMale)
    {
        $this->id_lapin_male->removeElement($idLapinMale);
    }

    /**
     * Set sailliesMale
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailliesMale
     *
     * @return Saillie
     */
    public function setSailliesMale(\MR\BackOfficeBundle\Entity\Saillie $sailliesMale = null)
    {
        $this->saillies_male = $sailliesMale;

        return $this;
    }

    /**
     * Get sailliesMale
     *
     * @return \MR\BackOfficeBundle\Entity\Saillie
     */
    public function getSailliesMale()
    {
        return $this->saillies_male;
    }

    /**
     * Set sailliesFemelle
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailliesFemelle
     *
     * @return Saillie
     */
    public function setSailliesFemelle(\MR\BackOfficeBundle\Entity\Saillie $sailliesFemelle = null)
    {
        $this->saillies_femelle = $sailliesFemelle;

        return $this;
    }

    /**
     * Get sailliesFemelle
     *
     * @return \MR\BackOfficeBundle\Entity\Saillie
     */
    public function getSailliesFemelle()
    {
        return $this->saillies_femelle;
    }

    /**
     * Set femelle
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $femelle
     *
     * @return Saillie
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

    /**
     * Set male
     *
     * @param \MR\BackOfficeBundle\Entity\Lapin $male
     *
     * @return Saillie
     */
    public function setMale(\MR\BackOfficeBundle\Entity\Lapin $male)
    {
        $this->male = $male;

        return $this;
    }

    /**
     * Get male
     *
     * @return \MR\BackOfficeBundle\Entity\Lapin
     */
    public function getMale()
    {
        return $this->male;
    }
}
