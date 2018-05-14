<!DOCTYPE html>
<html>
    @include('header')
    
    <!--<body background="/images/FOND.png" class="parcours">-->
    <body class="parcoursChoisi">
        <div class="headerParc">
            <a href="/parcours-festayre/{!! $avatar !!}">{!! Html::Image('/images/logo ACDFB.png', "logo", ['id=logo2 class="img-rounded"'], true) !!}</a>
            <div id="bulleF1" class="bubble">
                <p>Hola !</p>
            </div>
            {!! Html::Image('/images/'.$avatar.'-300-f.png', "MonAvatar", ['id=MonAvatar class="img-rounded"'], true) !!}
        </div>
        <div class="IconBar">
            <i onclick="changeSound()" class="iconSon fas fa-volume-up fa-2x" id="iconSon"></i>
            <a href="/Info"><i class="iconInfo fas fa-info-circle fa-2x"></i></a>
            <a href="/petitLeon"><i class="iconPL fas fa-book fa-2x"></i></a>
            <a href="https://www.google.fr/"><i class="iconFB fab fa-facebook-square fa-2x"></i></a>
        </div>
    </body>
</html>