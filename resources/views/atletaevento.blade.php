@extends('layouts.app')

@section('content')


<div class="container">
	<h3>Inscriptos al Evento: {{ $evento->nombre }}</h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>dni</th>
                    <th>email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($evento->atletas as $atleta)
                      <tr>
                        <td>{{ $atleta->apellido }}</td>
                        <td>{{ $atleta->nombre }}</td>
                        <td>{{ $atleta->dni }}</td>
                        <td>{{ $atleta->email }}</td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
</div>

@endsection