<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/02/2017
 * Time: 16:19
 */

namespace Pidev\homeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class type_logement
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
    private $type_logement;

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

}