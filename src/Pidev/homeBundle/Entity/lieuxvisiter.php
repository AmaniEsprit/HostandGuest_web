<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/02/2017
 * Time: 08:36
 */

namespace Pidev\homeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class lieuxvisiter
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $Id;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $adresse;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nom;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="lieuxvisiter")
     * @ORM\JoinColumn
     */
    private $User;
    /**
     * @ORM\OneToOne(targetEntity="Pidev\homeBundle\Entity\image", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $image;
    /**
     * @ORM\ManyToOne(targetEntity="Pidev\homeBundle\Entity\genre", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $genre;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     */
    public function setUser($User)
    {
        $this->User = $User;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }


}