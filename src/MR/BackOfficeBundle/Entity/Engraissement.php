<?php

namespace MR\BackOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="engraissement")
 * @ORM\Entity(repositoryClass="MR\BackOfficeBundle\Repository\EngraissementRepository")
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
     * @ORM\Column(name="nombre_laperaux_sevrage", type="integer")
     */
    private $nombre_laperaux_sevrage;  
    /**
     * @ORM\Column(name="poids_sevrage", type="float")
     */
    private $poids_sevrage; 
    
    /**
     * @ORM\Column(name="nombre_laperaux", type="integer", nullable=true)
     */
    private $nombre_laperaux;  
    /**
     * @ORM\Column(name="poids", type="float", nullable=true)
     */
    private $poids;   
    
    /**
     * @ORM\Column(name="nombre_laperaux_vente", type="integer", nullable=true)
     */
    private $nombre_laperaux_vente;  
    /**
     * @ORM\Column(name="poids_vente", type="float", nullable=true)
     */
    private $poids_vente;     
    /**
     * @ORM\Column(name="observation", type="text")
     */
    private $observation;  

  /**
   * @ORM\ManyToOne(targetEntity="MR\BackOfficeBundle\Entity\Bande" , cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */

    private $bande; 
    
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

    /**
     * Set bande
     *
     * @param \MR\BackOfficeBundle\Entity\Bande $bande
     *
     * @return Engraissement
     */
    public function setBande(\MR\BackOfficeBundle\Entity\Bande $bande)
    {
        $this->bande = $bande;

        return $this;
    }

    /**
     * Get bande
     *
     * @return \MR\BackOfficeBundle\Entity\Bande
     */
    public function getBande()
    {
        return $this->bande;
    }

    /**
     * Set nombreLaperauxSevrage
     *
     * @param integer $nombreLaperauxSevrage
     *
     * @return Engraissement
     */
    public function setNombreLaperauxSevrage($nombreLaperauxSevrage)
    {
        $this->nombre_laperaux_sevrage = $nombreLaperauxSevrage;

        return $this;
    }

    /**
     * Get nombreLaperauxSevrage
     *
     * @return integer
     */
    public function getNombreLaperauxSevrage()
    {
        return $this->nombre_laperaux_sevrage;
    }

    /**
     * Set poidsSevrage
     *
     * @param float $poidsSevrage
     *
     * @return Engraissement
     */
    public function setPoidsSevrage($poidsSevrage)
    {
        $this->poids_sevrage = $poidsSevrage;

        return $this;
    }

    /**
     * Get poidsSevrage
     *
     * @return float
     */
    public function getPoidsSevrage()
    {
        return $this->poids_sevrage;
    }

    /**
     * Set nombreLaperauxVente
     *
     * @param integer $nombreLaperauxVente
     *
     * @return Engraissement
     */
    public function setNombreLaperauxVente($nombreLaperauxVente)
    {
        $this->nombre_laperaux_vente = $nombreLaperauxVente;

        return $this;
    }

    /**
     * Get nombreLaperauxVente
     *
     * @return integer
     */
    public function getNombreLaperauxVente()
    {
        return $this->nombre_laperaux_vente;
    }

    /**
     * Set poidsVente
     *
     * @param float $poidsVente
     *
     * @return Engraissement
     */
    public function setPoidsVente($poidsVente)
    {
        $this->poids_vente = $poidsVente;

        return $this;
    }

    /**
     * Get poidsVente
     *
     * @return float
     */
    public function getPoidsVente()
    {
        return $this->poids_vente;
    }
}
