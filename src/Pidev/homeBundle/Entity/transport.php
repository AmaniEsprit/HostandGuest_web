<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/02/2017
 * Time: 08:35
 */

namespace Pidev\homeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class transport{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $adresse_agence;
    /**
     * @ORM\Column(type="integer",length=11)
     */
    private $prix_location;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $modele;
    /**
     * @var boolean
     * @ORM\column(type="boolean", options={"default"=0})
     */
    private $Etat;
    /**
     * @ORM\OneToOne(targetEntity="Pidev\homeBundle\Entity\image", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $image;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="transport")
     * @ORM\JoinColumn
     */
    private $User;
    /**
     * @var boolean
     * @ORM\column(type="boolean", options={"default"=0})
     */
    private $reservation;

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
    public function getAdresseAgence()
    {
        return $this->adresse_agence;
    }

    /**
     * @param mixed $adresse_agence
     */
    public function setAdresseAgence($adresse_agence)
    {
        $this->adresse_agence = $adresse_agence;
    }

    /**
     * @return mixed
     */
    public function getPrixLocation()
    {
        return $this->prix_location;
    }

    /**
     * @param mixed $prix_location
     */
    public function setPrixLocation($prix_location)
    {
        $this->prix_location = $prix_location;
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
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return boolean
     */
    public function isEtat()
    {
        return $this->Etat;
    }

    /**
     * @param boolean $Etat
     */
    public function setEtat($Etat)
    {
        $this->Etat = $Etat;
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
     * @return boolean
     */
    public function isReservation()
    {
        return $this->reservation;
    }

    /**
     * @param boolean $reservation
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
    }




}