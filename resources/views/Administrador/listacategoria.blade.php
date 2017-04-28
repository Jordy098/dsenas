@extends('Home.indexadmin')

@section('formulario')
<div class="row" style="margin-top: 150px;margin-left: 40px;">
  <div class="col-xs-12 col-sm-6 col-md-8">
  	<table class="table table-striped"">
	 	<thead>
	 		<th>ID</th>
	 		<th>Nombre</th>
	 	</thead>
	 	<tbody>
	 		@foreach($categorias as $categoria)
	 		<tr>
	 			<td>{{ $categoria->id }}</td>
	 			<td>{{ $categoria->nombre }}</td>
	 		</tr>
	 		@endforeach
	 	</tbody>
	 </table>
	 {{ $categorias->render() }}
  </div>
  <div class="col-xs-6 col-md-4"></div>
</div>
@endsection