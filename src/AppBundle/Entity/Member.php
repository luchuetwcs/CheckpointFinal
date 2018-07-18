<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Member
 *
 * @ORM\Table(name="member")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemberRepository")
 */
class Member
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
     * @ORM\Column(name="drummer", type="string", length=255)
     */
    private $drummer;

    /**
     * @var string
     *
     * @ORM\Column(name="bassist", type="string", length=255)
     */
    private $bassist;

    /**
     * @var string
     *
     * @ORM\Column(name="guitaristOne", type="string", length=255)
     */
    private $guitaristOne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="guitaristTwo", type="string", length=255, nullable=true)
     */
    private $guitaristTwo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="singer", type="string", length=255, nullable=true)
     */
    private $singer;


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
     * Set drummer.
     *
     * @param string $drummer
     *
     * @return Member
     */
    public function setDrummer($drummer)
    {
        $this->drummer = $drummer;

        return $this;
    }

    /**
     * Get drummer.
     *
     * @return string
     */
    public function getDrummer()
    {
        return $this->drummer;
    }

    /**
     * Set bassist.
     *
     * @param string $bassist
     *
     * @return Member
     */
    public function setBassist($bassist)
    {
        $this->bassist = $bassist;

        return $this;
    }

    /**
     * Get bassist.
     *
     * @return string
     */
    public function getBassist()
    {
        return $this->bassist;
    }

    /**
     * Set guitaristOne.
     *
     * @param string $guitaristOne
     *
     * @return Member
     */
    public function setGuitaristOne($guitaristOne)
    {
        $this->guitaristOne = $guitaristOne;

        return $this;
    }

    /**
     * Get guitaristOne.
     *
     * @return string
     */
    public function getGuitaristOne()
    {
        return $this->guitaristOne;
    }

    /**
     * Set guitaristTwo.
     *
     * @param string|null $guitaristTwo
     *
     * @return Member
     */
    public function setGuitaristTwo($guitaristTwo = null)
    {
        $this->guitaristTwo = $guitaristTwo;

        return $this;
    }

    /**
     * Get guitaristTwo.
     *
     * @return string|null
     */
    public function getGuitaristTwo()
    {
        return $this->guitaristTwo;
    }

    /**
     * Set singer.
     *
     * @param string|null $singer
     *
     * @return Member
     */
    public function setSinger($singer = null)
    {
        $this->singer = $singer;

        return $this;
    }

    /**
     * Get singer.
     *
     * @return string|null
     */
    public function getSinger()
    {
        return $this->singer;
    }
}
