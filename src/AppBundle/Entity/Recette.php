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
     * @var int
     *
     * @ORM\Column(name="genre_id", type="integer")
     */
    private $genreId;

    /**
     * @var int
     *
     * @ORM\Column(name="ingredient_id", type="integer")
     */
    private $ingredientId;

    /**
     * @var int
     *
     * @ORM\Column(name="membre_id", type="integer", nullable=true)
     */
    private $membreId;


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
     * Set genreId
     *
     * @param integer $genreId
     *
     * @return Recette
     */
    public function setGenreId($genreId)
    {
        $this->genreId = $genreId;

        return $this;
    }

    /**
     * Get genreId
     *
     * @return int
     */
    public function getGenreId()
    {
        return $this->genreId;
    }

    /**
     * Set ingredientId
     *
     * @param integer $ingredientId
     *
     * @return Recette
     */
    public function setIngredientId($ingredientId)
    {
        $this->ingredientId = $ingredientId;

        return $this;
    }

    /**
     * Get ingredientId
     *
     * @return int
     */
    public function getIngredientId()
    {
        return $this->ingredientId;
    }

    /**
     * Set membreId
     *
     * @param integer $membreId
     *
     * @return Recette
     */
    public function setMembreId($membreId)
    {
        $this->membreId = $membreId;

        return $this;
    }

    /**
     * Get membreId
     *
     * @return int
     */
    public function getMembreId()
    {
        return $this->membreId;
    }
}
