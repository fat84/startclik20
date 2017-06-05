<?php

namespace App\Http\Controllers;

use App\Foro;
use App\Foro_post;
use Illuminate\Http\Request;

class ForoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foro = Foro::all();
        return view('foro.index',compact('foro'));
    }
    public function foroIndividual($slug){
        $foro = Foro::where('slug','=',$slug)->first();
        $foro_post = Foro_post::where('foro_id','=',$foro->id)->get();
        return view('foro.individualForo',compact('foro','foro_post'));
    }

    public function guardarComentariForo(Request $request){
        $foro_post = new Foro_post;
        $foro_post->foro_id = $request->idForo;
        $foro_post->titulo = $request->titulo;
        $foro_post->user_id = \Auth::user()->id;
        $foro_post->post = $request->contenido;;
        $foro_post->save();
        return redirect('foro/Curso-manejo-de-armas')->with('message','comentario enviado correctamente');
    }
    public function actualizarComentariForo(Request $request){
        $foro_post = Foro_post::find($request->idPost);
        $foro_post->titulo = $request->titulo;
        $foro_post->user_id = \Auth::user()->id;
        $foro_post->post = $request->contenido;;
        $foro_post->save();
        return redirect('foro/Curso-manejo-de-armas')->with('message','comentario Actualizado correctamente');
    }
    public function editarPost(Request $request){
        $post = Foro_post::find($request->idPost);
        return response()->json([
            'respuesta'=>$post
        ]);
    }

    public function eliminarPostForo(Request $request){
        $post = Foro_post::find($request->idPost);
        $post->delete();
        $foro = Foro::find($post->foro_id);
        return redirect('foro/'.$foro->slug)->with('message', 'Comentario Eliminado correctamente');
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
    public function store(Request $request)
    {
        //
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
        //
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
}
