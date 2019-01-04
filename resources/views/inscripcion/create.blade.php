@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inscripción</h1>
    <h2>create</h2>
		@foreach($events as $event)
			{{-- <h2>Evento</h2> --}}

			<h3>Event:</h3>{{ $event->id }} - {{ $event->nombre }} <br>
			
			@if(count($event->athletes) > 0 ) 

					<h4>Atletas:</h4>
				@foreach($event->athletes as $athelte)
					{{ $athelte->nombre }} <br>
				@endforeach
			@else
		
				<h4>Sin Atleta</h4>
		
			@endif
		@endforeach

	

</div>
@endsection