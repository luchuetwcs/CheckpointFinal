<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette_Qte_Ingr
 *
 * @ORM\Table(name="recette__qte__ingr")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Recette_Qte_IngrRepository")
 */
class Recette_Qte_Ingr
{

    /**
     * @ORM\ManyToOne(targetEntity="Ingredients", inversedBy="rct_qte_ingr")
     * @ORM\JoinColumn(name="ingredient_id", referencedColumnName="id")
     */
    protected $ingredient;

    /**
     * @ORM\ManyToOne(targetEntity="Recette", inversedBy="rct_qte_ingr")
     * @ORM\JoinColumn(name="recette_id", referencedColumnName="id")
     */
    protected $recette;

    /**
     * @ORM\ManyToOne(targetEntity="Unite", inversedBy="rct_qte_ingr")
     * @ORM\JoinColumn(name="unite_id", referencedColumnName="id")
     */
    protected $unite;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float")
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
     * @param float $quantite
     *
     * @return Recette_Qte_Ingr
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set ingredient
     *
     * @param \AppBundle\Entity\Ingredients $ingredient
     *
     * @return Recette_Qte_Ingr
     */
    public function setIngredient(\AppBundle\Entity\Ingredients $ingredient = null)
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

    /**
     * Set recette
     *
     * @param \AppBundle\Entity\Recette $recette
     *
     * @return Recette_Qte_Ingr
     */
    public function setRecette(\AppBundle\Entity\Recette $recette = null)
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
     * Set unite
     *
     * @param \AppBundle\Entity\Unite $unite
     *
     * @return Recette_Qte_Ingr
     */
    public function setUnite(\AppBundle\Entity\Unite $unite = null)
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
}
