<!DOCTYPE html>
<html>
    @include('header')
    
    <body class="parcours" onload="playMusicBackground('musiques/13 ouverture')" id="parcours">
        <div class=" backgroundParc bckFestayre" id="bckFestayre"></div>
        <div class="backgroundParc bckFamille" id="bckFamille"></div>
        <div class="backgroundParc bckEnfant" id="bckEnfant"></div>
        <div class="backgroundParc bckCarte" id="bckCarte"></div>
        <div class="text-center">
            <a href="/parcours-{!! $avatar !!}">{!! Html::Image('/images/logo ACDFB.png', "logo", ['id=logo2 class="img-rounded"'], true) !!}</a>
            {!! Html::Image('/images/'.$avatar.'-parcours.png', "MonAvatar", ['id=MonAvatar class="img-rounded"'], true) !!}
            <!--<hgroup class='speech-bubble' id='bulle1'><p>Où est-ce-que je vous enmène ?</p></hgroup>-->
            <div id="bulleDeb" class="bubble">
                <p>Où est-ce-que je vous emmène ?</p>
            </div>
            <div id='bulleFestayre' class="bubble" style="display: none;">
                <p>De jour ou de nuit, vivez le parcours du festayre sur 8.5km. Un conseil : équipez-vous de bonnes chaussures !</p>
            </div>
            <div id='bulleFamille' class="bubble" style="display: none;">
                <p>Sur un parcours de 4.75km, partagez les moments forts des fêtes en famille.</p>
            </div>
            <div id='bulleEnfant' class="bubble" style="display: none;">
                <p>Sur un parcours de 3.1km, visualisez les activités essentielles dédiées aux petits festayres...</p>
            </div>
            <div id='bulleCarte' class="bubble" style="display: none;">
                <p>60 moments des fêtes sur une carte : Choisissez ceux que vous souhaitez visionner...</p>
            </div>
            {!! Html::Image('/images/panneau-baton.png', "BatonPann", ['id=BatonPann'], true) !!}
            <a href="/parcours-{!! $avatar !!}/Festayre" style="text-decoration:none">{!! Html::Image('/images/Panneau-1.png', "Panneau", ['id=Panneau-festayre class=panneau '], true) !!}</a>
            <a href="/parcours-{!! $avatar !!}/Famille" style="text-decoration:none">{!! Html::Image('/images/Panneau-2.png', "Panneau", ['id=Panneau-famille class=panneau'], true) !!}</a>
            <a href="/parcours-{!! $avatar !!}/Enfant" style="text-decoration:none">{!! Html::Image('/images/Panneau-3.png', "Panneau", ['id=Panneau-enfant class=panneau'], true) !!}</a>
            <a href="/Cartev2-{!! $avatar !!}" style="text-decoration:none">{!! Html::Image('/images/Panneau-4.png', "Panneau", ['id=Panneau-carte class=panneau'], true) !!}</a>
        </div>
        
        <script type="text/javascript">
            /* global TimelineLite */
            /* global $ */
            $(document).ready(function($) {
                //Premièrre TimeLine
                var tl = new TimelineLite();
                
                //Image logo
                tl.from(document.getElementById('logo2'), 0.5, {left:'-10%', opacity:0})
                
                //tl.from(document.getElementById('BatonPann'), 1, {bottom:'-75%'})
                tl.from(document.getElementById('Panneau-festayre'), 1, {bottom:'0', opacity:'0'})
                tl.from(document.getElementById('Panneau-famille'), 1, {bottom:'0', opacity:'0'}, '-=0.8')
                tl.from(document.getElementById('Panneau-enfant'), 1, {bottom:'0', opacity:'0'}, '-=0.8')
                tl.from(document.getElementById('Panneau-carte'), 1, {bottom:'0', opacity:'0'}, '-=0.5')
                
                tl.from(document.getElementById('MonAvatar'), 1, {left:'-150px', opacity:0}, '+=0.5')
                tl.from(document.getElementById('bulleDeb'), 1, {opacity:0}, '#bulle')
                //tl.to(document.getElementById('bulleParc'), 1, {opacity:0}, '#bulle+=3')
                
                tl.play();
                
                setTimeout(function(){
                    //Mouse Over
                    $('#Panneau-festayre').attr('onmouseover','choixBulle("Festayre")');
                    $('#Panneau-famille').attr('onmouseover','choixBulle("Famille")');
                    $('#Panneau-enfant').attr('onmouseover','choixBulle("Enfant")');
                    $('#Panneau-carte').attr('onmouseover','choixBulle("Carte")');
                    
                    //Mouse Out
                    $('#Panneau-festayre').attr('onmouseout','backgroundInitial("Festayre")');
                    $('#Panneau-famille').attr('onmouseout','backgroundInitial("Famille")');
                    $('#Panneau-enfant').attr('onmouseout','backgroundInitial("Enfant")');
                    $('#Panneau-carte').attr('onmouseout','backgroundInitial("Carte")');
                }, 4500);
            });
        </script>
        
        @include('IconBar')
    </body>
</html>