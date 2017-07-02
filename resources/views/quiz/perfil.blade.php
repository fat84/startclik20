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
    <div class="element-wrapper"><h6 class="element-header">Perfil de Quiz</h6>
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
                        <form action="{{url('quiz_preguta_actualizar_leccion/'.$quiz->id)}}" method="post">
                            {{ csrf_field() }}
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
                                ->get();
                            $i=0;
                            ?>
                            @foreach($opciones as $opcion)

                                <input type="radio" name="opcion{{$opcion->quiz_pregunta_leccion_id}}" value="{{$opcion->id}}">{{$opcion->respuesta}}<br>

                                @endforeach
                        </div>
                            @endforeach
                            <button type="submit" class="btn btn-block btn-success">Crear quiz</button>
                        </form>

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
