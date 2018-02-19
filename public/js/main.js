$(function () {

    var imgs = [
        { chemin: "slider1.jpg", titre: "Paysage 1" },
        { chemin: "slider2.jpg", titre: "Paysage 2" },
        { chemin: "slider3.jpg", titre: "Paysage 3" },
        { chemin: "slider4.jpg", titre: "Paysage 4" },
    ];

    var imgactuel = 0;
    var timer;
    var animencours = false;
   
    $.each(imgs, function (i, v) {
        $("#diaporama").append($("<figure id='img" + i + "'><img src='img/slider/" + v.chemin + "'></figure>"));
    });

    $("#diaporama").append($("<a class='bt Prev'><i class='fa fa-arrow-left' aria-hidden='true'></i></a>"));
    $("#diaporama").append($("<a class='bt Next'><i class='fa fa-arrow-right' aria-hidden='true'></i></a>"));
    
    $(".Next").click(next);
    $(".Prev").click(prev);

    //On detecte les touches du clavier pour changer d'image
    $("body").keyup(function (event) {
        if (event.keyCode == 39) { next(); }
        if (event.keyCode == 37) { prev(); }
    }
    );

    //on affiche la première image
    maj();

    //On lance le défillé
    timer = setInterval(next, 10000);


    //On affiche l'image suivante
    function next() {

        if (!animencours) {
            imgactuel++;
            if (imgactuel >= imgs.length) { imgactuel = 0; }
               maj();
    }
}

    //On affiche l'image précédente
    function prev() {
        if (!animencours) {
            imgactuel--;
            if (imgactuel < 0) { imgactuel = imgs.length - 1; }
            maj();
        }
    }

//Affiche li'mage dont le num est en paramètres
function maj() {

    animencours = true;

    //Selectionner les images dans diaporama et les masquer
    $('#diaporama figure').css('opacity', 0);

    //Je fait apparaitre l'images
     $("#img" + imgactuel).animate({ opacity: 1 }, 1000, null, function () { animencours = false; });
}
});
