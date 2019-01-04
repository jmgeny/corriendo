@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
      Listado de Atletas
      <a href="{{ route('athlete.create') }}" class="btn btn-primary pull-right">Nuevo</a>
    </h2>   
    @include('add.info')
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>dni</th>
                    <th>email</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Elimina</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($athletes as $athlete)

                      <tr>
                        <td>{{ $athlete->apellido }}</td>
                        <td>{{ $athlete->nombre }}</td>
                        <td>{{ $athlete->dni }}</td>
                        <td>{{ $athlete->email }}</td>
                        <td><a href="{{ route('athlete.show',$athlete->id) }}" class="btn btn-primary">Ver</a></td>
                        <td><a href="{{ route('athlete.edit',$athlete->id) }}" class="btn btn-primary">Editar</a></td>
                        <td>
                            @if($athlete->state === 1)
                            <form action="{{ route('athlete.destroy', $athlete->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Eliminar</button>                                
                            </form>
                            @endif

                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $athletes->links() }}   
</div>
@endsection