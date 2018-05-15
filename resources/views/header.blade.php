    <head>
        <meta charset="utf-8" />
        <title>Au coeur des fêtes de Bayonne !</title>
        
        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        
        <!-- BOOTSTRAP -->
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') !!}
        <!--[if lt IE 9]>
            {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
            {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
        <![endif]-->
        
        <!-- JS -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/script.js',true) }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenLite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TimelineLite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/CSSPlugin.min.js"></script>
        
        <!-- Lity -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.0/lity.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.0/lity.min.js"></script>
        
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="../images/logo ACDFB.png" />
        
        <style type="text/css">
            button:focus {
                outline:0;
            } 
        </style>
        
        <!-- MAPBOX -->
        <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
        <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v0.45.0/mapbox-gl.js"></script>
        <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v0.45.0/mapbox-gl.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{secure_asset('css/map.css')}}">
        <script
    		src="https://code.jquery.com/jquery-3.3.1.js"
    		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    		crossorigin="anonymous">
        </script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119034862-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-119034862-1');
        </script>

<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>

    </head>