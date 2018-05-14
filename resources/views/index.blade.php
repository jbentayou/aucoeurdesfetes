<!DOCTYPE html>
<html>
    @include('header')
    
    <body class="presentation" onload="playMusicBackground('musiques/27 course de vache 1')">
        <div class="text-center">
            <a href="/">{!! Html::Image('/images/logo ACDFB.png', "logo", ['id=logo class="img-rounded animated zoomIn"'], true) !!}</a>
            <div id="p1" class="container">
                <div id="fete" class="title fete">ON VOUS EMMÈNE FAIRE LA FÊTE !</div>
                <p id="explication" class="title explication">Bienvenue !<br/>Immergez-vous dans la plus grande fête du Sud-Ouest, vous retrouvez les festayres bayonnais pendant cinq jours. Une famille bayonnaise vous propose de vous accompagner dans la découverte de l'ambiance festive et chaleureuse des rues bayonnaises et de ses traditions. <br/><br/>
                Une web-création de R. Dargelez.</p>
                {!! Html::Image('/images/iut.png', "iut", ['id=iut  width=19% class=partenaire'], true) !!}
                {!! Html::Image('/images/fac.png', "fac", ['id=fac width=19% class=partenaire'], true) !!}
                {!! Html::Image('/images/aadp.jpg', "aadp", ['id=aadp width=19% class=partenaire'], true) !!}<br/>
                <button id="continuer1" class="button continuer" onclick="continuer1()">Continuer ❯</button>
                <div id="avatar" class="title avatar">Choisissez l'un des membres de la famille qui vous accompagnera durant votre voyage... au coeur des fêtes !</div>
                <section id="photoAvtr" class="row">
                    <div class="avatars col-md-12 col-xs-12">
                        {!! Html::Image('/images/homme-300.png', "homme", ['id=avatar1 onclick=selection(1,"homme") onmouseover=sonRire("homme") class="homme select"'], true) !!}
                        {!! Html::Image('/images/femme-300.png', "femme", ['id=avatar2 onclick=selection(2,"femme") onmouseover=sonRire("femme") class="femme select"'], true) !!}
                        {!! Html::Image('/images/garcon-300.png', "garcon", ['id=avatar3 onclick=selection(3,"garcon") onmouseover=sonRire("garcon") class="fils select"'], true) !!}
                        {!! Html::Image('/images/fille-300.png', "fille", ['id=avatar4 onclick=selection(4,"fille") onmouseover=sonRire("fille") class="fille select"'], true) !!}
                        <!--<hgroup class='speech-bubble' id='bullePres'><p>Vous êtes prêt ?  vous avez mis votre tenu blanche ? Nous vous souhaitons de bonnes fêtes… C'est parti !</p></hgroup>-->
                        <!--<div id='bullePres3'>
                            {!! Html::Image('/images/bulle2.png', "bullePres5", ['id=bullePres5'], true) !!}
                            <p>Vous êtes prêt ?  vous avez mis votre tenu blanche ?<br/> Nous vous souhaitons de bonnes fêtes… C'est parti !</p>
                        </div>-->
                    </div>
                    <div id='bullePres' class="bubble">
                        <p>Vous êtes prêt? Vous avez mis votre tenue blanche? Nous vous souhaitons de bonnes fêtes… C'est parti !</p>
                    </div>
                    <a id="boutonParcours" href="/" style="text-decoration:none"><button id="continuer2" class="button continuer">Continuer ❯</button></a>
                </section>
            </div>
        </div>
        
        <div class="IconBar">
            <i onclick="changeSound()" class="iconSon fas fa-volume-up fa-2x" id="iconSon"></i>
        </div>
        
        <script type="text/javascript">
            /* global TimelineLite */
            /* global $ */
            /* global tl2 */
            $(document).ready(function($) {
                //Premièrre TimeLine
                var tl = new TimelineLite();
                
                //Image
                tl.from(document.getElementById('logo'), 0.5, {width:'40%', top:'5%', left:'30%'}, '+=2.5') //ease:new SlowMo(0.35, 1.05)
                //Explication du site
                tl.from(document.getElementById('fete'), 0.7, {top:'20%', opacity:0}, '+=0.5')
                tl.from(document.getElementById('explication'), 1.3, {opacity:0}, '+=0.3')
                tl.from(document.getElementById('iut'), 0.3, {opacity:0})
                tl.from(document.getElementById('fac'), 0.3, {opacity:0})
                tl.from(document.getElementById('aadp'), 0.3, {opacity:0})
                tl.from(document.getElementById('continuer1'), 1, {opacity:0})
                
                tl.play();
            });
            
            function continuer1(){
                //Deuxieme Timeline
                var tl2 = new TimelineLite();
                
                //Disparition éléments
                tl2.to(document.getElementById('fete'), 1, {opacity:0})
                tl2.to(document.getElementById('explication'), 1, {opacity:0}, '-=0.5')
                tl2.to(document.getElementById('iut'), 0.5, {opacity:0}, '-=0.5')
                tl2.to(document.getElementById('fac'), 0.5, {opacity:0}, '-=0.3')
                tl2.to(document.getElementById('aadp'), 0.5, {opacity:0}, '-=0.3')
                tl2.to(document.getElementById('continuer1'), 0.5, {opacity:0})
                
                //Suppression des éléments
                tl2.to(document.getElementById('fete'), 0, {display:'none'})
                tl2.to(document.getElementById('explication'), 0.1, {display:'none'})
                tl2.to(document.getElementById('iut'), 0, {display:'none'})
                tl2.to(document.getElementById('fac'), 0, {display:'none'})
                tl2.to(document.getElementById('aadp'), 0, {display:'none'})
                tl2.to(document.getElementById('continuer1'), 0, {display:'none'})
                
                //Apparition message avatar
                tl2.to(document.getElementById('avatar'), 1, {opacity:1})
                tl2.to(document.getElementById('photoAvtr'), 0, {display:'inline'})
                tl2.from(document.getElementById('avatar1'), 0.5, {left:50, opacity:0})
                tl2.from(document.getElementById('avatar2'), 0.5, {left:50, opacity:0}, '-=0.2')
                tl2.from(document.getElementById('avatar3'), 0.5, {left:50, opacity:0}, '-=0.2')
                tl2.from(document.getElementById('avatar4'), 0.5, {left:50, opacity:0}, '-=0.2')
                
                tl2.play();
            }
        </script>
    </body>
</html>
