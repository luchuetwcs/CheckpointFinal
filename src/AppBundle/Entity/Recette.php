<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Recettes
 *
 * @ORM\Table(name="recettes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecetteRepository")
 */
class Recette
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPersonne", type="integer")
     */
    private $nbPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=30)
     */
    private $difficulte;

    /**
     * @var string
     *
     * @ORM\Column(name="cout", type="string", length=30)
     */
    private $cout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="preparation", type="time")
     */
    private $preparation;

    /**
     * @var string
     * @ORM\Column(name="etape", type="text")
     */
    private $etape;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cuisson", type="time")
     */
    private $cuisson;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Composition", mappedBy="recette", cascade="all", orphanRemoval=true, fetch="EAGER")
     * @ORM\JoinColumn(nullable=false)
     */
    private $compositions;


    public function __construct()
    {
        $this->compositions = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbPersonne
     *
     * @param integer $nbPersonne
     *
     * @return Recette
     */
    public function setNbPersonne($nbPersonne)
    {
        $this->nbPersonne = $nbPersonne;

        return $this;
    }

    /**
     * Get nbPersonne
     *
     * @return int
     */
    public function getNbPersonne()
    {
        return $this->nbPersonne;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     *
     * @return Recette
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set cout
     *
     * @param string $cout
     *
     * @return Recette
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return string
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set preparation
     *
     * @param \DateTime $preparation
     *
     * @return Recette
     */
    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;

        return $this;
    }

    /**
     * Get preparation
     *
     * @return \DateTime
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * Set cuisson
     *
     * @param \DateTime $cuisson
     *
     * @return Recette
     */
    public function setCuisson($cuisson)
    {
        $this->cuisson = $cuisson;

        return $this;
    }

    /**
     * Get cuisson
     *
     * @return \DateTime
     */
    public function getCuisson()
    {
        return $this->cuisson;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    /**
     * @return string
     */
    public function getEtape()
    {
        return $this->etape;
    }

    /**
     * @param string $etape
     */
    public function setEtape($etape)
    {
        $this->etape = $etape;
    }

    /**
     * @return ArrayCollection
     */
    public function getCompositions()
    {
        return $this->compositions;
    }

    /**
     * Add image
     *
     * @param Composition $compositions
     *
     * @return Recette
     */
    public function addComposition(Composition $compositions)
    {
        if ($compositions->getIngredients() == null ){
            return $this;
        }
        $this->compositions[] = $compositions;
        $compositions->setRecette($this);;

        return $this;
    }

    /**
     * Remove image
     *
     * @param Composition $compositions
     */
    public function removeComposition(Composition $compositions)
    {
        $this->compositions->removeElement($compositions);
    }
    /**
     * @param ArrayCollection $compositions
     */
    public function setCompositions($compositions)
    {
        $this->compositions = $compositions;
    }


}

