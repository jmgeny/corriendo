@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Atleta: {{ $athlete->nombre }} {{ $athlete->apellido }}
    <a href="{{ url('athlete') }}" class="btn btn-primary pull-right">Listado</a>
  </h3>  
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">{{ $athlete->nombre }} {{ $athlete->apellido }}</div>
        <div class="card-body"><img src=" {{ Storage::url($athlete->avatar) }} " alt="{{ $athlete->apellido }}" width="100%" ></div> 
        <div class="card-footer">{{ $athlete->email }}</div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Datos</div>
        <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <td><mark>DNI</mark></td>
                <td>{{ $athlete->dni }}</td>
              </tr>
              <tr>
                <td><mark>e-mail</mark></td>
                <td>{{ $athlete->email }}</td>
              </tr>
              <tr>
                <td><mark>Dirección</mark></td>
                <td>{{ $athlete->direccion }}</td>
              </tr>
              <tr>
                <td><mark>Fecha de Nacimiento</mark></td>
                <td>{{ $athlete->nacimiento }}</td>
              </tr>
              <tr>
                <td><mark>Genero</mark></td>
                  @if($athlete->genero === 0)
                    <td>Femenino</td>
                  @else
                    <td>Masculino</td>
                  @endif
              </tr>
              <tr>
                <td><mark>Teléfono</mark></td>
                <td>{{ $athlete->telefono }}</td>
              </tr>
              <tr>
                <td><mark>Estado</mark></td>
                @if($athlete->state === 0)
                  <td>Inactivo</td>
                @else
                  <td>Activo</td>
                @endif
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer"><a href="{{ route('athlete.edit',$athlete->id) }}" class="btn btn-primary">Editar</a></div>
      </div>
    </div>
  </div>

</div>
@endsection