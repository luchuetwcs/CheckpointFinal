<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Unite
 *
 * @ORM\Table(name="unite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UniteRepository")
 */
class Unite
{
    /**
     * @ORM\OneToMany(targetEntity="Unite", mappedBy="unite")
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
     * @ORM\Column(name="indice", type="string", length=45)
     */
    private $indice;


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
     * Set indice
     *
     * @param string $indice
     *
     * @return Unite
     */
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Get indice
     *
     * @return string
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Add rctQteIngr
     *
     * @param \AppBundle\Entity\Unite $rctQteIngr
     *
     * @return Unite
     */
    public function addRctQteIngr(\AppBundle\Entity\Unite $rctQteIngr)
    {
        $this->rct_qte_ingr[] = $rctQteIngr;

        return $this;
    }

    /**
     * Remove rctQteIngr
     *
     * @param \AppBundle\Entity\Unite $rctQteIngr
     */
    public function removeRctQteIngr(\AppBundle\Entity\Unite $rctQteIngr)
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
