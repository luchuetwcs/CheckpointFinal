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
     * @var string
     *
     * @ORM\Column(name="preparation", type="text")
     */
    private $preparation;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Genre_recette", inversedBy="recettes")
     */
    private $genre;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ingredients", inversedBy="recettes")
     */
    private $ingredient;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Membre", inversedBy="recettes")
     */
    private $membre;


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
     * Set genre
     *
     * @param \AppBundle\Entity\Genre_recette $genre
     *
     * @return Recette
     */
    public function setGenre(\AppBundle\Entity\Genre_recette $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \AppBundle\Entity\Genre_recette
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set ingredient
     *
     * @param \AppBundle\Entity\Ingredients $ingredient
     *
     * @return Recette
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
     * Set membre
     *
     * @param \AppBundle\Entity\Membre $membre
     *
     * @return Recette
     */
    public function setMembre(\AppBundle\Entity\Membre $membre = null)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \AppBundle\Entity\Membre
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Set preparation
     *
     * @param string $preparation
     *
     * @return Recette
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
}
