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
    <div class="element-wrapper"><h6 class="element-header">Perfil de Modulo</h6>
        <div class="element-box">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" align="center">
                        <h1 class="card-title">{{$modulo->nombre}}</h1>
                    </div>
                    <div class="card-block">

                        <div class="form-group">
                            <div align="center" class="col-md-12">
                                <img align="center" src="{{asset('img/modulo/'.$modulo->imagen)}}"
                                     style="width: 200px">
                            </div>
                            <br>
                            <div class="col-md-12" style="">
                                <strong>Descripción:</strong> <span><?= $modulo->descripcion; ?></span>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>


    </div>

    </div>


    <div class="element-wrapper"><h6 class="element-header">Materias del Modulo</h6>
        <div class="element-box">

            <div class="row">

                @foreach($materias as $materia)



                    <div class="card col-md-6" style="border-radius: 15px !important;">
                        <div class="card-header bg-white text-xs-center">
                            <h4 class="card-title"><a
                                        href="{{url('cursos/'.str_replace(' ', '',$materia->nombre).'/'.$materia->id)}}">{{$materia->nombre}}</a>
                            </h4>
                        </div>
                        <br>

                        <div class="card-block">
                            <small class="text-muted">{{$modulo->nombre}}</small>
                            <br>
                            @if(strlen($materia->descripcion) > 50)
                                <?=substr($materia->descripcion, 0, 1000) . "..."?>
                                @else
                                {{$materia->descripcion}}
                            @endif
                            <span class="tag tag-primary"></span>
                        </div>

                    </div>





                @endforeach


            </div>

        </div>

    </div>
@stop
