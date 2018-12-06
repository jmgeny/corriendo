@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="title text-center">
    Administrador
</div>                    
{{--             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Organizador</th>
                    <th>Deporte</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Inscribirse</th>
                    <th>Ver</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($eventos as $evento)
                      <tr>
                        <td>{{ $evento->organizer->nombre }}</td>
                        <td>{{ $evento->sport->nombre }}</td>
                        <td>{{ $evento->nombre }}</td>
                        <td>{{ $evento->fecha }}</td>
                        <td><button class="btn btn-primary">Inscribirse</button></td>
                        <td><button class="btn btn-primary">Ver</button></td>
                      </tr>
                    @endforeach
                </tbody>
            </table> --}}   

            @include('listeventos')

        </div>
    </div>
</div>
@endsection
