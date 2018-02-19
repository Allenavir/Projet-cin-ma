<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Films;
use Symfony\Component\HttpFoundation\Request;
use App\Form\filmType;


class SortieController extends Controller
{    
    private function _getFilms(){

        $repo = $this->getDoctrine()->getRepository(Films::class);
        $liste = $repo->findAll();
        return $liste;                     
    }

    private function _getFilm($id){

        $repo = $this->getDoctrine()->getRepository(Films::class);
        $liste = $repo->find($id);
        return $liste;                     
    }

    /**
    * @Route("/sortie", name="sortie")
    */
        
    public function displayFilms(){
        $bdd = $this->_getFilms();
        return $this->render(
            "liste.html.twig",
            array( "liste" => $bdd )
        );      
    }

     /**
    * @Route("film/details/{id}", name="details",requirements={"id"="\d*"})
    */
        
    public function displayDetailsFilms($id){
        $bdd = $this->_getFilm($id);
        return $this->render(
            "details.html.twig",
            array( "films" => $bdd )        
        );      
    }


    /**
    * @Route("ajouter", name="ajouter")
    */
        
    public function AddFilms(Request $request){        
        $film = new films;                    
        $form= $this->createForm(filmType::class, $film);
        $form->handleRequest($request);
        
        $msg="";

        if($form->isSubmitted() ){

        if($form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($form->getData());
            $manager->flush();

            $msg= "Produit ajouté avec succes";           
            }

        else{
            $msg= "Vuus avez oublié de remplir un champs";
              }
          }
        
        return $this->render("AddFilm.html.twig", array("form"=>$form->createView(),"msg"=>$msg)); 
        }


    /**
    *@Route("supprimer/{id}", name="supprimer",requirements={"id"="\d*"})
     */
    public function deleteOneProduct(Films $film){
        $repo = $this->getDoctrine()->getManager();
        $repo->remove($film);
        $repo->flush();

        return $this->render("supprimer.html.twig", array("film"=>$film));    
    }    



     /**
    *@Route("modifier/{id}", name="modifier",requirements={"id"="\d*"})
     */
    public function updateOneProduct(Request $request, Films $film){
        $form= $this->createForm(filmType::class, $film);
        $form->handleRequest($request);
        
        $msg="";

        if($form->isSubmitted() ){

        if($form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($form->getData());
            $manager->flush();

            $msg= "Produit modifié avec succes";           
            }

        else{
            $msg= "Vous avez oublié de remplir un champs";
            }
        }

        return $this->render("modifier.html.twig", array("form"=>$form->createView(),"msg"=>$msg));    
    }    
}
