

//selection multiple
//var liste_h1 = document.getElementsByTagName("h1");
var liste_h1 = document.querySelectorAll("h1");
for (var i=0; i<liste_h1.length; i++)
{liste_h1[i].style.border="1px solid red";}

//slection simple
//var n = document.getElementById("soustitre");
var n = document.querySelector("h1:nth-of-type(2)");
n.style.fontStyle="italic";

