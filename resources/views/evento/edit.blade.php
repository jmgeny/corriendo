@extends('layouts.app')

@section('content')
<div class="container">
<h3>Editar Evento: {{ $event->nombre }} <a href="{{ url('event') }}" class="btn btn-primary pull-right">Volver</a> </h3>
</div>
@endsection