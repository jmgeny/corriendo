@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Editar Atleta: {{ $athlete->nombre }} {{ $athlete->apellido }}
    <a href="{{ url('athlete') }}" class="btn btn-primary pull-right">Listado</a>
  </h3> 
{!! Form::model($athlete,['route' => ['athlete.update',$athlete->id], 'method'=>'PUT','files'=>'true' ]) !!}
   @include('atleta.form')
{!! Form::close() !!}   

</div>
@endsection