@extends('Home.indexadmin')


@section('formulario')
    <div class="row">
  <div class="col-md-4" style="width: 350px"></div>
  <div class="col-md-4">
  <div class="panel panel-default" style="width: 450px;">
  <div class="panel-heading"><h4>Crear Palabra</h4></div>
  <div class="panel-body">
  		
  @include('flash::message')
  <br>
  <br>
  	{!! Form::open(['route'=>'palabras.store','method'=>'POST']) !!}
	<div class="form-group">

		{!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Palabra' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>

	<div class="form-group">
		<select class="form-control" name="categoria_id" style="width:400px;height: 45px; ">
		@foreach($categorias as $categoria)
		  <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
		  @endforeach
		</select>
	</div>

	<br>
	<div >
		{!! Form::submit('Registrar', ['class'=> 'btn btn-success']) !!} <a style="margin-left: 30px;" href="{{ route('palabras.index') }}">volver a lista</a>
	</div>

	{!! Form::close() !!}
  </div>
</div>
  </div>
  <div class="col-md-4"></div>
</div>
    
@endsection