@extends('layouts.app')

@section('content')
<div class="container">
<h1>Eventos</h1>
{{ $events->links() }}
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Organizador</th>
                    <th>Deporte</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Inscribirse</th>
                    <th>Lista</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                      <tr>
                        <td>{{ $event->organizer->nombre }}</td>
                        <td>{{ $event->sport->nombre }}</td>
                        <td>{{ $event->nombre }}</td>
                        <td>{{ $event->fecha }}</td>
                        <td><a href="{{ url('event/buscardni',$event->id ) }}"><button class="btn btn-primary">Inscribirse</button></a></td>
                        <td><a href="{{ route('event.show',$event->id ) }}"><button class="btn btn-primary">Ver</button></a></td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
{{ $events->links() }} 	
</div>
@endsection