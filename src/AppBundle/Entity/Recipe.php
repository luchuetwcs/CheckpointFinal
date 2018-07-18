<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecipeRepository")
 */
class Recipe
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
     * @ORM\Column(name="title", type="string", length=40)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=140)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_preparation", type="time")
     */
    private $timePreparation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_cuisson", type="time")
     */
    private $timeCuisson;


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
     * Set title
     *
     * @param string $title
     *
     * @return Recipe
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set timePreparation
     *
     * @param \DateTime $timePreparation
     *
     * @return Recipe
     */
    public function setTimePreparation($timePreparation)
    {
        $this->timePreparation = $timePreparation;

        return $this;
    }

    /**
     * Get timePreparation
     *
     * @return \DateTime
     */
    public function getTimePreparation()
    {
        return $this->timePreparation;
    }

    /**
     * Set timeCuisson
     *
     * @param \DateTime $timeCuisson
     *
     * @return Recipe
     */
    public function setTimeCuisson($timeCuisson)
    {
        $this->timeCuisson = $timeCuisson;

        return $this;
    }

    /**
     * Get timeCuisson
     *
     * @return \DateTime
     */
    public function getTimeCuisson()
    {
        return $this->timeCuisson;
    }
}

