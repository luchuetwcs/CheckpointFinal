<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quantite
 *
 * @ORM\Table(name="quantite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuantiteRepository")
 */
class Quantite
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Recette", inversedBy="quantites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recette;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ingredient", inversedBy="quantites")
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
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="uniteDeMesure", type="string", length=255)
     */
    private $uniteDeMesure;


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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set uniteDeMesure
     *
     * @param string $uniteDeMesure
     *
     * @return Quantite
     */
    public function setUniteDeMesure($uniteDeMesure)
    {
        $this->uniteDeMesure = $uniteDeMesure;

        return $this;
    }

    /**
     * Get uniteDeMesure
     *
     * @return string
     */
    public function getUniteDeMesure()
    {
        return $this->uniteDeMesure;
    }

    /**
     * Set recette
     *
     * @param \AppBundle\Entity\Recette $recette
     *
     * @return Quantite
     */
    public function setRecette(\AppBundle\Entity\Recette $recette)
    {
        $this->recette = $recette;

        return $this;
    }

    /**
     * Get recette
     *
     * @return \AppBundle\Entity\Recette
     */
    public function getRecette()
    {
        return $this->recette;
    }

    /**
     * Set ingredient.
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     *
     * @return Quantite
     */
    public function setIngredient(\AppBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient.
     *
     * @return \AppBundle\Entity\Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
}
