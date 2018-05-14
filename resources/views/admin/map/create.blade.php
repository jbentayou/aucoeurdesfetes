@extends('layouts.admin')

@section('dashcontent')
<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fa fa-plus"></i> Ajouter</h3>
			</div>
			
		<div class="card-body">
			
			<form method="POST" action="{{route('admin.map.store')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<label for="titre">Titre</label>
				<input type="text" name="titre" id="titre"/></br>
				</br>
				<label for="video">Video</label>
				<input type="text" name="video" id="video"/></br>
				</br>
				<label for="miniature">Miniature</label>
				<input type="text" name="miniature" id="miniature"/></br>
				</br>
				<label for="longitude">Longitude</label>
				<input type="double" name="longitude" id="longitude"/></br>
				</br>
				<label for="latitude">Latitude</label>
				<input type="double" name="latitude" id="latitude"/></br>
				</br>
				<label for="imgPicto">Picto</label></br>
				<input type="file" name="imgPicto" id="imgPicto"/></br>
				</br>
				<label for="imgSurvol">Survol</label></br>
				<input type="file" name="imgSurvol" id="imgSurvol"/></br><br/>
				
				
				<input type="submit" value="Submit"/>
			</form>
			
		</div>														
	</div><!-- end card-->
   
@endsection
