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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date_naissance;
    /**
     * @ORM\Column(name="sexe", type="boolean")
     */
    private $sexe;  
    /**
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;  
    /**
     * @ORM\Column(name="couleur", type="string", length=255)
     */
    private $couleur;
    /**
     * @ORM\Column(name="race", type="string", length=255)
     */
    private $race; 
    

  
    public function __toString() {
        
    return (string) $this->getNumero();
    }
    
    public function __construct()
    {

    $this->date_naissance = new \Datetime();
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

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Lapin
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Lapin
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Lapin
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }


    /**
     * Add sailly
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailly
     *
     * @return Lapin
     */
    public function addSailly(\MR\BackOfficeBundle\Entity\Saillie $sailly)
    {
        $this->saillies[] = $sailly;

        return $this;
    }

    /**
     * Remove sailly
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailly
     */
    public function removeSailly(\MR\BackOfficeBundle\Entity\Saillie $sailly)
    {
        $this->saillies->removeElement($sailly);
    }

    /**
     * Get saillies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaillies()
    {
        return $this->saillies;
    }

    /**
     * Add sailliesMale
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailliesMale
     *
     * @return Lapin
     */
    public function addSailliesMale(\MR\BackOfficeBundle\Entity\Saillie $sailliesMale)
    {
        $this->saillies_male[] = $sailliesMale;

        return $this;
    }

    /**
     * Remove sailliesMale
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailliesMale
     */
    public function removeSailliesMale(\MR\BackOfficeBundle\Entity\Saillie $sailliesMale)
    {
        $this->saillies_male->removeElement($sailliesMale);
    }

    /**
     * Get sailliesMale
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSailliesMale()
    {
        return $this->saillies_male;
    }

    /**
     * Add sailliesFemelle
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailliesFemelle
     *
     * @return Lapin
     */
    public function addSailliesFemelle(\MR\BackOfficeBundle\Entity\Saillie $sailliesFemelle)
    {
        $this->saillies_femelle[] = $sailliesFemelle;

        return $this;
    }

    /**
     * Remove sailliesFemelle
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailliesFemelle
     */
    public function removeSailliesFemelle(\MR\BackOfficeBundle\Entity\Saillie $sailliesFemelle)
    {
        $this->saillies_femelle->removeElement($sailliesFemelle);
    }

    /**
     * Get sailliesFemelle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSailliesFemelle()
    {
        return $this->saillies_femelle;
    }

    /**
     * Set sailliesMale
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailliesMale
     *
     * @return Lapin
     */
    public function setSailliesMale(\MR\BackOfficeBundle\Entity\Saillie $sailliesMale = null)
    {
        $this->saillies_male = $sailliesMale;

        return $this;
    }

    /**
     * Set sailliesFemelle
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $sailliesFemelle
     *
     * @return Lapin
     */
    public function setSailliesFemelle(\MR\BackOfficeBundle\Entity\Saillie $sailliesFemelle = null)
    {
        $this->saillies_femelle = $sailliesFemelle;

        return $this;
    }

    /**
     * Set saillies
     *
     * @param \MR\BackOfficeBundle\Entity\Saillie $saillies
     *
     * @return Lapin
     */
    public function setSaillies(\MR\BackOfficeBundle\Entity\Saillie $saillies)
    {
        $this->saillies = $saillies;

        return $this;
    }
}
