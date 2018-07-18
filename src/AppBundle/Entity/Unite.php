<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unites
 *
 * @ORM\Table(name="unites")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UnitesRepository")
 */
class Unite
{
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ingredient", mappedBy="unite")
     */
    private $unites;
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
     * @ORM\Column(name="unite", type="string", length=45)
     */
    private $unite;

    /**
     * @var string
     *
     * @ORM\Column(name="symbole", type="string", length=45)
     */
    private $symbole;


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
     * Set unite
     *
     * @param string $unite
     *
     * @return Unite
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set symbole
     *
     * @param string $symbole
     *
     * @return Unite
     */
    public function setSymbole($symbole)
    {
        $this->symbole = $symbole;

        return $this;
    }

    /**
     * Get symbole
     *
     * @return string
     */
    public function getSymbole()
    {
        return $this->symbole;
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
     * @param \AppBundle\Entity\Ingredient $ingredient
     *
     * @return Unite
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
     * Add unite
     *
     * @param \AppBundle\Entity\Ingredient $unite
     *
     * @return Unite
     */
    public function addUnite(\AppBundle\Entity\Ingredient $unite)
    {
        $this->unites[] = $unite;

        return $this;
    }

    /**
     * Remove unite
     *
     * @param \AppBundle\Entity\Ingredient $unite
     */
    public function removeUnite(\AppBundle\Entity\Ingredient $unite)
    {
        $this->unites->removeElement($unite);
    }

    /**
     * Get unites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUnites()
    {
        return $this->unites;
    }
}
