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
    <div class="element-wrapper"><h6 class="element-header">Perfil de Lección</h6>
        <div class="element-box">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" align="center">
                        <h1 class="card-title">{{$leccion->titulo}}</h1>
                    </div>
                    <div class="card-block">

                        <div class="form-group">

                            <div class="col-md-12" style="">
                                <strong style="font-size: 22px;">Descripción:</strong><br><br> <span><?= $leccion->descripcion; ?></span>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-12" style="">
                                <strong style="font-size: 22px;">Contenido:</strong> <br><br> <span><?= $leccion->contenido; ?></span>
                            </div>
                            <br>
                            <div class="col-md-12" style="">
                                <strong style="font-size: 22px;">Material de Apoyo:</strong> <br><br>
                                <?php
                                $material_leccion = DB::table('material_apoyo_leccion')
                                    ->select(DB::raw('material_apoyo_leccion.nombre as nombre, material_apoyo_leccion.url as url, material_apoyo_leccion.leccion_id as leccion_id'))
                                    ->where('material_apoyo_leccion.leccion_id', '=', $leccion->id)
                                    ->get();
                                ?>
                                <ul>
                                    @foreach($material_leccion as $material_apoyo)
                                        <li>
                                            <dl>
                                                <dt style="color: #1a50b7">
                                                    <a style="text-decoration:none; color: #1a50b7 !important;" href="{{url('archivos/materialapoyo/'.$material_apoyo->url)}}" download="">{{$material_apoyo->nombre}}</a>
                                                </dt>
                                            </dl>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>


    </div>

    </div>
    <form id="formu" name="formu" action="{{url('finalizar_leccion')}}" method="post" class="form-horizontal" accept-charset="UTF-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input hidden required name="leccion_id" id="leccion_id" type="text" value="{{$leccion->materia->modulo_id}}" class="form-control" placeholder="Digite el nombre de la Leccion">
    </form>
    <a href="{{url('perfil_modulo/'.$leccion->materia->modulo_id)}}"><button type="button" class="floated-chat-btn2" style="margin-right: 130px!important;" data-toggle="modal" data-target="#exampleModalLong">
            Volver
        </button></a>

        <button type="button" onclick="myFunction()" class="floated-chat-btn3" style="margin-right: 130px!important;" data-toggle="modal" data-target="#exampleModalLong">
            Lección Finalizada
        </button>

    <script>
        function myFunction() {
            document.getElementById("formu").submit();
        }
    </script>
@stop
