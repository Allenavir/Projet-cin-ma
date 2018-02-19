<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Media;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilmsRepository")
 */
class Films
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $realisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $acteurs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="text")
     */
    private $resume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="decimal", length=1)
     */
    private $Note;


   /**
     * @ORM\Column(type="text")
     */
    private $BO1;


    /**
     * @ORM\Column(type="text")
     */
    private $BO2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image4;


    /**
     * @ORM\Column(type="integer", nullable=true) 
     * @ORM\OneToMany(targetEntity="App\Entity\Media", mappedBy="film")
     */
    public $medias;




    //Getter et Setter
    //id
    //Nom
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    //Nom
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    //realisateur
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;
    }


    //acteurs
    public function getActeurs()
    {
        return $this->acteurs;
    }

    public function setActeurs($acteurs)
    {
        $this->acteurs = $acteurs;
    }

    //duree
    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }


    //genre
    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    //date
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    //resume
    public function getResume()
    {
        return $this->resume;
    }

    public function setResume($resume)
    {
        $this->resume = $resume;
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

    //note
    public function getNote()
    {
        return $this->Note;
    }

    public function setNote($Note)
    {
        $this->Note = $Note;
    }


     //BO1
    public function getBO1()
    {
        return $this->BO1;
    }

    public function setBO1($BO1)
    {
        $this->BO1 = $BO1;
    }

    //BO2
    public function getBO2()
    {
        return $this->BO2;
    }

    public function setBO2($BO2)
    {
        $this->BO2 = $BO2;
    }

    //image1
    public function getImage1()
    {
        return $this->image1;
    }

    public function setImage1($image1)
    {
        $this->image1 = $image1;
    }

    //image2
    public function getImage2()
    {
        return $this->image2;
    }

    public function setImage2($image2)
    {
        $this->image2 = $image2;
    }

    //image3
    public function getImage3()
    {
        return $this->image3;
    }

    public function setImage3($image3)
    {
        $this->image3 = $image3;
    }

    //image4
    public function getImage4()
    {
        return $this->image4;
    }

    public function setImage4($image4)
    {
        $this->image4 = $image4;
    }
    

    
}
