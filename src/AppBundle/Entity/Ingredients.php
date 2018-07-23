<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredients
 *
 * @ORM\Table(name="ingredients")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientsRepository")
 */
class Ingredients
{

    /**
     * Plusieurs ingrédients ont plusieurs recettes
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Recettes", inversedBy="ingredients")
     * @ORM\JoinTable(name="ingredients")
     */
    private $recettes;

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
     * @ORM\Column(name="nom", type="string", length=128)
     */
    private $nom;


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
     * @return Ingredients
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
     * Set unites
     *
     * @param \AppBundle\Entity\Unites $unites
     *
     * @return Ingredients
     */
    public function setUnites(\AppBundle\Entity\Unites $unites)
    {
        $this->unites = $unites;

        return $this;
    }

    /**
     * Get unites
     *
     * @return \AppBundle\Entity\Unites
     */
    public function getUnites()
    {
        return $this->unites;
    }
}
