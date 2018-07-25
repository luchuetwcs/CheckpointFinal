<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecetteRepository")
 */
class Recette
{

    /**
     * @ORM\OneToMany(targetEntity="Recette_Qte_Ingr", mappedBy="recette")
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
     * @var string
     *
     * @ORM\Column(name="methodologie", type="text")
     */
    private $methodologie;


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
     * Set methodologie
     *
     * @param string $methodologie
     *
     * @return Recette
     */
    public function setMethodologie($methodologie)
    {
        $this->methodologie = $methodologie;

        return $this;
    }

    /**
     * Get methodologie
     *
     * @return string
     */
    public function getMethodologie()
    {
        return $this->methodologie;
    }

    /**
     * Add rctQteIngr
     *
     * @param \AppBundle\Entity\Recette_Qte_Ingr $rctQteIngr
     *
     * @return Recette
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
