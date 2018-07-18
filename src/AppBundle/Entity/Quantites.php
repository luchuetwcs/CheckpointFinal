<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quantites
 *
 * @ORM\Table(name="quantites")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuantitesRepository")
 */
class Quantites
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
     * @var string
     *
     * @ORM\Column(name="unite_mesure", type="string", length=255)
     */
    private $uniteMesure;


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
     * @return Quantites
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
     * Set uniteMesure
     *
     * @param string $uniteMesure
     *
     * @return Quantites
     */
    public function setUniteMesure($uniteMesure)
    {
        $this->uniteMesure = $uniteMesure;

        return $this;
    }

    /**
     * Get uniteMesure
     *
     * @return string
     */
    public function getUniteMesure()
    {
        return $this->uniteMesure;
    }
}

