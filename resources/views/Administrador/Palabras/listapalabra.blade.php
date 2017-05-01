@extends('Home.indexadmin')

@section('formulario')

<div class="row">
  <div class="col-md-4" style="width: 250px;"></div>
  <div class="col-md-4" style="width: 600px";>
  		<div class="panel panel-default">
  <!-- Default panel contents -->
		  <div class="panel-heading"><h4>Palabras</h4></div>
		  <div class="panel-body">
		    @include('flash::message')
		  	<div class="table-responsive">
			
			<br>
			<a type="button" class="btn btn-success" href="{{ route('palabras.create') }}">Agregar Palabra <span class="glyphicon glyphicon-plus"></span></a>
			<br>
			<br>
			<table class="table table-bordered" style="text-align-last: center;">
		 	<thead>
		 		<th>ID</th>
		 		<th>Nombre</th>
		 		<th>Categoria</th>
		 		<th>Acciones</th>
		 	</thead>
		 	<tbody>
	 		@foreach($palabras as $palabra)
	 		<tr>
	 			<td>{{ $palabra->id }}</td>
	 			<td>{{ $palabra->nombre }}</td>
	 			@foreach($categorias as $categoria)
		 			@if($palabra->categoria_id==$categoria->id)
		 			<td>{{ $categoria->nombre }}</td>
		 			@endif
	 			@endforeach
	 			<td align="center"><a type="button" class="btn btn-warning" href="{{ route('palabras.edit',$palabra->id) }}"><span class="glyphicon glyphicon-pencil"></span></a><a type="button" style="margin-left: 30px;" class="btn btn-danger" href="{{ route('admin.palabras.destroy',$palabra->id) }}" onclick="return confirm('Estas seguro que deseas eliminar esta categoria?')"><span class="glyphicon glyphicon-trash"></span></a></td>
	 		</tr>
	 		@endforeach
	 		<div class="star-rating">
			    <a href="#1">&#9733;</a>
			    <a href="#2">&#9733;</a>
			    <a href="#3">&#9733;</a>
			    <a href="#4">&#9733;</a>
			    <a href="#5">&#9733;</a>
			</div>
	 	</tbody>
	 </table>
	 {{ $palabras->render() }}
	 </div>
		  </div>
		</div>
	 </div>

  </div>

@endsection