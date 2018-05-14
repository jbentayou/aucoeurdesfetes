@extends('layouts.admin')

@section('dashcontent')
<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fa fa-plus"></i> Ajouter</h3>
			</div>
			
		<div class="card-body">
			
			<form method="post" action="{{route('admin.famille.update', $data->id)}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{method_field('PUT')}}
				<label for="ordre">Ordre</label>
				<input type="integer" name="ordre" id="ordre" value="{{ $data->ordre }}"/></br>
				</br>
				<label for="video">Video</label>
				<input type="text" name="video" id="video" value="{{ $data->video }}"/></br>
				</br>
				<input type="submit" value="Submit"/>
			</form>
			
		</div>
	</div><!-- end card-->
   
@endsection
