@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Atleta: {{ $athlete->nombre }} {{ $athlete->apellido }}
    <a href="{{ url('athlete') }}" class="btn btn-primary pull-right">Listado</a>
  </h3>  
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>dni</th>
                    <th>email</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                      <tr>
                        <td>{{ $athlete->apellido }}</td>
                        <td>{{ $athlete->nombre }}</td>
                        <td>{{ $athlete->dni }}</td>
                        <td>{{ $athlete->email }}</td>
                        <td><a href="{{ route('athlete.edit',$athlete->id) }}" class="btn btn-primary">Editar</a></td>
                        <td>
                          <form action="{{ route('athlete.destroy', $athlete->id) }}" method="POST">
                            @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-danger">Eliminar</button>                         
                          </form>                          
                        </td>
                      </tr>
                </tbody>
            </table>
</div>
@endsection