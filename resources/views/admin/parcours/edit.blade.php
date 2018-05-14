@extends('layouts.admin')

@section('dashcontent')
<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fa fa-plus"></i> Ajouter</h3>
			</div>
			
		<div class="card-body">
			
			<form method="post" action="{{route('admin.festayre.update', $data->id)}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{method_field('PUT')}}
				<label for="parcours">Parcours</label>
				<input type="text" name="parcours" id="parcours" value="{{ $data->parcours }}"/></br>
				</br>
				<label for="Point_id">Point_id</label>
				<input type="text" name="Point_id" id="Point_id" value="{{ $data->Point_id }}"/></br>
				</br>
				<input type="submit" value="Submit"/>
			</form>
			
		</div>
	</div><!-- end card-->
   
@endsection
