<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette_Qte_Ingr
 *
 * @ORM\Table(name="recette__qte__ingr")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Recette_Qte_IngrRepository")
 */
class Recette_Qte_Ingr
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
     * @var float
     *
     * @ORM\Column(name="quantite", type="float")
     */
    private $quantite;


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
     * @param float $quantite
     *
     * @return Recette_Qte_Ingr
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}

