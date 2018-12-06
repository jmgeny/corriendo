<?php

namespace corriendo\Http\Controllers;

use Illuminate\Http\Request;
use corriendo\Athlete;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $athletes = Athlete::where('state','=','1')
                    ->orderBy('apellido','ASC')->paginate(10);

        return view('atleta.index', compact('athletes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atleta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $athlete = new Athlete;
        $athlete->nombre = $request->nombre;
        $athlete->apellido = $request->apellido;
        $athlete->dni = $request->dni;
        $athlete->email = $request->email;
        $athlete->direccion = $request->direccion;
        $athlete->nacimiento = $request->nacimiento;
        $athlete->genero = $request->genero;
        $athlete->telefono = $request->telefono;
        $athlete->avatar = $request->avatar;

        $athlete->save();

        return redirect()->route('athlete.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $athlete = Athlete::find($id);

        return view('atleta.show',compact('athlete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $athlete = Athlete::find($id);

        return view('atleta.edit',compact('athlete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $athlete = Athlete::find($id);

        $athlete->nombre = $request->nombre;
        $athlete->apellido = $request->apellido;
        $athlete->dni = $request->dni;
        $athlete->email = $request->email;
        $athlete->direccion = $request->direccion;
        $athlete->nacimiento = $request->nacimiento;
        $athlete->genero = $request->genero;
        $athlete->telefono = $request->telefono;
        $athlete->avatar = $request->avatar;

        $athlete->save();

        return redirect()->route('athlete.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $athlete = Athlete::find($id);
        $athlete->state = 0;

        $athlete->save();

        return back();
    }
}
