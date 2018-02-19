<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Films;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 */
class Media
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Films", inversedBy="medias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $film;

    //Getter et Setter
    //id
    public function getid()
    {
        return $this->id;
    }
    
    //image
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;  
    }

    public function getFilm()
    {
        return $this->film;
    }

    public function setFilm(Films $film)
    {
        $this->film = $film;      
    }

    

}