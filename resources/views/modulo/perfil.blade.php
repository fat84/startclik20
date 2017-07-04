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
                            <br>
                            <div class="col-md-12" style="">
                                <strong>Material de Apoyo: <br>
                                    <?php
                                    $material_modulo = DB::table('material_apoyo_modulo')
                                        ->select(DB::raw('material_apoyo_modulo.nombre as nombre, material_apoyo_modulo.url as url, material_apoyo_modulo.modulo_id as modulo_id'))
                                        ->where('material_apoyo_modulo.modulo_id', '=', $modulo->id)
                                        ->get();
                                    ?>
                                <ul>
                                    @foreach($material_modulo as $material_apoyo)
                                    <li>
                                        <dl>
                                            <dt style="color: #1a50b7">
                                            <a href="{{url('archivos/materialapoyo/'.$material_apoyo->url)}}" download="">{{$material_apoyo->nombre}}</a>
                                            </dt>
                                        </dl>
                                    </li>
                                        @endforeach
                                </ul></strong>
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
                        <div class="card-header bg-white text-xs-center" align="center">
                            <h4 class="card-title" style="margin-bottom: 0rem !important;">{{$materia->nombre}}
                            </h4>
                            <small class="text-muted">{{$modulo->nombre}}</small>
                        </div>
                        <br>

                        <div align="center" class="card-block" style="padding: 0rem !important;">
                            <small class="text-muted">Descripción:</small>
                            <br>
                            @if(strlen($materia->descripcion) > 50)
                                <?=substr($materia->descripcion, 0, 1000) . "..."?>
                            @else
                                {{$materia->descripcion}}
                            @endif
                            <span class="tag tag-primary"></span>
                        </div>
                        <br>
                        <div class="card-block" style="padding: 0rem !important; padding-bottom: 1rem !important;">

                            <h3 style="color: #0275d8">Lecciones</h3>

                            <ul>
                                <?php
                                $lecciones = DB::table('lecciones')->select(DB::raw('lecciones.titulo as nombre, lecciones.descripcion as descripcion, lecciones.id as id'))
                                    ->join('materia','lecciones.materia_id', '=', 'materia.id')
                                    ->where('lecciones.materia_id', '=', $materia->id)
                                    ->get();

                                $ids = $lecciones->pluck('id');
                                ?>
                                @foreach($lecciones as $leccion)


                                <li>
                                    <dl>
                                        <dt>
                                    <a style="text-decoration:none; color: #1a50b7 !important;"
                                            href="{{url('perfil_leccion/'.$leccion->id)}}"><b>{{$leccion->nombre}}</b></a>
                                        </dt>

                                    </dl>
                                </li>
                                @endforeach
                            </ul>

                            <h3 style="color: #0275d8">Quices</h3>

                            <ul>
                                <?php
                                $quices = DB::table('quiz_leccion')->select(DB::raw('quiz_leccion.titulo as titulo, quiz_leccion.id as id'))
                                    ->join('lecciones','quiz_leccion.leccion_id', '=', 'lecciones.id')
                                    ->whereIn('quiz_leccion.leccion_id', $ids)
                                    ->get();
                                ?>
                                @foreach($quices as $quiz)


                                    <li>
                                        <dl>
                                            <dt>
                                                <a style="text-decoration:none; color: #1a50b7 !important;"
                                                   href="{{url('perfil_quiz/'.$quiz->id)}}"><b>{{$quiz->titulo}}</b></a>
                                            </dt>

                                        </dl>
                                    </li>
                                @endforeach
                            </ul>

                            <h3 style="color: #0275d8">Material de Apoyo</h3>

                            <?php
                            $material_modulo2 = DB::table('material_apoyo_materia')
                                ->select(DB::raw('material_apoyo_materia.nombre as nombre, material_apoyo_materia.url as url, material_apoyo_materia.materia_id as materia_id'))
                                ->where('material_apoyo_materia.materia_id', '=', $materia->id)
                                ->get();
                            ?>
                            <ul>
                                @foreach($material_modulo2 as $material_apoyo2)
                                    <li>
                                        <dl>
                                            <dt style="color: #1a50b7">
                                                <a style="text-decoration:none; color: #1a50b7 !important;" href="{{url('archivos/materialapoyo/'.$material_apoyo2->url)}}" download="">{{$material_apoyo2->nombre}}</a>
                                            </dt>
                                        </dl>
                                    </li>
                            @endforeach
                            </ul>

                        </div>

                    </div>





                @endforeach


            </div>

        </div>

    </div>

    <a href="{{url('perfil_curso/'.$modulo->curso_id)}}"><button type="button" class="floated-chat-btn2" style="margin-right: 130px!important;" data-toggle="modal" data-target="#exampleModalLong">
            Volver
        </button></a>
@stop
