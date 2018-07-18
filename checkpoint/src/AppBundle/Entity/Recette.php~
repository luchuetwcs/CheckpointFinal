<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecetteRepository")
 */
class Recette
{
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CategorieRecette", mappedBy="recette")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Etapes", mappedBy="recette")
     */
    private $etapes;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ingredient", mappedBy="recette")
     */
    private $ingredients;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Quantite", mappedBy="recette")
     */
    private $quantites;


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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreDePersonne", type="integer")
     */
    private $nombreDePersonne;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etapes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ingredients = new \Doctrine\Common\Collections\ArrayCollection();
        $this->quantites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->getNom();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Recette
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
     * Set nombreDePersonne
     *
     * @param integer $nombreDePersonne
     *
     * @return Recette
     */
    public function setNombreDePersonne($nombreDePersonne)
    {
        $this->nombreDePersonne = $nombreDePersonne;

        return $this;
    }

    /**
     * Get nombreDePersonne
     *
     * @return integer
     */
    public function getNombreDePersonne()
    {
        return $this->nombreDePersonne;
    }

    /**
     * Add category
     *
     * @param \AppBundle\Entity\CategorieRecette $category
     *
     * @return Recette
     */
    public function addCategory(\AppBundle\Entity\CategorieRecette $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\CategorieRecette $category
     */
    public function removeCategory(\AppBundle\Entity\CategorieRecette $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add etape
     *
     * @param \AppBundle\Entity\Etapes $etape
     *
     * @return Recette
     */
    public function addEtape(\AppBundle\Entity\Etapes $etape)
    {
        $this->etapes[] = $etape;

        return $this;
    }

    /**
     * Remove etape
     *
     * @param \AppBundle\Entity\Etapes $etape
     */
    public function removeEtape(\AppBundle\Entity\Etapes $etape)
    {
        $this->etapes->removeElement($etape);
    }

    /**
     * Get etapes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtapes()
    {
        return $this->etapes;
    }

    /**
     * Add ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     *
     * @return Recette
     */
    public function addIngredient(\AppBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;

        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     */
    public function removeIngredient(\AppBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredients->removeElement($ingredient);
    }

    /**
     * Get ingredients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Add quantite
     *
     * @param \AppBundle\Entity\Quantite $quantite
     *
     * @return Recette
     */
    public function addQuantite(\AppBundle\Entity\Quantite $quantite)
    {
        $this->quantites[] = $quantite;

        return $this;
    }

    /**
     * Remove quantite
     *
     * @param \AppBundle\Entity\Quantite $quantite
     */
    public function removeQuantite(\AppBundle\Entity\Quantite $quantite)
    {
        $this->quantites->removeElement($quantite);
    }

    /**
     * Get quantites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuantites()
    {
        return $this->quantites;
    }
}
