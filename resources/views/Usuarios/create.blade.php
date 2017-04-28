@extends('Home.Registrar')

@section('title', 'Crear')

@section('saludo', 'hola')

@section('formulario')
    <div class="row">
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
  	{!! Form::open(['route'=>'usuarios.store','method'=>'POST']) !!}

	<div class="form-group">

		{!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre Completo' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>
	<div class="form-group">

		{!! Form::text('nick', null, ['class'=>'form-control', 'placeholder'=>'Nick Name' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>
	<div class="form-group">

		{!! Form::email('correo', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>
	<div class="form-group">

		{!! Form::password('clave', ['class'=>'form-control', 'placeholder'=>'*******' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>

	<div class="form-group">

		{!! Form::date('fecha_de_nacimiento', null, ['class'=>'form-control', 'placeholder'=>'Fecha de nacimiento' ,'required', 'style'=>'width: 400px;height: 45px;']) !!}
	</div>

	<div >
		{!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
  </div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4"></div>
</div>
    
@endsection