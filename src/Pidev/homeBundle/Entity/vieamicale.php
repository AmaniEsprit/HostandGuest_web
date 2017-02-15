<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/02/2017
 * Time: 08:33
 */

namespace Pidev\homeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class vieamicale
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $ID;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $adresse;
    /**
     * @ORM\Column(type="integer",length=11)
     */
    private $fraisinscription;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $activitee;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nom;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="vieamicale")
     * @ORM\JoinColumn
     */
    private $User;
    /**
     * @ORM\OneToOne(targetEntity="Pidev\homeBundle\Entity\image", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $image;
    /**
     * @ORM\ManyToOne(targetEntity="Pidev\homeBundle\Entity\type", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $type;

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
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
    public function getFraisinscription()
    {
        return $this->fraisinscription;
    }

    /**
     * @param mixed $fraisinscription
     */
    public function setFraisinscription($fraisinscription)
    {
        $this->fraisinscription = $fraisinscription;
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
    public function getActivitee()
    {
        return $this->activitee;
    }

    /**
     * @param mixed $activitee
     */
    public function setActivitee($activitee)
    {
        $this->activitee = $activitee;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}