<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unites
 *
 * @ORM\Table(name="unites")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UnitesRepository")
 */
class Unites
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
     * @ORM\Column(name="unites", type="string", length=128)
     */
    private $unites;


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
     * Set unites
     *
     * @param string $unites
     *
     * @return Unites
     */
    public function setUnites($unites)
    {
        $this->unites = $unites;

        return $this;
    }

    /**
     * Get unites
     *
     * @return string
     */
    public function getUnites()
    {
        return $this->unites;
    }
}
