<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unite
 *
 * @ORM\Table(name="unite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UniteRepository")
 */
class Unite
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
}

