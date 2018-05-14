<!DOCTYPE html>
<html>
    @include('header')
    
    <!--<body background="/images/FOND.png" class="parcours">-->
    <body class="Annexe">
        <div class="headerPL">
            <a href="javascript:history.go(-1)">{!! Html::Image('/images/logo ACDFB.png', "logo", ['id=logo2 class="img-rounded"'], true) !!}</a>
        </div>
        <div class="container">
            <h1>Le Petit Leon</h1>
            <div id="contenu"></div>
            <script type="text/javascript">
            var request = new XMLHttpRequest();
                request.open('GET', "JSON/LePetitLeon.json");
                request.responseType = 'json';
                request.send();
                
                request.onload = function(){
                    var pl = request.response;
                    // On récupère le tableau contenant le petit leon
                    var tabPetitLeon = pl["petitLeon"];
                    console.log(pl);
                    for (var i = 0 ; i < tabPetitLeon.length; i++)
                    {
                        sessionStorage.setItem("Expression", tabPetitLeon[i].Expression);
                        sessionStorage.setItem("Explication", tabPetitLeon[i].Explication);
                        
                        var titre = document.createElement('h2');
                        titre.setAttribute("id", 'titre-' + sessionStorage.getItem("Expression"));
                        document.getElementById('contenu').appendChild(titre);
                        document.getElementById("titre-"+sessionStorage.getItem("Expression")).innerHTML = sessionStorage.getItem("Expression");
                        
                        var def = document.createElement('p');
                        def.setAttribute("id", 'def-' + sessionStorage.getItem("Expression"));
                        document.getElementById('contenu').appendChild(def);
                        document.getElementById("def-"+sessionStorage.getItem("Expression")).innerHTML = sessionStorage.getItem("Explication");
                    }
                }
            </script>
        </div>
         @include('IconBar')
    </body>
</html>