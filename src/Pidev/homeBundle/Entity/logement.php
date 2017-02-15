<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/02/2017
 * Time: 08:34
 */

namespace Pidev\homeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class logement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $adresse;
    /**
     * @ORM\Column(type="integer",length=11)
     */
    private $prix;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity="Pidev\homeBundle\Entity\options", inversedBy="logement")
     * @ORM\JoinColumn
     */
    private $options;
    /**
     * @var boolean
     * @ORM\column(type="boolean", options={"default"=0})
     */
    private $disponibilitee;
    /**
     * @ORM\OneToOne(targetEntity="Pidev\homeBundle\Entity\image", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $image;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="logement")
     * @ORM\JoinColumn
     */
    private $User;
    /**
     * @ORM\ManyToOne(targetEntity="Pidev\homeBundle\Entity\type_logement", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $type_logement;
    /**
     * @ORM\ManyToOne(targetEntity="Pidev\homeBundle\Entity\genre_logement", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $genre_logement;
    /**
     * @ORM\ManyToOne(targetEntity="Pidev\homeBundle\Entity\region", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $region;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
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
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return boolean
     */
    public function isDisponibilitee()
    {
        return $this->disponibilitee;
    }

    /**
     * @param boolean $disponibilitee
     */
    public function setDisponibilitee($disponibilitee)
    {
        $this->disponibilitee = $disponibilitee;
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
    public function getTypeLogement()
    {
        return $this->type_logement;
    }

    /**
     * @param mixed $type_logement
     */
    public function setTypeLogement($type_logement)
    {
        $this->type_logement = $type_logement;
    }

    /**
     * @return mixed
     */
    public function getGenreLogement()
    {
        return $this->genre_logement;
    }

    /**
     * @param mixed $genre_logement
     */
    public function setGenreLogement($genre_logement)
    {
        $this->genre_logement = $genre_logement;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }




}