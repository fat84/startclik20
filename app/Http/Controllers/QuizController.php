<?php

namespace App\Http\Controllers;

use App\Leccion;
use App\Quiz_leccion;
use App\Quiz_preguntas_leccion;
use App\Quiz_respuesta_leccion;
use App\Respuesta_user;
use App\Seguimiento_quiz;
use Illuminate\Http\Request;
use Auth;
use DB;
use Storage;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quiz = Quiz_leccion::all();
        return view('quiz.quiz',compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecciones = Leccion::all();
        return view('quiz.crear',compact('lecciones'));
    }

    public function perfil($id)
    {
        //

        $quiz= Quiz_leccion::find($id);

        return view('quiz.perfil')
            ->with('quiz', $quiz);
    }

    public function comparativo($id, $user)
    {
        //
        $id_user= $user;
        $quiz= Quiz_leccion::find($id);

        return view('quiz.comparativo')
            ->with('quiz', $quiz)
        ->with('user', $id_user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quiz = new Quiz_leccion;
        $quiz->titulo = $request->titulo;
        $quiz->leccion_id = $request->leccion_id;

        $img = $request->file('imagen');
        $file_route = time() . '_' . $img->getClientOriginalName();
        Storage::disk('img')->put($file_route, file_get_contents($img->getRealPath()));
        $quiz->imagen = $file_route;

        $quiz->score = $request->score;
        $quiz->save();
        return redirect('quiz')->with('message','Quiz creado correctamente');
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
        $quiz = Quiz_leccion::find($id);
        $lecciones = Leccion::all();
        return view('quiz.quizEdit',compact('quiz','lecciones'));
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
    }

    /*
     * Quiz leccion
     */

    public function indexQuizLeccion(){
        $quiz = Quiz_leccion::all();
        return view('quiz_leccion.index',compact('quiz'));
    }


    public function createQuizLeccion(){
        $lecciones = Leccion::all();
        return view('quiz_leccion.crear',compact('lecciones'));
    }

    public function storeQuizLeccion(Request $request){
        $quiz = new Quiz_leccion;
        $quiz->titulo = $request->titulo;
        $quiz->leccion_id = $request->leccion_id;

        $img = $request->file('imagen');
        $file_route = time() . '_' . $img->getClientOriginalName();
        Storage::disk('img')->put($file_route, file_get_contents($img->getRealPath()));
        $quiz->imagen = $file_route;

        $quiz->score = $request->score;
        $quiz->save();
        return redirect('quiz_leccion')->with('message','Quiz creado correctamente');
    }

    public function editQuizLeccion($id){
        $quiz = Quiz_leccion::find($id);
        $lecciones = Leccion::all();
        $preguntas = Quiz_preguntas_leccion::where('quiz_leccion_id','=',$id)->get();
        return view('quiz_leccion.quizEdit',compact('quiz','lecciones','preguntas'));
    }

    public function updateQuizLeccion(Request $request,$id){

        $quiz =Quiz_leccion::find($id);
        $quiz->titulo = $request->titulo;
        $quiz->leccion_id = $request->leccion;

        $img = $request->file('imagen');
        if(empty($request->file('imagen'))){

        }else {
            $file_route = time() . '_' . $img->getClientOriginalName();
            Storage::disk('img')->put($file_route, file_get_contents($img->getRealPath()));
            $quiz->imagen = $file_route;
        }
        $quiz->score = $request->score;
        $quiz->save();

        return redirect('quiz_leccion_editar/'.$id)->with('message','Quiz actualizado correctamente');
    }

    public function destroyQuizLeccion(){

    }

    //guardar preguntas de la encuesta

    public function guardarPregunta (Request $request,$id){

        $quiz_pregunta = new Quiz_preguntas_leccion;
        $quiz_pregunta->titulo = $request->titulo_pregunta;
        $quiz_pregunta->tipo_pregunta = $request->tipo_respuesta;
        $quiz_pregunta->score = $request->score;
        $quiz_pregunta->quiz_leccion_id = $id;
        $quiz_pregunta->save();

        $quiz_respuesta1 = new Quiz_respuesta_leccion;
        $quiz_respuesta1->respuesta = $request->option1;
        $quiz_respuesta1->verdadera = $request->verdadero1;
        $quiz_respuesta1->quiz_pregunta_leccion_id = $quiz_pregunta->id;
        if (strlen($request->option1) > 0) {
            $quiz_respuesta1->save();
        }

        $quiz_respuesta2 = new Quiz_respuesta_leccion;
        $quiz_respuesta2->respuesta = $request->option2;
        $quiz_respuesta2->verdadera = $request->verdadero2;
        $quiz_respuesta2->quiz_pregunta_leccion_id = $quiz_pregunta->id;
        if (strlen($request->option2) > 0) {
            $quiz_respuesta2->save();
        }

        $quiz_respuesta3 = new Quiz_respuesta_leccion;
        $quiz_respuesta3->respuesta = $request->option3;
        $quiz_respuesta3->verdadera = $request->verdadero3;
        $quiz_respuesta3->quiz_pregunta_leccion_id = $quiz_pregunta->id;
        if (strlen($request->option3) > 0) {
            $quiz_respuesta3->save();
        }

        $quiz_respuesta4 = new Quiz_respuesta_leccion;
        $quiz_respuesta4->respuesta = $request->option4;
        $quiz_respuesta4->verdadera = $request->verdadero4;
        $quiz_respuesta4->quiz_pregunta_leccion_id = $quiz_pregunta->id;
        if (strlen($request->option4) > 0) {
            $quiz_respuesta4->save();
        }

        return redirect('quiz_leccion_editar/'.$id)->with('message','Pregunta creada correctamente');
    }

    public function quiz_preguta_informaion(Request $request){
        $pregunta = Quiz_preguntas_leccion::find($request->idPregunta);
        $respuesta = Quiz_respuesta_leccion::where('quiz_pregunta_leccion_id','=',$pregunta->id)->get();

        return response()->json([
            'pregunta'=> $pregunta,
            'respuesta'=> $respuesta,
        ]);
    }

    public function eliminarPreguntaLeccion($id){
        $pregunta = Quiz_preguntas_leccion::find($id);
        $pregunta->delete();
        return redirect('quiz_leccion_editar/'.$pregunta->quiz_leccion_id)->with('message','Pregunta Eliminada correctamente');
    }

    public function quizpreguntaleccionactualizar(Request $request,$id){

        $quiz_pregunta = Quiz_preguntas_leccion::find($id);
        $quiz_pregunta->titulo = $request->titulo_pregunta;
        $quiz_pregunta->tipo_pregunta = $request->tipo_respuesta;
        $quiz_pregunta->score = $request->score;
       // $quiz_pregunta->quiz_leccion_id = $id;
        $quiz_pregunta->save();

      // echo $quiz_respuesta = Quiz_respuesta_leccion::find($request->optionid1);
        if (!empty($request->numero1)){
            $quiz_respuesta1 = Quiz_respuesta_leccion::find($request->numero1);
            $quiz_respuesta1->respuesta = $request->option1;
            $quiz_respuesta1->verdadera = $request->verdadero1;
            //  $quiz_respuesta1->quiz_pregunta_leccion_id = $quiz_pregunta->id;
            if (strlen($request->option1) > 0) {
                $quiz_respuesta1->save();
            }
        }



        if (!empty($request->numero2)) {
            $quiz_respuesta2 = Quiz_respuesta_leccion::find($request->numero2);
            $quiz_respuesta2->respuesta = $request->option2;
            $quiz_respuesta2->verdadera = $request->verdadero2;
            // $quiz_respuesta2->quiz_pregunta_leccion_id = $quiz_pregunta->id;
            if (strlen($request->option2) > 0) {
                $quiz_respuesta2->save();
            }
        }
        if (!empty($request->numero3)) {
            $quiz_respuesta3 = Quiz_respuesta_leccion::find($request->numero3);
            $quiz_respuesta3->respuesta = $request->option3;
            $quiz_respuesta3->verdadera = $request->verdadero3;
            // $quiz_respuesta3->quiz_pregunta_leccion_id = $quiz_pregunta->id;
            if (strlen($request->option3) > 0) {
                $quiz_respuesta3->save();
            }
        }

        if (!empty($request->numero4)) {

            $quiz_respuesta4 = Quiz_respuesta_leccion::find($request->numero4);
            $quiz_respuesta4->respuesta = $request->option4;
            $quiz_respuesta4->verdadera = $request->verdadero4;
            // $quiz_respuesta4->quiz_pregunta_leccion_id = $quiz_pregunta->id;
            if (strlen($request->option4) > 0) {
                $quiz_respuesta4->save();
            }
        }


        return redirect('quiz_leccion_editar/'.$quiz_pregunta->quiz_leccion_id)->with('message','Pregunta actualizads correctamente');
    }


    /*
     * Quiz materia
     */

    public function respuesta_quiz (Request $request){

        $quiz = $request->quiz_id;


        $preguntas = DB::table('quiz_leccion_pregunta')
            ->where('quiz_leccion_id', '=', $quiz)
            ->get();

        $preguntas_id= $preguntas->pluck('id');

        $total_score=0;
        for ($i=0; $i < count($preguntas_id); $i++)
        {
            $t= 'opcion'.$preguntas_id[$i];
            $respuesta[$i] = $request->$t;


            $respuesta_user = new Respuesta_user();
            $respuesta_user->user_id = Auth::user()->id;
            $respuesta_user->respuesta_id = $respuesta[$i];

            $correcta = DB::table('quiz_respuesta_leccion')
                ->where('id', '=', $respuesta[$i])
                ->where('verdadera', '=', 1)
                ->get();

            $sco = DB::table('quiz_respuesta_leccion')
                ->selectRaw("quiz_respuesta_leccion.quiz_pregunta_leccion_id as leccion")
                ->where('id', '=', $respuesta[$i])
                ->first();

            if(count($correcta) > 0)
            {
                $respuesta_user->correcta = 1;
                $puntos = DB::table('quiz_leccion_pregunta')
                    ->selectRaw("quiz_leccion_pregunta.score as puntaje")
                    ->where('id', '=', $sco->leccion)
                    ->first();
                $respuesta_user->score = $puntos->puntaje;
                $total_score += $respuesta_user->score;
            }
            else
            {
                $respuesta_user->correcta = 0;
                $respuesta_user->score = 0;
            }

            $respuesta_user->quiz_id = $quiz;
            $respuesta_user->save();
        }

       $seguimiento = new Seguimiento_quiz();
        $seguimiento->user_id = Auth::user()->id;
        $seguimiento->quiz_id = $quiz;
        $seguimiento->puntaje = $total_score;
        $seguimiento->save();


        return redirect('perfil_quiz/'.$quiz)->with('message','Quiz Completado');
    }


}
