@extends('Home.indexadmin')

@section('formulario')

<div class="row">
  <div class="col-md-4" style="width: 250px;"></div>
  <div class="col-md-4" style="width: 600px";>
  		<div class="panel panel-default">
  <!-- Default panel contents -->
		  <div class="panel-heading"><h4>Categorias</h4></div>
		  <div class="panel-body">
		    @include('flash::message')
		  	<div class="table-responsive">
			
			<br>
			<a type="button" class="btn btn-success" href="{{ route('categorias.create') }}">Agregar Categoria <span class="glyphicon glyphicon-plus"></span></a>
			<br>
			<br>
			<table class="table table-bordered" style="text-align-last: center;">
		 	<thead>
		 		<th>ID</th>
		 		<th>Nombre</th>
		 		<th>Acciones</th>
		 	</thead>
		 	<tbody>
	 		@foreach($categorias as $categoria)
	 		<tr>
	 			<td>{{ $categoria->id }}</td>
	 			<td>{{ $categoria->nombre }}</td>
	 			<td align="center"><a type="button" class="btn btn-warning" href="{{ route('categorias.edit',$categoria->id) }}"><span class="glyphicon glyphicon-pencil"></span></a><a type="button" style="margin-left: 30px;" class="btn btn-danger" href="{{ route('admin.categorias.destroy',$categoria->id) }}" onclick="return confirm('Estas seguro que deseas eliminar esta categoria?')"><span class="glyphicon glyphicon-trash"></span></a></td>
	 		</tr>
	 		@endforeach
	 	</tbody>
	 </table>
	 {{ $categorias->render() }}
	 </div>
		  </div>
		</div>
	 </div>

  </div>
  <div class="col-md-4"></div>


@endsection