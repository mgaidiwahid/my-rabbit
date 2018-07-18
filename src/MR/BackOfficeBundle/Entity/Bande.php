<?php

namespace MR\BackOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Entity
 * @ORM\Table(name="bande")
 * @ORM\Entity(repositoryClass="MR\BackOfficeBundle\Repository\BandeRepository")
 */
class Bande
{
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;
    
    /**
     * @ORM\Column(name="date_debut", type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(name="date_fin", type="date")
     */
    private $date_fin;    

    public function __toString() {
        
    return (string) $this->getLibelle();
    }
    
    public function __construct()
    {

    $this->date_debut = new \Datetime();
    $this->date_fin = new \Datetime();
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Bande
     */
    public function setDateDebut($dateDebut)
    {
        $this->date_debut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Bande
     */
    public function setDateFin($dateFin)
    {
        $this->date_fin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Bande
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
