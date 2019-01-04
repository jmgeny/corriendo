@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inscripción Show</h1>
   Evento: {{ $inscriptos->nombre }}
   <h2>Inscriptos:</h2>
    @foreach($inscriptos->athletes as $atlete)
    	{{ $atlete->nombre }} <br>
    @endforeach

<h2>Atletas</h2>
	@foreach($athletes as $athlete)
		{{ $athlete->nombre }} <br>
	@endforeach	

</div>
@endsection