<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieRecette
 *
 * @ORM\Table(name="categorie_recette")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategorieRecetteRepository")
 */


class CategorieRecette
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Recette", inversedBy="categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recette;

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
     * @ORM\Column(name="type", type="string", length=255, unique=true)
     */
    private $type;

    public function __toString()
    {
        return $this->getType();
    }

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
     * Set type
     *
     * @param string $type
     *
     * @return CategorieRecette
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set recette
     *
     * @param \AppBundle\Entity\Recette $recette
     *
     * @return CategorieRecette
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
}
