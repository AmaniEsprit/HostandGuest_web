<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/02/2017
 * Time: 16:26
 */

namespace Pidev\homeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class options
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $ID;
    /**
     * @ORM\Column(type="string",length=255 , nullable=true)
     */
    private $options;
    /**
     * @ORM\oneToMany(targetEntity="Pidev\homeBundle\Entity\logement", mappedBy="options", cascade={"persist"})
     * @ORM\JoinColumn
     */
    private $logement;

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
     * @return mixed
     */
    public function getLogement()
    {
        return $this->logement;
    }

    /**
     * @param mixed $logement
     */
    public function setLogement($logement)
    {
        $this->logement = $logement;
    }



}