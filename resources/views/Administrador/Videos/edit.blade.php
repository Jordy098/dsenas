@extends('Home.indexadmin')

@section('formulario')


<div class="row">
  <div class="col-md-4" style="width: 350px"></div>
  <div class="col-md-4">
  		<div class="panel panel-default" style="width: 450px;">
		  <!-- Default panel contents -->
		  <div class="panel-heading"><h4>Editar Video </h4></div>
		  <div class="panel-body">
				  @include('flash::message')
				  <br>
				  <br>
				  	{!! Form::open(['route'=>['videos.update',$videos],'method'=>'PUT']) !!}

					<div class="form-group">

						{!! Form::text('url', $videos->url, ['class'=>'form-control', 'placeholder'=>'Ingrese Categoria' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
					</div>
					<div class="form-group">
		            <select class="form-control" name="palabra_id" style="width:400px;height: 45px; ">
		            @foreach($palabras as $palabra)
		              <option value="{{ $palabra->id }}">{{ $palabra->nombre }}</option>
		              @endforeach
		            </select>
		          </div>
		          <div class="form-group">
		            <select class="form-control" name="region_id" style="width:400px;height: 45px; ">
		            @foreach($regiones as $region)
		              <option value="{{ $region->id }}">{{ $region->nombre }}</option>
		              @endforeach
		            </select>
		          </div>
		          <div class="form-group">
		            <select class="form-control" name="estado_id" style="width:400px;height: 45px; ">
		            @foreach($estados as $estado)
		              <option value="{{ $estado->id }}">{{ $estado->descripcion }}</option>
		              @endforeach
		            </select>
		          </div>
					<br>
					<div >
						{!! Form::submit('Editar', ['class'=> 'btn btn-warning']) !!} <a style="margin-left: 30px;" href="{{ route('videos.index') }}">volver a lista</a>
					</div>

					{!! Form::close() !!}
		  </div>
	    </div>
  </div>
  <div class="col-md-4"></div>
</div>
	
@endsection