<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etapes
 *
 * @ORM\Table(name="etapes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtapesRepository")
 */
class Etapes
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Recette", inversedBy="etapes")
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
     * @ORM\Column(name="etape", type="text")
     */
    private $etape;


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
     * Set etape
     *
     * @param string $etape
     *
     * @return Etapes
     */
    public function setEtape($etape)
    {
        $this->etape = $etape;

        return $this;
    }

    /**
     * Get etape
     *
     * @return string
     */
    public function getEtape()
    {
        return $this->etape;
    }

    /**
     * Set recette
     *
     * @param \AppBundle\Entity\Recette $recette
     *
     * @return Etapes
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
