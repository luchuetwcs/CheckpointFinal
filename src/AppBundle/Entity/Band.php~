<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Band
 *
 * @ORM\Table(name="band")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BandRepository")
 */
class Band
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
     * @ORM\Column(name="bandName", type="string", length=255)
     */
    private $bandName;

    /**
     * @var string
     *
     * @ORM\Column(name="bandDescription", type="text")
     */
    private $bandDescription;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bandName.
     *
     * @param string $bandName
     *
     * @return Band
     */
    public function setBandName($bandName)
    {
        $this->bandName = $bandName;

        return $this;
    }

    /**
     * Get bandName.
     *
     * @return string
     */
    public function getBandName()
    {
        return $this->bandName;
    }

    /**
     * Set bandDescription.
     *
     * @param string $bandDescription
     *
     * @return Band
     */
    public function setBandDescription($bandDescription)
    {
        $this->bandDescription = $bandDescription;

        return $this;
    }

    /**
     * Get bandDescription.
     *
     * @return string
     */
    public function getBandDescription()
    {
        return $this->bandDescription;
    }
}
