@extends('layouts.admin')

@section('dashcontent')
<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fa fa-table"></i> Les points</h3>
			</div>
			
		<div class="card-body">
			    <a role="button" href="{{route('admin.map.create')}}" class="btn btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span>Ajouter</a>
			    <br><br>
			
			
			<table class="table table-responsive">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Titre</th>
				  <th scope="col">Video</th>
				  <th scope="col">Miniature</th>
				  <th scope="col">Longitude</th>
				  <th scope="col">Latitude</th>
				  <th scope="col">Picto</th>
				  <th scope="col">Survol</th>
				  <th scope="col">Actions</th>
				</tr>
			  </thead>
			  <tbody>
			     @foreach($data as $d)
    				<tr>
    				  <th scope="row">{{$d->id}}</th>
    				  <td scope="row">{{$d->titre}}</td>
    				  <td scope="row">{{$d->video}}</td>
    				  <td>
    				  	<div class="row">
    				  		<img src="{{$d->miniature}}" class="img-fluid img-map" style="height:auto"></img>
    				  	</div>
    				  </td>
    				  <td scope="row">{{$d->longitude}}</td>
    				  <td scope="row">{{$d->latitude}}</td>
    				  <td>
    				  	<div class="row">
    				  		<img src="{{asset('images/'.$d->imgPicto)}}" class="img-fluid img-map" style="height:auto"></img>
    				  	</div>
    				  </td>
    				  <td>
    				  	<div class="row">
    				  		<img src="{{asset('images/Parcours/'.$d->imgSurvol)}}" class="img-fluid img-map" style="height:auto"></img>
    				  	</div>
    				  </td>
    				  <td>
    				          <a role="button" href="{{route('admin.map.edit', $d->id)}}" class="btn btn-warning" style="margin:5px 0px;"><span class="btn-label"><i class="fas fa-pencil-alt"></i></span>Editer</a>
    				          
    				          <form action="{{route('admin.map.destroy', $d->id)}}" method="POST">
    				          	{{csrf_field()}}
    				          	{{method_field('DELETE')}}
    				          	 <button type="submit" class="btn btn-outline-danger">
    				          	 	<span class="btn-label"><i class="fas fa-trash-alt"></i></span>Supprimer</a>
    				          	 </button>
    				          </form>
    				  </td>

    				</tr>
			      @endforeach
			  </tbody>
			</table>
			
		</div>														
	</div><!-- end card-->
   
@endsection
