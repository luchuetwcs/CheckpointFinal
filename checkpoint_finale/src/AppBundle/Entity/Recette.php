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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ustensiles", mappedBy="nom")
     */
    private $ingredients;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ingredients", mappedBy="nom")
     */
    private $ustensiles;

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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="enonce", type="text")
     */
    private $enonce;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Recette
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Recette
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Recette
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set enonce
     *
     * @param string $enonce
     *
     * @return Recette
     */
    public function setEnonce($enonce)
    {
        $this->enonce = $enonce;

        return $this;
    }

    /**
     * Get enonce
     *
     * @return string
     */
    public function getEnonce()
    {
        return $this->enonce;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredients = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ustensiles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ingredient
     *
     * @param \AppBundle\Entity\Ustensiles $ingredient
     *
     * @return Recette
     */
    public function addIngredient(\AppBundle\Entity\Ustensiles $ingredient)
    {
        $this->ingredients[] = $ingredient;

        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param \AppBundle\Entity\Ustensiles $ingredient
     */
    public function removeIngredient(\AppBundle\Entity\Ustensiles $ingredient)
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
     * Add ustensile
     *
     * @param \AppBundle\Entity\Ingredients $ustensile
     *
     * @return Recette
     */
    public function addUstensile(\AppBundle\Entity\Ingredients $ustensile)
    {
        $this->ustensiles[] = $ustensile;

        return $this;
    }

    /**
     * Remove ustensile
     *
     * @param \AppBundle\Entity\Ingredients $ustensile
     */
    public function removeUstensile(\AppBundle\Entity\Ingredients $ustensile)
    {
        $this->ustensiles->removeElement($ustensile);
    }

    /**
     * Get ustensiles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUstensiles()
    {
        return $this->ustensiles;
    }
}
