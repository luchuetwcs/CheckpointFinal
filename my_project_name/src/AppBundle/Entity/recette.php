<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\recetteRepository")
 */
class recette
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredient", type="string", length=255)
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
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return recette
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ingredient
     *
     * @param string $ingredient
     *
     * @return recette
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
     * @var string
     *
     * @ORM\Column(name="ingredient1", type="string", length=255, nullable=true)
     */
    private $ingredient1;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredient2", type="string", length=255, nullable=true)
     */
    private $ingredient2;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredient3", type="string", length=255, nullable=true)
     */
    private $ingredient3;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredient4", type="string", length=255, nullable=true)
     */
    private $ingredient4;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredient5", type="string", length=255, nullable=true)
     */
    private $ingredient5;


    /**
     * Set ingredient1
     *
     * @param string $ingredient1
     *
     * @return ingredient
     */
    public function setIngredient1($ingredient1)
    {
        $this->ingredient1 = $ingredient1;

        return $this;
    }

    /**
     * Get ingredient1
     *
     * @return string
     */
    public function getIngredient1()
    {
        return $this->ingredient1;
    }

    /**
     * Set ingredient2
     *
     * @param string $ingredient2
     *
     * @return ingredient
     */
    public function setIngredient2($ingredient2)
    {
        $this->ingredient2 = $ingredient2;

        return $this;
    }

    /**
     * Get ingredient2
     *
     * @return string
     */
    public function getIngredient2()
    {
        return $this->ingredient2;
    }

    /**
     * Set ingredient3
     *
     * @param string $ingredient3
     *
     * @return ingredient
     */
    public function setIngredient3($ingredient3)
    {
        $this->ingredient3 = $ingredient3;

        return $this;
    }

    /**
     * Get ingredient3
     *
     * @return string
     */
    public function getIngredient3()
    {
        return $this->ingredient3;
    }

    /**
     * Set ingredient4
     *
     * @param string $ingredient4
     *
     * @return ingredient
     */
    public function setIngredient4($ingredient4)
    {
        $this->ingredient4 = $ingredient4;

        return $this;
    }

    /**
     * Get ingredient4
     *
     * @return string
     */
    public function getIngredient4()
    {
        return $this->ingredient4;
    }

    /**
     * Set ingredient5
     *
     * @param string $ingredient5
     *
     * @return ingredient
     */
    public function setIngredient5($ingredient5)
    {
        $this->ingredient5 = $ingredient5;

        return $this;
    }

    /**
     * Get ingredient5
     *
     * @return string
     */
    public function getIngredient5()
    {
        return $this->ingredient5;
    }
}

