$(function () {
  
    /* MENU BURGER */


$(document).ready(function(){
  $(".burger").click(function(){
    $(".layer").toggleClass("active");
  });  });

});


var compteur = 5;
function afficherLignes(){
    
    $('#art' + compteur).fadeIn().css("display","flex");

    compteur+=1;
       
    if (compteur>=6)
    {$('#monBoutton').remove();
    }
}

$('#monBoutton').on('click', function()
{
    afficherLignes();
})




