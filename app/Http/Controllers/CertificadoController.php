<?php

namespace App\Http\Controllers;

use App\Certificados;
use App\Curso;
use Illuminate\Http\Request;
use Storage;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificados = Certificados::all();
        return view('certificados.index',compact('certificados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('certificados.create',compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $certificado = new Certificados;
        $certificado->curso_id = $request->curso;
        $certificado->informacion=$request->informacion;

        $img = $request->file('imagen');
        $file_route = time() . '_' . $img->getClientOriginalName();
        Storage::disk('img')->put($file_route, file_get_contents($img->getRealPath()));
        $certificado->firma = $file_route;

        $certificado->save();

        return redirect('CrearCertificados')->with('message','Certificado creado correctamente');

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
        $certificado = Certificados::find($id);
        $cursos = Curso::all();
        return view('certificados.edit',compact('cursos','certificado'));
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
        $certificado = Certificados::find($id);
        $certificado->curso_id = $request->curso;
        $certificado->informacion = $request->informacion;
        $imagenAnterior = $certificado->firma;
        if ($request->file('imagen') == '') {
            $certificado->firma = $imagenAnterior;
        } else {
            $img = $request->file('imagen');
            $file_route = time() . '_' . $img->getClientOriginalName();
            Storage::disk('img')->put($file_route, file_get_contents($img->getRealPath()));
            $certificado->firma = $file_route;
        }
        $certificado->save();

        return redirect('editar_certificado/'.$id)->with('message','certificado actualizado correctamente');

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
