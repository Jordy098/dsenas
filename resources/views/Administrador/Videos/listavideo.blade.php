@extends('Home.indexadmin')

@section('formulario')

<div class="row">
  <div class="col-md-4" style="width: 250px;"></div>
  <div class="table-responsive">
  <div class="col-md-4" style="width: auto";>
  		<div class="panel panel-default">
  <!-- Default panel contents -->
		  <div class="panel-heading"><h4>Videos</h4></div>
		  <div class="panel-body">
		    @include('flash::message')
		  	
			
			<br>
			<a type="button" class="btn btn-success" href="{{ route('videos.create') }}">Agregar Video <span class="glyphicon glyphicon-plus"></span></a>
			<br>
			<br>
			<table class="table table-bordered" style="text-align-last: center;">
		 	<thead>
		 		<th>ID</th>
		 		<th>Url</th>
		 		<th>Palabra</th>
		 		<th>Region</th>
		 		<th>Estado</th>
		 		<th>Acciones</th>
		 	</thead>
		 	<tbody>
	 		@foreach($videos as $video)
	 		<tr>
	 			<td>{{ $video->id }}</td>
	 			<td>{{ $video->url }}</td>
	 			@foreach($palabras as $palabra)
		 			@if($palabra->id==$video->palabra_id)
		 			<td>{{ $palabra->nombre }}</td>
		 			@endif
	 			@endforeach
	 			@foreach($regiones as $region)
		 			@if($region->id==$video->region_id)
		 			<td>{{ $region->nombre }}</td>
		 			@endif
	 			@endforeach
	 			@foreach($estados as $estado)
		 			@if($estado->id==$video->estado_id)
		 			<td>{{ $estado->descripcion }}</td>
		 			@endif
	 			@endforeach
	 			<td align="center"><a type="button" class="btn btn-warning" href="{{ route('videos.edit',$video->id) }}"><span class="glyphicon glyphicon-pencil"></span></a><a type="button" style="margin-left: 30px;" class="btn btn-danger" href="{{ route('admin.videos.destroy',$video->id) }}" onclick="return confirm('Estas seguro que deseas eliminar esta categoria?')"><span class="glyphicon glyphicon-trash"></span></a></td>
	 		</tr>
	 		@endforeach
	 	</tbody>
	 </table>
	 {{ $videos->render() }}
	 
		  </div>
		</div>
	 </div>
	 </div>

  </div>



@endsection