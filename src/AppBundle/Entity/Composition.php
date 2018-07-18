<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composition
 *
 * @ORM\Table(name="composition")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompositionRepository")
 */
class Composition
{

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Recettes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recette;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ingredients")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ingredient;

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
     * @ORM\Column(name="quantite", type="decimal", precision=10, scale=3)
     */
    private $quantite;


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
     * Set quantite
     *
     * @param string $quantite
     *
     * @return Composition
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set recette
     *
     * @param \AppBundle\Entity\Recettes $recette
     *
     * @return Composition
     */
    public function setRecette(\AppBundle\Entity\Recettes $recette)
    {
        $this->recette = $recette;

        return $this;
    }

    /**
     * Get recette
     *
     * @return \AppBundle\Entity\Recettes
     */
    public function getRecette()
    {
        return $this->recette;
    }

    /**
     * Set ingredient
     *
     * @param \AppBundle\Entity\Ingredients $ingredient
     *
     * @return Composition
     */
    public function setIngredient(\AppBundle\Entity\Ingredients $ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return \AppBundle\Entity\Ingredients
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
}
