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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Composition", mappedBy="Composition")
     */
    private $recettes;



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
     * @ORM\Column(name="recette", type="string", length=125)
     */
    private $recette;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPersonnes", type="integer", nullable=true)
     */
    private $nbPersonnes;


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
     * Set recette
     *
     * @param string $recette
     *
     * @return Recettes
     */
    public function setRecette($recette)
    {
        $this->recette = $recette;

        return $this;
    }

    /**
     * Get recette
     *
     * @return string
     */
    public function getRecette()
    {
        return $this->recette;
    }

    /**
     * Set nbPersonnes
     *
     * @param integer $nbPersonnes
     *
     * @return Recettes
     */
    public function setNbPersonnes($nbPersonnes)
    {
        $this->nbPersonnes = $nbPersonnes;

        return $this;
    }

    /**
     * Get nbPersonnes
     *
     * @return int
     */
    public function getNbPersonnes()
    {
        return $this->nbPersonnes;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredientss = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ingredientss
     *
     * @param \AppBundle\Entity\Ingredients $ingredientss
     *
     * @return Recettes
     */
    public function addIngredientss(\AppBundle\Entity\Ingredients $ingredientss)
    {
        $this->ingredientss[] = $ingredientss;

        return $this;
    }

    /**
     * Remove ingredientss
     *
     * @param \AppBundle\Entity\Ingredients $ingredientss
     */
    public function removeIngredientss(\AppBundle\Entity\Ingredients $ingredientss)
    {
        $this->ingredientss->removeElement($ingredientss);
    }

    /**
     * Get ingredientss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIngredientss()
    {
        return $this->ingredientss;
    }

    /**
     * Set categorie
     *
     * @param \AppBundle\Entity\Categories $categorie
     *
     * @return Recettes
     */
    public function setCategorie(\AppBundle\Entity\Categories $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AppBundle\Entity\Categories
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add recette
     *
     * @param \AppBundle\Entity\Composition $recette
     *
     * @return Recettes
     */
    public function addRecette(\AppBundle\Entity\Composition $recette)
    {
        $this->recettes[] = $recette;

        return $this;
    }

    /**
     * Remove recette
     *
     * @param \AppBundle\Entity\Composition $recette
     */
    public function removeRecette(\AppBundle\Entity\Composition $recette)
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
