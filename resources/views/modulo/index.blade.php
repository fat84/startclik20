@extends('layouts.app')
@section('content')
    <div class="mdk-drawer-layout__content">
        @if($message=Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                {{Session::get('message')}}
            </div>
        @endif
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

        <div class="element-wrapper"><h6 class="element-header">Modulos</h6>
            <div class="element-box">
                <h1 class="page-heading h2">Modulos</h1>
                <div class="row">
                    <div class="col-md-12">
                        <a type="button" href="{{url('new_modulo')}}" class="btn btn-success">
                            <i class="material-icons btn__icon--left">done</i> Crear Nuevo Modulo
                        </a>


                        <br>
                        <!-- Lessons -->
                        <div>

                            <br>
                            <div class="table-responsive">
                                <table id="dataTable2" class="table table-striped table-lightfont" cellspacing="0"
                                       width="100%">
                                    <thead>
                                    <tr>
                                        <th>Nombre del Modulo</th>
                                        <th>Curso</th>
                                        <th>Imagen</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Nombre del Modulos</th>
                                        <th>Curso</th>
                                        <th>Imagen</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($modulos as $modulo)
                                        <tr>
                                            <td>{{$modulo->nombre}}</td>
                                            <td>{{$modulo->nombre_curso}}</td>
                                            @if($modulo->imagen == '')
                                                <td></td>
                                            @else
                                                <td><img src="{{asset('img/modulo/'.$modulo->imagen)}}"
                                                         style="width: 60px"></td>
                                            @endif
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">Opciones
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="modulo/{{$modulo->id}}/editar">Editar</a>
                                                        <a class="dropdown-item" href="eliminar_modulo/{{$modulo->id}}">Eliminar</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


@stop
