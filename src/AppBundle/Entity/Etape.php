<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etape
 *
 * @ORM\Table(name="etape")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtapeRepository")
 */
class Etape
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
     * @ORM\Column(name="etape", type="string", length=255)
     */
    private $etape;


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
     * Set etape
     *
     * @param string $etape
     *
     * @return Etape
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
}

