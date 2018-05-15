<!DOCTYPE html>
<html>
	@include('header')
<body class="map" onload="playMusicBackground('musiques/musique-Carte')" >
	<div id='map'>
		<a href="/parcours-{!! $avatar !!}">{!! Html::Image('/images/logo ACDFB.png', "logo", ['id=logo2 class="img-rounded"']) !!}</a>
	    {!! Html::Image('/images/'.$avatar.'-parcours.png', "MonAvatar", ['id=MonAvatar class="img-rounded"']) !!}
	    <div id="bulleDeb" class="bubble animated fadeIn">
	        <p id="bulleAvatar">Bienvenue dans les rues de Bayonne !</p>
	    </div>
	    <!-- Panneau -->
	        {!! Html::Image('/images/panneau-baton.png', "BatonPann", ['id=BatonPann']) !!}
	        <a href="/Cartev2-{!! $avatar !!}/Festayre-0" style="text-decoration:none">{!! Html::Image('/images/Panneau-1.png', "Panneau", ['id=Panneau-festayre class=panneau ']) !!}</a>
	        <a href="/Cartev2-{!! $avatar !!}/Famille-0" style="text-decoration:none">{!! Html::Image('/images/Panneau-2.png', "Panneau", ['id=Panneau-famille class=panneau']) !!}</a>
	        <a href="/Cartev2-{!! $avatar !!}/Enfant-0" style="text-decoration:none">{!! Html::Image('/images/Panneau-3.png', "Panneau", ['id=Panneau-enfant class=panneau']) !!}</a>
	        <a href="/Cartev2-{!! $avatar !!}" style="text-decoration:none">{!! Html::Image('/images/Panneau-5.png', "Panneau", ['id=Panneau-carte class=panneau']) !!}</a>
	</div>
	
	<script>
		/* global $ */
		/* global TimelineLite */
		$("#logo2").mouseover(function(){
			document.getElementById("bulleAvatar").innerHTML = "Retournez au menu principal.";
		    var tl3 = new TimelineLite();
			tl3.to(document.getElementById('bulleDeb'), 0, {display:'block'})
			tl3.play();
		});
		$("#logo2").mouseout(function(){
		    var tl4 = new TimelineLite();
			tl4.to(document.getElementById('bulleDeb'), 0, {display:'none'})
			tl4.play();
		});
		
		/* global mapboxgl*/ 
		mapboxgl.accessToken = 'pk.eyJ1IjoicGF1bGFib3JkZTk3IiwiYSI6ImNqY2x3MGlxcTA5b3kycW4wdDB5a2p4ZmYifQ.iITk20Wwa0plwHg4zGjFNQ';
	
		var limites = [
		    [-1.490731, 43.487456],	
			[-1.466869, 43.495903] 	
		];
			
			var map = new mapboxgl.Map({
		    container: 'map',
		    style: 'mapbox://styles/mapbox/basic-v9', 
		    center: [-1.4749999999999694, 43.490500], 
		   // maxZoom: 18.5,//zoom maximun sur la carte
		    minZoom: 17.5,
			zoom: 17.8,
			pitch: 60,
			maxBounds: limites, 
			legendControl: {
			    position: 'topright'
			}
		});
		 
		//map.scrollZoom.disable();
		map.dragRotate.disable();
		map.touchZoomRotate.disableRotation();
		map.addControl(new mapboxgl.NavigationControl(), "bottom-right");
		
	</script>
	
	@foreach($data as $d)
		<script>
			/* global map */
			/* global mapboxgl */
			/* global marker */
			/* global $ */
			/* global TimelineLite */
			/* global changeSound */
			
			var la = "{{$d->latitude}}";
			var li = "{{$d->longitude}}";
			var picto = "{{ $d->imgPicto }}";
			var lienPicto2 = "{{asset('images')}}"+"/"+picto
			var lienPicto = "{{ asset('images/') }}"+"/"+picto
			var idPicto = "{{ $d->id }}";
			var imgSurvol = "{{ $d->imgSurvol }}";
			var lienSurvol = "{{ asset('images/Parcours') }}"+"/"+imgSurvol
	
		    // create a DOM element for the marker
		    var el = document.createElement('div');
		    el.id = 'marker'+idPicto;
		    el.className = 'marker';
		    
		    //el.style.background= 'url(https://au-coeur-des-fetes-jbentayou.c9users.io/images/'+picto+') no-repeat center fixed';
		    el.style.background= 'url('+lienPicto+') no-repeat center fixed';
		    //$(el).attr('data-content',"<img src='url(https://au-coeur-des-fetes-jbentayou.c9users.io/images/Icon-Fils.png)' />");
		    //$(el).before('<img src="http://dailypost.ng/wp-content/uploads/2018/02/Efe.jpg" class="flickr" />');
		    el.style.backgroundSize= '100% 100%';
		    el.style.width = '40px';
		    el.style.height = '50px';

		    el.addEventListener('mouseover', function() {
				var tl1 = new TimelineLite();
		        document.getElementById("bulleAvatar").innerHTML = "{{ $d->titre }}";
		        //document.getElementById("imageid").src="../template/save.png";
		        tl1.to(document.getElementById('bulleDeb'), 0, {display:'block'})
		        tl1.to(document.getElementById('survol'+"{{ $d->id }}"), 0, {display:'block'})
		        console.log('survol'+"{{ $d->id }}");
			    tl1.play();
			});
		    
		    el.addEventListener('mouseout', function() {
				var tl2 = new TimelineLite();
				tl2.to(document.getElementById('bulleDeb'), 0, {display:'none'})
			    tl2.to(document.getElementById('survol'+"{{ $d->id }}"), 0, {display:'none'})
			    tl2.play();
		    });
		    
		    el.addEventListener('click', function() {
				changeSound();
		    });
		    
		    var ytb = document.createElement('a');
		    ytb.setAttribute("id", "ytb"+idPicto);
		    ytb.setAttribute("href", "{{$d->video}}");
			ytb.setAttribute("data-lity", "");
			ytb.appendChild(el);
		
		    // add marker to map
		    new mapboxgl.Marker(ytb)
		        .setLngLat([la, li])
		        .addTo(map);
		        
			$('#ytb'+idPicto).after('<img src="'+lienSurvol+'" class="survol2 animated fadeIn" id="survol'+idPicto+'" style="opacity:1"/>');
			$("#survol"+idPicto).mouseover(function(){
			    var tl3 = new TimelineLite();
				tl3.to(document.getElementById('survol'+idPicto), 0, {display:'block'})
				tl3.play();
			});
			$("#survol"+idPicto).mouseout(function(){
			    var tl4 = new TimelineLite();
				tl4.to(document.getElementById('survol'+idPicto), 0, {display:'none'})
				tl4.play();
			});
		</script>
	@endforeach
	
	@foreach($monuments as $m)
	<script type="text/javascript">
			/* global map */
			/* global mapboxgl */
			/* global marker */
			/* global $ */
			/* global TimelineLite */
                        
                var la = "{{$m->latitude}}";
				var li = "{{$m->longitude}}";
				var picto = "{{ $m->image }}";
				var lienPicto = "{{ asset('images/Monuments') }}"+"/"+picto
				var idPicto = "{{ $m->id }}";
                        
                        // create a DOM element for the marker
					    var el = document.createElement('div');
					    el.id = "Monument"+idPicto;
					    el.className = 'marker';
					    
					    //el.style.background= 'url(https://au-coeur-des-fetes-jbentayou.c9users.io/images/'+picto+') no-repeat center fixed';
					    el.style.background= 'url('+lienPicto+') no-repeat center fixed';
					    //$(el).attr('data-content',"<img src='url(https://au-coeur-des-fetes-jbentayou.c9users.io/images/Icon-Fils.png)' />");
					    //$(el).before('<img src="http://dailypost.ng/wp-content/uploads/2018/02/Efe.jpg" class="flickr" />');
					    el.style.backgroundSize= '100% 100%';
					    el.style.width = '45px';
					    el.style.height = '65px';
					    
					    el.addEventListener('mouseover', function() {
							var tl1 = new TimelineLite();
					        document.getElementById("bulleAvatar").innerHTML = "{{ $m->titre }}";
					        tl1.to(document.getElementById('bulleDeb'), 0, {display:'block'})
					        tl1.to(document.getElementById('survolMonument'+"{{ $m->id }}"), 0, {display:'block'})
					        console.log('survolMonument'+"{{ $m->id }}");
						    tl1.play();
						});
					    
					    el.addEventListener('mouseout', function() {
							var tl2 = new TimelineLite();
							tl2.to(document.getElementById('bulleDeb'), 0, {display:'none'})
						    tl2.to(document.getElementById('survolMonument'+"{{ $m->id }}"), 0, {display:'none'})
						    console.log('survolMonument'+"{{ $m->id }}");
						    tl2.play();
					    });
					    
					    var ytb = document.createElement('div');
					    ytb.setAttribute("id", "ytbMonument"+idPicto);
						ytb.appendChild(el);
					    
					    // add marker to map
					    new mapboxgl.Marker(ytb)
					        .setLngLat([la, li])
					        .addTo(map);
					        
					    $("#ytbMonument"+"{{ $m->id }}").after('<img src="'+lienPicto+'" class="survol animated fadeIn" id="survolMonument'+idPicto+'" style="opacity:1"/>');
						$("#survolMonument"+"{{ $m->id }}").mouseover(function(){
						    var tl3 = new TimelineLite();
							tl3.to(document.getElementById('survolMonument'+idPicto), 0, {display:'block'})
							tl3.play();
						});
						$("#survolMonument"+"{{ $m->id }}").mouseout(function(){
						    var tl4 = new TimelineLite();
							tl4.to(document.getElementById('survolMonument'+idPicto), 0, {display:'none'})
							tl4.play();
						});
            </script>
            @endforeach
	
	<div class="loader"></div>
	<script type="text/javascript">
	/* global $ */
		$(window).on('load', function() {
			$(".loader").fadeOut("200");
		});
	</script>
</body>
</html>