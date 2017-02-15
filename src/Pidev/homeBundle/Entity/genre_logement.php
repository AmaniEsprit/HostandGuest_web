<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/02/2017
 * Time: 16:22
 */

namespace Pidev\homeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class genre_logement
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
    private $genre_logement;

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


}