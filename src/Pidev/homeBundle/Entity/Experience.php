<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/02/2017
 * Time: 08:38
 */

namespace Pidev\homeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 */
class Experience
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public $ID;

    /**
     * @var \DateTime
     * @ORM\Column( name="date_publication" ,type="date")
     */
    public $date_publication;
    /**
     * @ORM\Column(type="string",length=255 , nullable=true)
     */
    public $statut;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="Experience")
     * @ORM\JoinColumn(name="User_id", referencedColumnName="id")
     */
    public $User;

    /**
     * @Assert\File(maxSize="500k")
     */
    public $file;
    /**
     * @ORM\Column(type="string",length=255 , nullable=true)
     */
    public $titre;

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
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStaut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->date_publication;
    }

    /**
     * @param \DateTime $date_publication
     */
    public function setDatePublication($date_publication)
    {
        $this->date_publication = $date_publication;
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

    public function getWebPath()
    {
        return null === $this->titre ? null : $this->getUploadDir().'/'.$this->titre;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
        return __DIR__.'/../../../../web/templates/120.72.91.53/themeforest/event_planning/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'images';
    }

    public function uploadProfilePicture()
    {
        // Nous utilisons le nom de fichier original, donc il est dans la pratique
        // nécessaire de le nettoyer pour éviter les problèmes de sécurité

        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

        // On sauvegarde le nom de fichier
        $this->titre = $this->file->getClientOriginalName();

        // La propriété file ne servira plus
        $this->file = null;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }


}