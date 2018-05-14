@extends('layouts.admin')

@section('dashcontent')
<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fa fa-plus"></i> Ajouter</h3>
			</div>
			
		<div class="card-body">
			
			<form method="POST" action="{{route('admin.festayre.store')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<label for="titre">Parcours</label>
				<input type="text" name="titre" id="titre"/></br>
				</br>
				<label for="ordre">Point_id</label>
				<input type="integer" name="ordre" id="ordre"/></br>
				</br>
				<input type="submit" value="Submit"/>
			</form>
			
		</div>														
	</div><!-- end card-->
   
@endsection
