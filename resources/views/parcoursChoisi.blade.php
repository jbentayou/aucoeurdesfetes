<!DOCTYPE html>
<html>
    @include('header')
    
    <body class="parcoursChoisi" onload="playMusicBackground('musiques/musique-{{ $parcours }}')">
        <div class="headerParc">
            <a href="/parcours-{!! $avatar !!}">{!! Html::Image('/images/logo ACDFB.png', "logo", ['id=logo2 class="img-rounded"'], true) !!}</a>
            <div id="bulleF1" class="bubble">
                <p>Bienvenue dans le parcours {{ $parcours }} !</p>
            </div>
            <!-- Avatar -->
            {!! Html::Image('/images/'.$avatar.'-bandeau.png', "MonAvatar", ['id=MonAvatar class="img-rounded"'], true) !!}
            <!-- Panneau -->
            {!! Html::Image('/images/panneau-baton.png', "BatonPann", ['id=BatonPann'], true) !!}
            <a href="/parcours-{!! $avatar !!}/Festayre" style="text-decoration:none">{!! Html::Image('/images/Panneau-1.png', "Panneau", ['id=Panneau-festayre class=panneau '], true) !!}</a>
            <a href="/parcours-{!! $avatar !!}/Famille" style="text-decoration:none">{!! Html::Image('/images/Panneau-2.png', "Panneau", ['id=Panneau-famille class=panneau'], true) !!}</a>
            <a href="/parcours-{!! $avatar !!}/Enfant" style="text-decoration:none">{!! Html::Image('/images/Panneau-3.png', "Panneau", ['id=Panneau-enfant class=panneau'], true) !!}</a>
            <a href="/Cartev2-{!! $avatar !!}" style="text-decoration:none">{!! Html::Image('/images/Panneau-4.png', "Panneau", ['id=Panneau-carte class=panneau'], true) !!}</a>
        </div>
        <div class="container">
            <!--<h1 id="bienvenue">BIENVENUE SUR LE PARCOURS {{ $parcours }} !</h1>-->
            <div class="listVideo2 row grid">
                @foreach ($table as $point)
                    <div class="boxVideo element-item col-sm-6 col-md-4 col-lg-3" style="background-image:url('{{ $point->videoS['miniature'] }}');" id="video{{ $point->ordre }}">
                        <p class="ordre">{{ $point->ordre }}</p>
                        <a href="{{ $point->videoS['video'] }}" data-lity>
                            <div class="infosVid" id="infosVid{{ $point->id }}" data-descr="{{ $point->videoS['titre'] }}">
                                <h2 id="titre{{ $point->id }}" class="titreVideo">{{ $point->videoS['titre'] }}</h2>
                            </div>
                        </a>
                        <a href="/Cartev2-{!! $avatar !!}/{{ $parcours }}-{{ $point->videoS['id'] }}" data-lity>
                            <img src="/images/earth2.png" alt="carte" id="mapIcon{{ $point->id }}" class="mapIcon" width="35px" height="35px">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <script type="text/javascript">
            /* global TimelineLite */
            /* global $ */
            /* global $grid */
            $(document).ready(function($) {
                // TimeLine animation
                var tl = new TimelineLite();
                
                //Image logo
                tl.from(document.getElementById('logo2'), 0.5, {left:'-10%', opacity:0})
                
                // Titre
                //tl.from(document.getElementById('bienvenue'), 0.3, {opacity: 0, margin:'0 0 0 10%'})
                
                //Vidéos
                var i = 1;
                do {
                    tl.to(document.getElementById('video'+i), 0.15, {opacity:1, transform: 'rotateX(0deg)'})
                    i++;
                } while (document.getElementById('video'+i));
                
                //Avatar
                tl.from(document.getElementById('MonAvatar'), 0.7, {right:'-10%', opacity:0})
                tl.from(document.getElementById('bulleF1'), 0.3, {opacity: 0})
                
                //Panneau
                tl.from(document.getElementById('BatonPann'), 0.3, {opacity: 0}, '+=0.5')
                tl.from(document.getElementById('Panneau-festayre'), 0.3, {opacity: 0}, '-=0.1')
                tl.from(document.getElementById('Panneau-famille'), 0.3, {opacity: 0}, '-=0.1')
                tl.from(document.getElementById('Panneau-enfant'), 0.3, {opacity: 0}, '-=0.1')
                tl.from(document.getElementById('Panneau-carte'), 0.3, {opacity: 0}, '-=0.1')
                
                tl.play();
            });
        </script>
         @include('IconBar')
    </body>
</html>