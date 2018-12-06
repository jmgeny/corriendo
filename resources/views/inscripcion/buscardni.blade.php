@extends('layouts.app')

@section('content')
<div class="container">
	
	<h1>Ingresar DNI</h1>

	{{ $evento->nombre }}
	
	{!! Form::open(['url' => '/evento/cargadatos','method' =>'GET']) !!}
		@include('inscripcion.formbuscardni')
	{!! Form::close() !!}

</div>
@endsection