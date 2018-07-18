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
     * @var int
     *
     * @ORM\Column(name="unite", type="string", nullable=true)
     */
    private $unite;

    /**
     * @var Recette
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Recette", inversedBy="compositons")
     * @ORM\JoinColumn(nullable=true)
     */
    private $recette;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ingredient", cascade={"persist"}, inversedBy="composition")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ingredients;



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
     * @param integer $quantite
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
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }


    /**
     * @return mixed
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param mixed $ingredients
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    /**
     * @return mixed
     */
    public function getRecette()
    {
        return $this->recette;
    }

    /**
     * @param mixed $recette
     */
    public function setRecette($recette)
    {
        $this->recette = $recette;
    }

    /**
     * @return int
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * @param int $unite
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;
    }

    /**
     * @return Recette
     */
    public function getCommunaute()
    {
        return $this->communaute;
    }

    /**
     * @param Recette $communaute
     */
    public function setCommunaute($communaute)
    {
        $this->communaute = $communaute;
    }
}

