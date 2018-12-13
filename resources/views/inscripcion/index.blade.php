@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inscripción</h1>
   <h2>Evento</h2>
   {{ $inscriptos->nombre }}
   <h2>Atletas</h2>
    @foreach($inscriptos->athletes as $atlete)
    	{{ $atlete->nombre }} <br>
    @endforeach	
</div>
@endsection