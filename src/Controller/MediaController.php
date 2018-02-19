<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Media;
use App\Entity\Films;
use Symfony\Component\HttpFoundation\Request;
use App\Form\MediaType;

class MediaController extends Controller
{    
    private function _getMedias(){

        $repo = $this->getDoctrine()->getRepository(Media::class);
        $medias = $repo->findAll();
        return $medias;                     
    }   

    /**
    * @Route("/media", name="media")
    */
        
    public function displayMedias(){
        $bdd = $this->_getMedias();
        return $this->render(
            "media.html.twig",
            array( "medias" => $bdd )
        );      
    }
    
    /**
    * @Route("media/ajouter", name="ajouterMedia")
    */
        
    public function AddMedia(Request $request){        
        $media = new Media;                    
        $form= $this->createForm(MediaType::class, $media);
        $form->handleRequest($request);
        
        $msg="";

        if($form->isSubmitted() ){

        if($form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($form->getData());
            $manager->flush();

            $msg= "Media ajouté avec succes";           
            }

        else{
            $msg= "Vuus avez oublié de remplir un champs";
              }
          }
        
        return $this->render("AddFilm.html.twig", array("form"=>$form->createView(),"msg"=>$msg)); 
        }    


    /**
    * @Route("media/film/{id}", name="displayMediaForFilm")
    */

    public function displayMediaForFilm($id, FIlms $film){
        $repo = $this->getDoctrine()->getRepository(Media::class);
        $medias = $repo->findByFilm($id);

        return $this->render(
            "media.html.twig",
            array( "medias" => $medias, "film" =>$film )
        );                   
    }   
    
     /**
    *@Route("supprimerMedia/{id}", name="deleteOneMedia",requirements={"id"="\d*"})
     */
    public function deleteOneMedia(Media $media){
        $repo = $this->getDoctrine()->getManager();
        $repo->remove($media);
        $repo->flush();

        return $this->render("supprimer.html.twig", array("media"=>$media));    
    } 
}



    