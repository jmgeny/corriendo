@extends('layouts.app')

@section('content')
<div class="container">
<h3>Evento: {{ $event->nombre }} <a href="{{ url('event') }}" class="btn btn-primary pull-right">Volver</a> </h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>dni</th>
            <th>email</th>
            <th>nacimiento</th>
            <th>edad</th>
        </tr>        
    </thead>
    <tbody>
        @foreach($event->athletes as $athlete)
        <tr>
            <td>{{ $athlete->apellido }}</td>
            <td>{{ $athlete->nombre }}</td>
            <td>{{ $athlete->dni }}</td>
            <td>{{ $athlete->email }}</td>
            <td>{{ $athlete->nacimiento }}</td>
            <td></td>
        </tr>
        @endforeach()
    </tbody>
</table>
</div>
@endsection