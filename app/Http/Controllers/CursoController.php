<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Curso;
use App\Foro;
use App\Http\Requests\CursoRequest;
use App\Instructor_curso;
use App\MaterialCurso;
use App\Modulo;
use App\Order;
use App\OrderItem;
use App\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use Redirect;
use Storage;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;
use Validator;
use Cart;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        $cursos = DB::table('cursos');
        if (Auth::user()->rol == 'administrador') {
            $cursos = Curso::all();
        } elseif (Auth::user()->rol == 'instructor') {
            $cursos = DB::table('instructor_curso')
                ->join('cursos', 'instructor_curso.curso_id', 'cursos.id')
                ->join('categoria', 'cursos.categoria_id', 'categoria.id')
                ->selectRaw('cursos.nombre as nombre, cursos.precio as precio, cursos.id as id, categoria.nombre as nombre_cate , cursos.imagen as imagen, cursos.video_promo as video_promo')
                ->groupBy('cursos.id')
                ->where('instructor_curso.instructor_id', '=', Auth::user()->id)
                ->where('cursos.deleted_at', '=', null)
                ->get();
        } elseif (Auth::user()->rol == 'empresa') {
            $cursos = DB::table('cursos')
                ->join('categoria', 'cursos.categoria_id', 'categoria.id')
                ->selectRaw('cursos.nombre as nombre, cursos.precio as precio, cursos.id as id, categoria.nombre as nombre_cate , cursos.imagen as imagen, cursos.video_promo as video_promo')
                ->groupBy('cursos.id')
                ->where('cursos.empresa_id', '=', Auth::user()->id)
                ->where('cursos.deleted_at', '=', null)
                ->get();
        }
    }

        /*$cursos = DB::table('cursos')
            ->join('categoria', 'cursos.categoria_id', '=', 'categoria.id')
            ->select('cursos.*', 'categoria.nombre as nombre_cate')
            ->get();

        return view('curso.index', compact('cursos'));
    }

    public function newcurso()
    {
        $empresas= DB::table('users')
            ->where('rol', 'empresa')
            ->get();

        $categorias= Categoria::all();
        return view('curso.crear', compact('empresas', 'categorias'));
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

    public function perfil($id)
    {
        //

        $curso = Curso::find($id);
        $modulos = DB::table('modulos')
            ->where('curso_id', $id)
            ->get();
        return view('curso.perfil')
            ->with('curso', $curso)
            ->with('modulos', $modulos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CursoRequest $request)
    {


       /* $categoria_foro = new Category;
        $categoria_foro->name = $request->nombre;
        $categoria_foro->slug = str_replace(' ', '-', $request->nombre);
        $categoria_foro->color = '#9B59B6';
        $categoria_foro->save();

        $discusion_foro = new Discussion;
        $discusion_foro->chatter_category_id = $categoria_foro->id;
        $discusion_foro->title = $request->nombre;
        $discusion_foro->user_id = Auth::user()->id;
        $discusion_foro->slug = str_replace(' ', '-', $request->nombre);
        $discusion_foro->save();

        $post_foro = new Post;
        $post_foro->chatter_discussion_id = $discusion_foro->id;
        $post_foro->user_id = Auth::user()->id;
        $post_foro->body = '<h1>Bienvenido al foro del curso '.$request->nombre.'</h1>';
        $post_foro->save();
*/



        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->categoria_id = $request->categoria_id;
        $curso->descripcion = $request->descripcion;



        //Codigo para guardar las imagenes
        if ($request->file('imagen') == '') {
            $curso->imagen = null;
        } else {
            $img = $request->file('imagen');
            $file_route = time() . '_' . $img->getClientOriginalName();
            Storage::disk('img')->put($file_route, file_get_contents($img->getRealPath()));
            $curso->imagen = $file_route;
        }
        if ($request->file('video_promo') == '') {
            $curso->video_promo = null;
        } else {
            $video = $request->file('video_promo');
            $file_route = time() . '_' . $video->getClientOriginalName();
            Storage::disk('video')->put($file_route, file_get_contents($video->getRealPath()));
            $curso->video_promo = $file_route;
        }
        $curso->precio = $request->precio;
        $curso->empresa_id = $request->empresa_id;
       // $curso->foro_id = $discusion_foro->id;
        $curso->save();

        $foro = new Foro;
        $foro->titulo = $request->nombre;
        $foro->curso_id = $curso->id;
        $foro->user_id = Auth::user()->id;
        $foro->slug = str_replace(' ', '-', $request->nombre);
        $foro->save();

        return redirect('curso')->with('message','Curso creado correctamente');

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
        //
        $curso = Curso::find($id);

        $nombre = $curso->empresa_id;

        $nom_emp= User::find($nombre);

        $empresas= User::where('rol', 'empresa')->whereNotIn('id', [$nombre])->get();

        $cate = $curso->categoria_id;

        $nom_cate= Categoria::find($cate);

        $categorias= Categoria::whereNotIn('id', [$cate])->get();

        return view('curso.editar')
            ->with('curso', $curso)
            ->with('nom_emp', $nom_emp)
            ->with('empresas', $empresas)
            ->with('nom_cate', $nom_cate)
            ->with('categorias', $categorias);
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
        $usuario_id = Auth::user()->id;
        $curso = Curso::find($id);
        $curso->nombre = $request->nombre;
        $curso->categoria_id = $request->categoria_id;
        $curso->descripcion = $request->descripcion;

        //Codigo para guardar las imagenes
        $imagenAnterior = $curso->imagen;
        if ($request->file('imagen') == '') {
            $curso->imagen = $imagenAnterior;
        } else {
            $img = $request->file('imagen');
            $file_route = time() . '_' . $img->getClientOriginalName();
            Storage::disk('img')->put($file_route, file_get_contents($img->getRealPath()));
            $curso->imagen = $file_route;
        }

        $videoAnterior = $curso->video_promo;
        if ($request->file('video_promo') == '') {
            $curso->video_promo = $videoAnterior;
        } else {
            $video = $request->file('video_promo');
            $file_route = time() . '_' . $video->getClientOriginalName();
            Storage::disk('video')->put($file_route, file_get_contents($video->getRealPath()));
            $curso->video_promo = $file_route;
        }
        $curso->precio = $request->precio;
        $curso->empresa_id = $request->empresa_id;
        $curso->save();

        return redirect('curso')->with('message','Curso Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       // $curso = Curso::find($id)->delete();
        $curso = Curso::find($id);
        $curso->delete();
        return redirect('curso')->with('message','Curso Eliminado correctamente');
    }

    public function habilitar($id){
        $data = Curso::withTrashed()->where('id', '=', $id)->restore();
        return redirect('curso')->with('message','Curso habilitado :)');
    }


    public function perfilCursoUsuario(Request $request,$nombre,$id){

        $curso = Curso::find($id);
        $modulo = Modulo::where('curso_id','=',$id)->get();
        return view('usuario.perfilCurso', compact('curso','modulo'));
    }


    public function miscursos(){
       $suscripcion = Order::where('user_id','=',Auth::user()->id)->get();
        return view('usuario.miscursos',compact('suscripcion'));
    }

    //Metodos para la carga de material de apoyo



    public function materialApoyoCrear(){
        $cursos = Curso::all();
        $materiales_apoyo = MaterialCurso::All();
        return view('curso.apoyoCurso',compact('cursos','materiales_apoyo'));
    }
    public function guardarmaterial(Request $request){

        $material = new MaterialCurso();
        $material->nombre = $request->nombre;
        $material->curso_id = $request->curso;
        $archivo = $request->file('archivo');
        $file_route = time() . '_' . $archivo->getClientOriginalName();
        Storage::disk('material')->put($file_route, file_get_contents($archivo->getRealPath()));
        $material->url = $file_route;
        $material->save();
        return redirect('subirmaterialdeapoyo_curso')->with('message','Archivo anexado correctamente');

    }

    public function editarmaterial($id){
        $material = MaterialCurso::find($id);
        $curso = Curso::find($material->curso_id);
        $cursos = Curso::whereNotIn('id', [$curso->id])->get();
        return view('curso.editApoCurso',compact('material','curso','cursos'));

    }

    public function updatematerial(Request $request,$id){

        $material = MaterialCurso::find($id);
        $material->nombre = $request->nombre;
        $material->curso_id = $request->curso;
        $archivoAnterio = $material->url;
        if ($request->file('archivo') == '') {
            $material->url = $archivoAnterio;
        } else {
            $archivo = $request->file('archivo');
            $file_route = time() . '_' . $archivo->getClientOriginalName();
            Storage::disk('material')->put($file_route, file_get_contents($archivo->getRealPath()));
            $material->url = $file_route;
        }
        $material->save();
        return redirect('material_curso/'.$id.'/editar')->with('message','Material actualizado correctamente');

    }

    public function destroymaterial($id){
        $material = MaterialCurso::find($id);
        $material->delete();
        return redirect('subirmaterialdeapoyo_curso')->with('message','Material eliminado');
    }

    public function asignar($id)
    {
        $curso= Curso::find($id);

        $instructores = DB::table('instructor_curso')
            ->join('users', 'instructor_curso.instructor_id', 'users.id')
            ->join('cursos', 'instructor_curso.curso_id', 'cursos.id')
            ->selectRaw('users.name as name, users.id as id')
            ->where('instructor_curso.curso_id', '=', $id)
            ->get();
        //Pluck me permite convertir en lista cierto campo
        $ids = $instructores->pluck('id');


        if (count($instructores) > 0) {

            $disponibles = DB::table('users')
                ->selectRaw('users.name as name, users.id as id, users.documento as documento')
                ->whereNotIn('users.id', $ids)
                ->where('users.rol', '=', 'instructor')
                ->get();

        }
        else
        {
            $disponibles = DB::table('users')
                ->selectRaw('users.name as name, users.id as id, users.documento as documento')
                ->where('users.rol', '=', 'instructor')
                ->get();
        }


        return view('curso.instructor_curso', compact('curso', 'instructores', 'disponibles'));
    }

    public function guardado() //este es para guardar
    {


        $dataValue = Input::get('emple');
        if (count($dataValue) > 0) {

            foreach ($dataValue as $valor) {
                $instructor= new Instructor_curso();
                $instructor->instructor_id = $valor;
                $instructor->curso_id = Input::get('curso_id');
                $instructor->save();
            }
        }


        return back()->with('message','Instructor asignado correctamente');
    }

}
