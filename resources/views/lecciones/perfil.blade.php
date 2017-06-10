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


                        </div>

                    </div>
                </div>

            </div>

        </div>


    </div>

    </div>

@stop
