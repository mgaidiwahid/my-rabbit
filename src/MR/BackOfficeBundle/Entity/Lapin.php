<?php

namespace MR\BackOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="lapin")
 */
class Lapin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $poids;
    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date_naissance;
    /**
     * @ORM\Column(name="sexe", type="boolean")
     */
    private $sexe;    
    /**
     * Get id
     *
     * @return integer
     */
    public function __construct()
    {

    $this->date_naissance = new \Datetime();
    }    
    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set poids
     *
     * @param string $poids
     *
     * @return Lapin
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Lapin
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->date_naissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     *
     * @return Lapin
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean
     */
    public function getSexe()
    {
        return $this->sexe;
    }
}
