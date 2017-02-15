<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    public function __construct()
    {
        parent::__construct();
        $this->Evennementguest= new \Doctrine\Common\Collections\ArrayCollection();
        $this->Experience= new \Doctrine\Common\Collections\ArrayCollection();
        $this->lieuxvisiter= new \Doctrine\Common\Collections\ArrayCollection();
        $this->logement= new \Doctrine\Common\Collections\ArrayCollection();
        $this->transport= new \Doctrine\Common\Collections\ArrayCollection();
        $this->vieamicale= new \Doctrine\Common\Collections\ArrayCollection();
        // your own logic
    }
    /**
     * @ORM\OneToMany(targetEntity="Pidev\homeBundle\Entity\Experience", mappedBy="User", cascade={"persist"})
     * @ORM\JoinColumn
     */
    public $Experience;
    /**
     * @ORM\OneToMany(targetEntity="Pidev\homeBundle\Entity\Evennementguest", mappedBy="User", cascade={"persist"})
     * @ORM\JoinColumn
     */
    public $Evennementguest;
    /**
     * @ORM\OneToMany(targetEntity="Pidev\homeBundle\Entity\lieuxvisiter", mappedBy="User", cascade={"persist"})
     * @ORM\JoinColumn
     */
   public $lieuxvisiter;
    /**
     * @ORM\OneToMany(targetEntity="Pidev\homeBundle\Entity\logement", mappedBy="User", cascade={"persist"})
     * @ORM\JoinColumn
     */
   public $logement;
    /**
     * @ORM\OneToMany(targetEntity="Pidev\homeBundle\Entity\transport", mappedBy="User", cascade={"persist"})
     * @ORM\JoinColumn
     */
   public $transport;
    /**
     * @ORM\OneToMany(targetEntity="Pidev\homeBundle\Entity\vieamicale", mappedBy="User", cascade={"persist"})
     * @ORM\JoinColumn
     */
    public $vieamicale;
}