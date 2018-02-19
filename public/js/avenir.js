
$(function () {
  
    /* MENU BURGER */


$(document).ready(function(){
  $(".burger").click(function(){
    $(".layer").toggleClass("active");
  });  });






});


var compteurSemaine = 1;
function afficherLignesSemaine(){
    
    $('#CetteSemainel' + compteurSemaine).fadeIn();

    compteurSemaine+=1;
       
    if (compteurSemaine>=2)
    {$('#monBoutton').remove();
    }
}
$('#monBoutton').on('click', function()
{
    afficherLignesSemaine();
})




var compteur = 1;
function afficherLignes(){
    
    $('#filmsEnSallel' + compteur).fadeIn();

    compteur+=1;
    if (compteur>=3)
    {$('#monBoutton2').remove();
    }
    
}
$('#monBoutton2').on('click', function()
{
    afficherLignes();
})


