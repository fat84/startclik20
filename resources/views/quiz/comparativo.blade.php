@extends('layouts.app')

@section('content')
    @if($message=Session::has('message'))
        <script>
            $( document ).ready(function() {
                swal(
                    'En hora buena!',
                    '{{Session::get('message')}}',
                    'success'
                )});
        </script>
    @endif
    <div class="element-wrapper"><h6 class="element-header">Comparación</h6>
        <div class="element-box">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" align="center">
                        <h1 class="card-title">Quiz: {{$quiz->titulo}}</h1>
                    </div>
                    <div class="card-block">

                        <div class="form-group">
                            <div align="center" class="col-md-12">
                                <img align="center" src="{{asset('img/usuario/'.$quiz->imagen)}}"
                                     style="width: 200px">
                            </div>

                        </div>
                        <br>
                        <?php

                        $preguntas = DB::table('quiz_leccion_pregunta')
                            ->where('quiz_leccion_pregunta.quiz_leccion_id', '=', $quiz->id)
                            ->get();

                        ?>

                            <input hidden type="text" name="quiz_id" id="quiz_id" value="{{$quiz->id}}">
                        @foreach($preguntas as $pregunta)

                            <?php
                                $i=1;
                            $i=$i+1;
                            ?>
                        <div class="form-group">
                            <h5>- {{$pregunta->titulo}}<br></h5>

                            <?php
                            $opciones = DB::table('quiz_respuesta_leccion')
                                ->where('quiz_pregunta_leccion_id', '=', $pregunta->id)
                                ->where('quiz_respuesta_leccion.verdadera', '=', 1)
                                ->get();
                            $i=0;
                            ?>

                            <?php
                            $opciones2 = DB::table('quiz_respuesta_leccion')
                                ->join('respuesta_user', 'quiz_respuesta_leccion.id', 'respuesta_user.respuesta_id')
                                ->selectRaw("quiz_respuesta_leccion.respuesta as respuesta")
                                ->where('quiz_respuesta_leccion.quiz_pregunta_leccion_id', '=', $pregunta->id)
                                ->where('respuesta_user.user_id', '=', $user)
                                ->get();
                            $i=0;
                            ?>
                            @foreach($opciones as $opcion)

                                <b style="color: green">Respuesta Correcta: {{$opcion->respuesta}}</b><br>

                                @endforeach

                            @foreach($opciones2 as $opcion2)

                                <b>Tu Respuesta: {{$opcion2->respuesta}}</b><br>

                            @endforeach
                        </div>
                            @endforeach


                    </div>
                </div>

            </div>

        </div>


    </div>

    </div>


    <a href="{{url()->previous()}}"><button type="button" class="floated-chat-btn2" style="margin-right: 130px!important;" data-toggle="modal" data-target="#exampleModalLong">
            Volver
        </button></a>
@stop
