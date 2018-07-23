<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recettes
 *
 * @ORM\Table(name="recettes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecettesRepository")
 */
class Recettes
{

    /**
     * Plusieurs recettes ont plusieurs ingrédients
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Ingredients", inversedBy="recettes")
     * @ORM\JoinTable(name="ingredients")
     */
    private $ingredients;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=128)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="preparation", type="string", length=255)
     */
    private $preparation;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=128)
     */
    private $photo;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Recettes
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set preparation
     *
     * @param string $preparation
     *
     * @return Recettes
     */
    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;

        return $this;
    }

    /**
     * Get preparation
     *
     * @return string
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Recettes
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recettes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add recette
     *
     * @param \AppBundle\Entity\CompositionRecette $recette
     *
     * @return Recettes
     */
    public function addRecette(\AppBundle\Entity\CompositionRecette $recette)
    {
        $this->recettes[] = $recette;

        return $this;
    }

    /**
     * Remove recette
     *
     * @param \AppBundle\Entity\CompositionRecette $recette
     */
    public function removeRecette(\AppBundle\Entity\CompositionRecette $recette)
    {
        $this->recettes->removeElement($recette);
    }

    /**
     * Get recettes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecettes()
    {
        return $this->recettes;
    }
}
