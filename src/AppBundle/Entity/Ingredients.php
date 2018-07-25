<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ingredients
 *
 * @ORM\Table(name="ingredients")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientsRepository")
 */
class Ingredients
{
    /**
     * @ORM\OneToMany(targetEntity="Recette_Qte_Ingr", mappedBy="ingredient")
     */
    protected $rct_qte_ingr;

    public function __construct()
    {
        $this->rct_qte_ingr = new ArrayCollection();
    }

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * Add rctQteIngr
     *
     * @param \AppBundle\Entity\Recette_Qte_Ingr $rctQteIngr
     *
     * @return Ingredients
     */
    public function addRctQteIngr(\AppBundle\Entity\Recette_Qte_Ingr $rctQteIngr)
    {
        $this->rct_qte_ingr[] = $rctQteIngr;

        return $this;
    }

    /**
     * Remove rctQteIngr
     *
     * @param \AppBundle\Entity\Recette_Qte_Ingr $rctQteIngr
     */
    public function removeRctQteIngr(\AppBundle\Entity\Recette_Qte_Ingr $rctQteIngr)
    {
        $this->rct_qte_ingr->removeElement($rctQteIngr);
    }

    /**
     * Get rctQteIngr
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRctQteIngr()
    {
        return $this->rct_qte_ingr;
    }
}
