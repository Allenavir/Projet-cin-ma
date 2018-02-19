<?php
namespace App\Form;

use App\Entity\Films;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add("image",TextType::class, array("attr"=>array("placeholder"=>"Ajouter votre image"),"required"=>true));
        $builder->add('film', EntityType::class, array(
            'class'        => Films::class,
            'choice_label' => 'nom',
            'multiple'     => false,
          ));
        $builder->add("Save",SubmitType::class,  array("label"=>"ok"));       
    }
}