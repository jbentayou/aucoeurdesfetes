@extends('layouts.admin')

@section('dashcontent')
<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fa fa-table"></i>  PARCOURS FESTAYRE</h3>
			</div>
			
		<div class="card-body">
			    <a role="button" href="{{route('admin.festayre.create')}}" class="btn btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span>Ajouter</a>
			    <br><br>
			
			
			<table class="table table-responsive-xl">
			  <thead>
				<tr>
				  <th scope="col">Ordre</th>
				  <th scope="col">ID Video</th>
				  <th scope="col">Titre</th>
				  <th scope="col">Miniature</th>
				  <th scope="col">Actions</th>
				</tr>
			  </thead>
			  <tbody>
			  	
			     @foreach($data as $d)
    				<tr>
    				  <td>{{$d->ordre}}</td>
    				  <td>{{$d->video}}</td>
    				  <td>{{$d->videoS['titre']}}</td>
    				  <td>
    				  	<div class="row">
    				  		<img src="{{ $d->videoS['miniature']}}" class="img-fluid img-map" style="height:auto"></img>
    				  	</div>
    				  </td>
    				  <td>
    				          <a role="button" href="{{route('admin.festayre.edit', $d->id)}}" class="btn btn-warning" style="margin:5px 0px;"><span class="btn-label"><i class="fas fa-pencil-alt"></i></span>Editer</a>
    				          
    				          <form action="{{route('admin.festayre.destroy', $d->id)}}" method="POST">
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
