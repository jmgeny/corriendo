@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Crear Atleta:<a href="{{ url('athlete') }}" class="btn btn-primary pull-right">Listado</a>
  </h3>
{!! Form::open(['route' => 'athlete.store']) !!}
   @include('atleta.form')
{!! Form::close() !!}   
</div>
@endsection