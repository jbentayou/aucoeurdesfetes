@extends('layouts.admin')

@section('dashcontent')
<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fa fa-plus"></i> Ajouter</h3>
			</div>
			
		<div class="card-body">
			<form method="post" action="{{route('admin.map.update', $data->id)}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{method_field('PUT')}}
				<label for="titre">Titre</label>
				<input type="text" name="titre" id="titre" value="{{ $data->titre }}"/></br>
				</br>
				<label for="video">Video</label>
				<input type="text" name="video" id="video" value="{{ $data->video }}"/></br>
				</br>
				<label for="miniature">Miniature</label>
				<input type="text" name="miniature" id="miniature" value="{{ $data->miniature }}"/></br>
				</br>
				<label for="longitude">Longitude</label>
				<input type="double" name="longitude" id="longitude" value="{{ $data->longitude }}"/></br>
				</br>
				<label for="latitude">Latitude</label>
				<input type="double" name="latitude" id="latitude" value="{{ $data->latitude }}"/></br>
				</br>
				<label for="imgPicto">Picto</label></br>
				<input type="file" name="imgPicto" id="imgPicto" value="{{ $data->imgPicto }}"/></br>
				</br>
				<label for="imgSurvol">Survol</label></br>
				<input type="file" name="imgSurvol" id="imgSurvol" value="{{ $data->imgSurvol }}"/></br><br/>
				</br>
				<input type="submit" value="Submit"/>
			</form>
			
		</div>
	</div><!-- end card-->
   
@endsection
