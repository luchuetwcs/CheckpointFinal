<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Recette
 *@Vich\Uploadable
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecetteRepository")
 */
class Recette
{
    /**

     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Preparateur",cascade={"persist"})

     * @ORM\JoinColumn(nullable=false)

     */

    private $preparateur;

    /**
     * @return string
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getNomRecette();
    }


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
     * @ORM\Column(name="nomRecette", type="string", length=255)
     */
    private $nomRecette;

    /**
     * @var string
     *
     * @ORM\Column(name="type_de_recette", type="string", length=255)
     */
    private $typeDeRecette;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRecette", type="datetime")
     */
    private $dateRecette;

    public function __construct()

    {

        $this->dateRecette = new \Datetime();

    }

    /**
     * @var string
     *
     * @ORM\Column(name="preparation", type="text")
     */
    private $preparation;

    /**
     * @var string
     *
     * @ORM\Column(name="tempsDePreparation", type="string", length=255)
     */
    private $tempsDePreparation;

    /**
     * @var string
     *
     * @ORM\Column(name="nbPersonne", type="string", length=255)
     */
    private $nbPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="dificulte", type="string", length=255)
     */
    private $dificulte;
    /**
     *
     * @Vich\UploadableField(mapping="uploads_image" ,fileNameProperty="photo",)
     *
     * @var File
     */
    protected $imageFile;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    protected $photo;

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
     * Set nomRecette.
     *
     * @param string $nomRecette
     *
     * @return Recette
     */
    public function setNomRecette($nomRecette)
    {
        $this->nomRecette = $nomRecette;

        return $this;
    }

    /**
     * Get nomRecette.
     *
     * @return string
     */
    public function getNomRecette()
    {
        return $this->nomRecette;
    }

    /**
     * Set dateRecette.
     *
     * @param \DateTime $dateRecette
     *
     * @return Recette
     */
    public function setDateRecette($dateRecette)
    {
        $this->dateRecette = $dateRecette;

        return $this;
    }

    /**
     * Get dateRecette.
     *
     * @return \DateTime
     */
    public function getDateRecette()
    {
        return $this->dateRecette;
    }

    /**
     * Set preparation.
     *
     * @param string $preparation
     *
     * @return Recette
     */
    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;

        return $this;
    }

    /**
     * Get preparation.
     *
     * @return string
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * Set tempsDePreparation.
     *
     * @param string $tempsDePreparation
     *
     * @return Recette
     */
    public function setTempsDePreparation($tempsDePreparation)
    {
        $this->tempsDePreparation = $tempsDePreparation;

        return $this;
    }

    /**
     * Get tempsDePreparation.
     *
     * @return string
     */
    public function getTempsDePreparation()
    {
        return $this->tempsDePreparation;
    }

    /**
     * Set nbPersonne.
     *
     * @param string $nbPersonne
     *
     * @return Recette
     */
    public function setNbPersonne($nbPersonne)
    {
        $this->nbPersonne = $nbPersonne;

        return $this;
    }

    /**
     * Get nbPersonne.
     *
     * @return string
     */
    public function getNbPersonne()
    {
        return $this->nbPersonne;
    }

    /**
     * Set dificulte.
     *
     * @param string $dificulte
     *
     * @return Recette
     */
    public function setDificulte($dificulte)
    {
        $this->dificulte = $dificulte;

        return $this;
    }

    /**
     * Get dificulte.
     *
     * @return string
     */
    public function getDificulte()
    {
        return $this->dificulte;
    }


    /**
     * Set preparateur.
     *
     * @param \AppBundle\Entity\Preparateur $preparateur
     *
     * @return Recette
     */
    public function setPreparateur(\AppBundle\Entity\Preparateur $preparateur)
    {
        $this->preparateur = $preparateur;

        return $this;
    }

    /**
     * Get preparateur.
     *
     * @return \AppBundle\Entity\Preparateur
     */
    public function getPreparateur()
    {
        return $this->preparateur;
    }



    /**
     * Set typeDeRecette.
     *
     * @param string $typeDeRecette
     *
     * @return Recette
     */
    public function setTypeDeRecette($typeDeRecette)
    {
        $this->typeDeRecette = $typeDeRecette;

        return $this;
    }

    /**
     * Get typeDeRecette.
     *
     * @return string
     */
    public function getTypeDeRecette()
    {
        return $this->typeDeRecette;
    }

    /**
     * Set photo.
     *
     * @param string|null $photo
     *
     * @return Recette
     */
    public function setPhoto($photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo.
     *
     * @return string|null
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param File $imageFile
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
    }

}
