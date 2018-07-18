<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Band;

/**
 * Album
 *
 * @ORM\Table(name="album")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlbumRepository")
 */
class Album
{

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Band")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bandName;

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
     * @ORM\Column(name="nameAlbum", type="string", length=255)
     */
    private $nameAlbum;

    /**
     * @var int
     *
     * @ORM\Column(name="releaseDate", type="integer")
     */
    private $releaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="imageUrl", type="text")
     */
    private $imageUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionAlbum", type="text")
     */
    private $descriptionAlbum;


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
     * Set nameAlbum.
     *
     * @param string $nameAlbum
     *
     * @return Album
     */
    public function setNameAlbum($nameAlbum)
    {
        $this->nameAlbum = $nameAlbum;

        return $this;
    }

    /**
     * Get nameAlbum.
     *
     * @return string
     */
    public function getNameAlbum()
    {
        return $this->nameAlbum;
    }

    /**
     * Set releaseDate.
     *
     * @param int $releaseDate
     *
     * @return Album
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate.
     *
     * @return int
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set imageUrl.
     *
     * @param string $imageUrl
     *
     * @return Album
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl.
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set descriptionAlbum.
     *
     * @param string $descriptionAlbum
     *
     * @return Album
     */
    public function setDescriptionAlbum($descriptionAlbum)
    {
        $this->descriptionAlbum = $descriptionAlbum;

        return $this;
    }

    /**
     * Get descriptionAlbum.
     *
     * @return string
     */
    public function getDescriptionAlbum()
    {
        return $this->descriptionAlbum;
    }

    /**
     * Set bandName.
     *
     * @param \AppBundle\Entity\Band $bandName
     *
     * @return Album
     */
    public function setBandName(\AppBundle\Entity\Band $bandName)
    {
        $this->bandName = $bandName;

        return $this;
    }

    /**
     * Get bandName.
     *
     * @return \AppBundle\Entity\Band
     */
    public function getBandName()
    {
        return $this->bandName;
    }
}
