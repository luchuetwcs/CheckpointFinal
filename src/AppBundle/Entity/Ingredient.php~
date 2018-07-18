<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredients
 *
 * @ORM\Table(name="ingredients")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientsRepository")
 */
class Ingredient
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Unite", inversedBy="unites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unite;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Composition", mappedBy="ingredient")
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
     * @ORM\Column(name="ingredient", type="string", length=45)
     */
    private $ingredient;


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
     * Set ingredient
     *
     * @param string $ingredient
     *
     * @return Ingredient
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return string
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Set unite
     *
     * @param \AppBundle\Entity\Unite $unite
     *
     * @return Ingredient
     */
    public function setUnite(\AppBundle\Entity\Unite $unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return \AppBundle\Entity\Unite
     */
    public function getUnite()
    {
        return $this->unite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ingredient
     *
     * @param \AppBundle\Entity\Composition $ingredient
     *
     * @return Ingredient
     */
    public function addIngredient(\AppBundle\Entity\Composition $ingredient)
    {
        $this->ingredients[] = $ingredient;

        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param \AppBundle\Entity\Composition $ingredient
     */
    public function removeIngredient(\AppBundle\Entity\Composition $ingredient)
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
}
