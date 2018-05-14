<!DOCTYPE html>
<html>
	 @include('header')
<head>
    <meta charset="utf-8" />
    <title>Map</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v0.43.0/mapbox-gl.js"></script>
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v0.43.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{secure_asset('css/map.css')}}">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	
</head>
<body class="map">

<div id='map'>
	<a href="/parcours-{!! $avatar !!}">{!! Html::Image('/images/logo ACDFB.png', "logo", ['id=logo2 class="img-rounded"'], true) !!}</a>
    {!! Html::Image('/images/'.$avatar.'-parcours.png', "MonAvatar", ['id=MonAvatar class="img-rounded"'], true) !!}
</div>

<script>
	/* global mapboxgl*/ 
	mapboxgl.accessToken = 'pk.eyJ1IjoicGF1bGFib3JkZTk3IiwiYSI6ImNqY2x3MGlxcTA5b3kycW4wdDB5a2p4ZmYifQ.iITk20Wwa0plwHg4zGjFNQ';
	
		// Fixer des limites à bayonne
	var limites = [
	    [-1.490731, 43.487456], // coordonnées sud ouest  	
		[-1.466869, 43.495903]  // coordonnées nord est 	
	];
		
		var map = new mapboxgl.Map({
	    container: 'map', // container id
	    style: 'mapbox://styles/mapbox/basic-v9', // stylesheet location
	    center: [-1.4748409999999694, 43.492949], // position de départ [lng, lat]
	   // maxZoom: 18.5,//zoom maximun sur la carte
	    minZoom: 17.5,//zoom minimun sur la carte
		zoom: 17.8,// zoom
		pitch: 60,//incline la carte
		maxBounds: limites // Définit les limites au maximum
		
	});
	 
	//Désactiver le zoom sur la carte lors de l'utilisation
	//map.scrollZoom.disable();
	
	// désactiver la rotation de la carte en utilisant le clic droit + glisser
	map.dragRotate.disable();

	// désactiver la rotation de la carte en utilisant le geste de rotation tactile
	map.touchZoomRotate.disableRotation();
	map.addControl(new mapboxgl.NavigationControl(), "bottom-right");//ajoute le +, le - et la bousole en bas à droit de la map
	
</script>

@foreach($data as $d)
<script>
	var la = "{{$d->latitude}}"
	var li = "{{$d->longitude}}"
	console.log(li);
	console.log(la);
	var geojson = {
		type: 'FeatureCollection',
		features: [{
			type: 'Feature',
			geometry: {
			  type: 'Point',
			  coordinates: [la, li] 
			},
			properties: {
			  title: "{{$d->titre}}",
			  description: ''
			}
		}]
	}
		
	/*global monument*//*global Femme*//*global Homme*//*global Fille*//*global Garçon*/
	// Ajouter un marqueur à la carte
	geojson.features.forEach(function(mairie) {
		// crée un élément HTML pour chaque fonctionnalité
		var el0 = document.createElement('div');
		var imga = document.createElement('img');
		// if('{{$d->type}}'== Femme){
		// 	imga.src = "{{asset('images/Icon-Mere')}}";
		// }else{
		// 	if('{{$d->type}}'== Homme){
		// 		imga.src = "{{asset('images/Icon-Pere')}}";
		// 	}else{
		// 		if('{{$d->type}}'== Fille){
		// 			imga.src = "{{asset('images/Icon-Fille')}}";
		// 		}else{
		// 			if('{{$d->type}}'== Garçon){
		// 				imga.src = "{{asset('images/Icon-Fils')}}";
		// 			}else{
		// 				imga.src = "{{asset('images/'.$d->image['src'])}}";
		// 			}
		// 		}
		// 	}
		// }

		el0.appendChild(imga);
		
		if('{{$d->type}}' != monument){
			imga.classList.add(('test'));
	
	//		affiché l'image survol
	
			el0.addEventListener('mouseover',() =>
			{
				imga.src = "{{asset('images/'.$d->imgSurvol)}}";
				imga.classList.add(('survol'));
			}
			
			
	
	//		el0.addEventListener('click', () => 
	// 	   { 
	// 		  lancé vidéo 
	// 	   });
		);
		}else
			imga.classList.add(('test2'))
		
			// crée un marqueur pour chaque entité et l'ajoute à la carte
			/*global mapboxgl*//*global map*/
			new mapboxgl.Marker(el0)
			.setLngLat(mairie.geometry.coordinates)
			//.setPopup(new mapboxgl.Popup({ offset: 25 }) // ajoute une popups
			//.setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
			.addTo(map);
	  });
	  
	  el0.onclick = function() { alert('blah'); };
</script>
	
@endforeach

</body>
</html>