@extends('layouts.app')

@section('content')
<div class="container">
	
	<h1>Cargar datos</h1>
<form action="">

	<div class="form-group">
    	<label for="dni">DNI</label>
    	<input type="text" class="form-control" id="dni" value="{{ $atlete->dni }}">
  	</div>

  	<div class="form-group">
  		<label for="apellido">Apellido</label>
  		<input type="text" class="form-control" id="apellido" value="{{ $atlete->apellido }}">
  	</div>	

  	<div class="form-group">
  		<label for="nombre">Nombre</label>
  		<input type="text" class="form-control" id="nombre" value="{{ $atlete->nombre }}">
  	</div>

  	<div class="form-group">
  		<label for="email">e-mail</label>
  		<input type="email" class="form-control" id="email" value="{{ $atlete->email }}">
  	</div>

   	<div class="form-group">
  		<label for="direccion">Direccion</label>
  		<input type="text" class="form-control" id="direccion" value="{{ $atlete->direccion }}">
  	</div>

  	<div class="form-group">
  		<label for="nacimiento">Fecha Nacimiento</label>
  		<input type="date" class="form-control" id="nacimiento" value="{{ $atlete->nacimiento }}">
  	</div>

   	<div class="form-group">
  		<label for="telefono">Telefono</label>
  		<input type="text" class="form-control" id="telefono" value="{{ $atlete->telefono }}">
  	</div>

  	<button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>
@endsection