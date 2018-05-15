/* global $ */
/* global TimelineLite */
/* global jQuery */

var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

// URL
var url = 'https://au-coeur-des-fetes-jbentayou.c9users.io/';

// Fonction de sélection avatar
function selection(id, nom){
    var tl3 = new TimelineLite();
    
    for(var i=1; i<=4;i++){
        if(i!=id){
            // Disparition des non-sélectionné
            tl3.to(document.getElementById('avatar'+i), 0.3, {top:50, opacity:0, cursor:'default'})
            // Suppression des évènements
            $('#avatar'+i).removeClass('select');
            $('#avatar'+i).removeAttr('onclick');
            $('#avatar'+i).removeAttr('onmouseover');
        }
    }
    
    // Suppression des évènements
    $('#avatar'+id).removeClass('select');
    $('#avatar'+id).removeAttr('onclick');
    $('#avatar'+id).removeAttr('onmouseover');
    $('#avatar'+id).css('opacity', '1');
    
    // Animations de l'avatar sélectionné
    switch (id) {
        case 1:
            tl3.to(document.getElementById('avatar1'), 1, {left:'37%', cursor:'default'})
            //tl3.to(document.getElementById('avatar1'), 0.2, {opacity:0})
            tl3.to(document.getElementById('avatar1'), 0.5, {src:'/images/homme-300-f.png'})
            //tl3.to(document.getElementById('avatar1'), 0.2, {opacity:1})
            document.getElementById("boutonParcours").href="/parcours-homme";
        break;
        case 2:
            tl3.to(document.getElementById('avatar2'), 1, {left:'12%', cursor:'default'})
            //tl3.to(document.getElementById('avatar2'), 0.2, {opacity:0})
            tl3.to(document.getElementById('avatar2'), 0.5, {src:'/images/femme-300-f.png'})
            //tl3.to(document.getElementById('avatar2'), 0.2, {opacity:1})
            document.getElementById("boutonParcours").href="/parcours-femme";
        break;
        case 3:
            tl3.to(document.getElementById('avatar3'), 1, {left:'-12%', cursor:'default'})
            //tl3.to(document.getElementById('avatar3'), 0.2, {opacity:0})
            tl3.to(document.getElementById('avatar3'), 0.5, {src:'/images/garcon-300-f.png'})
            //tl3.to(document.getElementById('avatar3'), 0.2, {opacity:1})
            document.getElementById("boutonParcours").href="/parcours-garcon";
            $('#bullePres').addClass('enfant');
        break;
        case 4:
            tl3.to(document.getElementById('avatar4'), 1, {left:'-37%', cursor:'default'})
            //tl3.to(document.getElementById('avatar4'), 0.2, {opacity:0})
            tl3.to(document.getElementById('avatar4'), 0.5, {src:'/images/fille-300-f.png'})
            //tl3.to(document.getElementById('avatar4'), 0.2, {opacity:1})
            document.getElementById("boutonParcours").href="/parcours-fille";
            $('#bullePres').addClass('enfant');
        break;
    }
    
    // Apparition bulle + bouton continuer
    tl3.to(document.getElementById('bullePres'), 0, {display:'inline'})
    tl3.from(document.getElementById('bullePres'), 1, {opacity:0}, '+=1')
    tl3.to(document.getElementById('continuer2'), 0, {display:'inline'})
    tl3.from(document.getElementById('continuer2'), 1, {opacity:0}, '+=0.5')
    
    tl3.play();
}

var music = new Audio();
var musiqueEnCours = false;

    function playMusic(nomMusique){
        if(musiqueEnCours!=true){
            music.src = nomMusique;
            music.play();
        }
        musiqueEnCours = true;
    }
    
    function stopMusic(){
        if(musiqueEnCours==true){
            music.pause();
            musiqueEnCours = false;
        }
    }

var rire = new Audio();

function sonRire(avatar){
    rire.src = "../musiques/rire-"+avatar+".mp3";
    console.log(rire);
    rire.play();
}

var parcoursCourant="Deb";

function choixBulle(nom){
    document.getElementById('bulle'+parcoursCourant).style.display='none';
    parcoursCourant=nom;
    document.getElementById('bulle'+parcoursCourant).style.display='inline';
    
    var tl3 = new TimelineLite();
    tl3.to(document.getElementById('bck'+nom), 1, {opacity:1})
    tl3.play();
}

function backgroundInitial(nom){
    var tl3 = new TimelineLite();
    tl3.to(document.getElementById('bck'+nom), 1, {opacity:0})
    tl3.play();
}

function redirectionMap(){
    document.location.href="http://www.google.com"
}

var musicbckg = new Audio();

function playMusicBackground(musique){
    musicbckg.src = musique+".mp3";
    console.log(musicbckg);
    musicbckg.play();
}

var etatSon="on";

function changeSound(){
    if(etatSon=="on"){
        musicbckg.volume = 0;
        $('#iconSon').removeClass('fa-volume-up');
        $('#iconSon').addClass('fa-volume-off');
        etatSon="off";
        $('#iconSon').css('margin', '0px 23px 0px 5px');
    }
    else if(etatSon=="off"){
        musicbckg.volume = 1;
        $('#iconSon').removeClass('fa-volume-off');
        $('#iconSon').addClass('fa-volume-up');
        etatSon="on";
        $('#iconSon').css('margin', '0px 5px 0px 5px');
    }
}