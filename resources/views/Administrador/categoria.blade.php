@extends('Home.indexadmin')

@section('formulario')
<div class="row">
  <div class="col-md-4">
  	{!! Form::open(['route'=>'categorias.store','method'=>'POST']) !!}

	<div class="form-group" style="margin-top: 150px;">

		{!! Form::label('Ingrese una categoria') !!}
	</div>

	<div class="form-group">

		{!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre Categoria' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>

	<div >
		{!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}
  </div>
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
</div>
	
@endsection