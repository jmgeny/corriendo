<?php

namespace corriendo\Http\Controllers;

use Illuminate\Http\Request;
use corriendo\Event;
use corriendo\Athlete;

class InicioController extends Controller
{
   public function inicio()
    {
        $eventos = Event::orderBy('fecha','ASC')
                  ->paginate(7);

        return view('inicio', compact('eventos'));        
    }

    public function atleta()
    {
    	$atletas = Athlete::orderBy('apellido','ASC')->paginate(10);
    	return view('atletas', compact('atletas'));
    }

    public function inscriptos($id) {

        $evento = Event::findOrFail($id);

        return view('atletaevento', compact('evento'));
    }

    public function buscardni($id) {

        $evento = Event::findOrFail($id);

        return view('inscripcion.buscardni',compact('evento'));
    }

    public function cargadatos(Request $request) {

        $dni = $request->dni;

        $atlete = Athlete::where('dni','=',$dni)->first();

        return view('inscripcion.cargadatos',compact('atlete'));

    }

}
