<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientRepository")
 */
class Ingredient
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Recette", inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;

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
     * @var float
     *
     * @ORM\Column(name="quantite", type="float")
     */
    private $quantite;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Ingredient
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set quantite.
     *
     * @param float $quantite
     *
     * @return Ingredient
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite.
     *
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set produit.
     *
     * @param \AppBundle\Entity\Recette $produit
     *
     * @return Ingredient
     */
    public function setProduit(\AppBundle\Entity\Recette $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit.
     *
     * @return \AppBundle\Entity\Recette
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
