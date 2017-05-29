<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

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
        return redirect('dashboard');
    }
    /*
* Funcion mostrar ciudad, dependiendo del departamento*/
    public function buscar_ciudades($departamento_id)
    {
        return \Response::json(Ciudad::where('departamento_id', '=', $departamento_id)->get(['nombre', 'id']));
    }
}
