@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inscripción</h1>
   <h2>Eventos</h2>
    @foreach($events as $event)
    	{{ $event->nombre }} <br>
    @endforeach	
</div>
@endsection