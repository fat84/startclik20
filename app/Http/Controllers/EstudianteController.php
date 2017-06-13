<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Curso;
use App\Departamento;
use App\Http\Requests\AdministradorRequest;
use App\User;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$cursos = Curso::All();

        $mis_cursos = DB::table('suscripcion')
            ->join('cursos', 'suscripcion.curso', 'cursos.id')
            ->join('categoria', 'cursos.categoria_id', 'categoria.id')
            ->selectRaw('cursos.nombre as nombre, cursos.precio as precio, cursos.id as id, cursos.descripcion as descripcion, cursos.imagen as imagen, cursos.video_promo as video_promo, categoria.nombre as categoria')
            ->groupBy('cursos.id')
            ->where('suscripcion.user_id', '=', Auth::user()->id)
            ->get();
        //Pluck me permite convertir en lista cierto campo
        $ids = $mis_cursos->pluck('id');


        if (count($mis_cursos) > 0) {

                $cursos_diferentes = DB::table('cursos')
                    ->join('categoria', 'cursos.categoria_id', 'categoria.id')
                    ->selectRaw('cursos.nombre as nombre, cursos.precio as precio, cursos.id as id, cursos.descripcion as descripcion, cursos.imagen as imagen, categoria.nombre as categoria')
                    ->groupBy('cursos.id')
                    ->whereNotIn('cursos.id', $ids)
                    ->get();

        }
        else
        {
            $cursos_diferentes = DB::table('cursos')
                ->join('categoria', 'cursos.categoria_id', 'categoria.id')
                ->selectRaw('cursos.nombre as nombre, cursos.precio as precio, cursos.id as id, cursos.descripcion as descripcion, cursos.imagen as imagen, categoria.nombre as categoria')
                ->groupBy('cursos.id')
                ->get();
        }






        return view('usuario.index', compact('mis_cursos', 'cursos_diferentes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdministradorRequest $request)
    {
        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->apellidos = $request->apellidos;
        $usuario->tipo_documento = $request->tipo_documento;
        $usuario->documento = $request->documento;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->rol = 'usuario';
        $usuario->ciudad_id = $request->ciudad;
        $usuario->save();
        return redirect('usuarios')->with('message','Usuario Creado correctamnete');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamento = Departamento::All();
        $ciudad = Ciudad::All();
        $usuario = User::find($id);
        return view('administrador.usuarioEdit',compact('usuario','departamento','ciudad'));
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
        $usuario = User::find($id);
        //$administador->fill($request->all());
        $usuario->name = $request->name;
        $usuario->apellidos = $request->apellidos;
        $usuario->tipo_documento = $request->tipo_documento;
        $usuario->documento = $request->documento;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        if ($request->password == ''){
            $usuario->password = $usuario->password;
        }else{
            $usuario->password = bcrypt($request->password);
        }
        $usuario->save();

        return redirect('usuario/'.$id.'/edit')->with('message','Usuario Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('usuarios')->with('message', 'Usuarios Eliminado correctamente');
    }
}
