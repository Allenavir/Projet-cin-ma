<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class filmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add("nom",TextType::class, array("attr"=>array("placeholder"=>"Nom du film"),"required"=>true));
        $builder->add("realisateur",TextType::class, array("attr"=>array("placeholder"=>"Nom du réalisateur"),"required"=>true));
        $builder->add("acteurs",TextType::class, array("attr"=>array("placeholder"=>"Noms des principaux acteurs"),"required"=>true));
        $builder->add("duree",TextType::class, array("attr"=>array("placeholder"=>"Durée du film"),"required"=>true));
        $builder->add("genre",TextType::class, array("attr"=>array("placeholder"=>"Genres du film"),"required"=>true));
        $builder->add("date",DateType::class, array("attr"=>array("placeholder"=>"Date de sortie du film"),"required"=>true));
        $builder->add("resume",TextType::class, array("attr"=>array("placeholder"=>"Description du film"),"required"=>true));
        $builder->add("image",TextType::class,array("attr"=>array("placeholder"=>"Chemin vers l'affiche du film"),"required"=>true));
        $builder->add("note",NumberType::class,array("attr"=>array("placeholder"=>"Notez le produit"),"required"=>false));


        $builder->add("BO1",TextType::class,array("attr"=>array("placeholder"=>"Lien youtube"),"required"=>true));
        $builder->add("BO2",TextType::class,array("attr"=>array("placeholder"=>"Lien youtube"),"required"=>true));
        $builder->add("image1",TextType::class,array("attr"=>array("placeholder"=>"Chemin vers mon image1"),"required"=>true));
        $builder->add("image2",TextType::class,array("attr"=>array("placeholder"=>"Chemin vers mon image2"),"required"=>true));
        $builder->add("image3",TextType::class,array("attr"=>array("placeholder"=>"Chemin vers mon image3"),"required"=>true));
        $builder->add("image4",TextType::class,array("attr"=>array("placeholder"=>"Chemin vers mon image4"),"required"=>true));
        
        $builder->add("Save",SubmitType::class,  array("label"=>"ok"));       
    }
}