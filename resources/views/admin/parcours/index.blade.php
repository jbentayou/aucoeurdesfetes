@extends('layouts.admin')

@section('dashcontent')
<div class="card mb-3">
		<div class="card-header">
			<h3><i class="fa fa-table"></i>  PARCOURS </h3>
			</div>
			
		<div class="card-body">
			    <a role="button" href="{{route('admin.parcours.create')}}" class="btn btn-primary"><span class="btn-label"><i class="fa fa-plus"></i></span>Ajouter</a>
			    <br><br>
			
			
			<table class="table table-responsive-xl">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Parcours</th>
				  <th scope="col">Point_id</th>
				</tr>
			  </thead>
			  <tbody>
			  	
			     @foreach($data as $d)
    				<tr>
    				  <th scope="row">{{$d->id}}</th>
    				  <td>{{$d->parcours}}</td>
    				  <td>{{$d->point_id}}</td>
    				  <td>
    				          <a role="button" href="{{route('admin.parcours.edit', $d->id)}}" class="btn btn-warning" style="margin:5px 0px;"><span class="btn-label"><i class="fas fa-pencil-alt"></i></span>Editer</a>
    				          
    				          <form action="{{route('admin.parcours.destroy', $d->id)}}" method="POST">
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
