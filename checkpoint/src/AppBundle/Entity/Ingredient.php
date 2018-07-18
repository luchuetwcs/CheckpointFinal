<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientRepository")
 * @Vich\Uploadable
 */




class Ingredient
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Recette", inversedBy="ingredients")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recette;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Quantite", mappedBy="ingredient")
     */
    private $quantites;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    protected $image;

    /**
     * @Vich\UploadableField(mapping="ingredient_image", fileNameProperty="image")
     *
     * @var File
     * @Assert\File(
     *     maxSize = "5M",
     *     maxSizeMessage="Votre fichier est trop volumineux, veuillez choisir un fichier plus petit",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png"},
     *     mimeTypesMessage = "Veuillez télécharger un fichier au format .jpg ou .png"
     * )
     *
     */
    protected $imageFile;

    public function __toString()
    {
        return $this->getImage();
    }


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Ingredient
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set recette
     *
     * @param \AppBundle\Entity\Recette $recette
     *
     * @return Ingredient
     */
    public function setRecette(\AppBundle\Entity\Recette $recette)
    {
        $this->recette = $recette;

        return $this;
    }

    /**
     * Get recette
     *
     * @return \AppBundle\Entity\Recette
     */
    public function getRecette()
    {
        return $this->recette;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quantites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add quantite.
     *
     * @param \AppBundle\Entity\Quantite $quantite
     *
     * @return Ingredient
     */
    public function addQuantite(\AppBundle\Entity\Quantite $quantite)
    {
        $this->quantites[] = $quantite;

        return $this;
    }

    /**
     * Remove quantite.
     *
     * @param \AppBundle\Entity\Quantite $quantite
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeQuantite(\AppBundle\Entity\Quantite $quantite)
    {
        return $this->quantites->removeElement($quantite);
    }

    /**
     * Get quantites.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuantites()
    {
        return $this->quantites;
    }
}
