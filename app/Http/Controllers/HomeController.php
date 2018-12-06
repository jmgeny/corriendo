<?php

namespace corriendo\Http\Controllers;

use Illuminate\Http\Request;
use corriendo\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Event::orderBy('fecha','ASC')
                  ->paginate(6);

        return view('home', compact('eventos'));
    }

}
