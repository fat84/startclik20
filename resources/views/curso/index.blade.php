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
    <div class="element-wrapper"><h6 class="element-header">Creación de Cursos</h6>
        <div class="element-box">
        <h1 class="page-heading h2">CURSOS</h1>
        <div class="row">
            <div class="col-md-12">

                @if($message=Session::has('message'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        {{Session::get('message')}}
                    </div>
                @endif

                    <a href="{{url('new_curso')}}"  class="btn btn-primary">Crear nuevo curso</a>

                <br>
                <!-- Lessons -->
                <div>
                    <br>
                    <div class="table-responsive">
                        <table id="dataTable2" class="table table-striped table-lightfont" cellspacing="0" width="100%">
                            <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Video</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Curso</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Video</th>
                            <th>Opciones</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($cursos as $curso)
                            @if($curso->deleted_at != null)
                                <tr>
                                    <td style="color: red">{{$curso->nombre}}</td>
                                    <td style="color: red">{{$curso->nombre_cate}}</td>
                                    <td style="color: red">{{$curso->precio}}</td>
                                    <td><img src="{{asset('img/usuario/'.$curso->imagen)}}" style="width: 60px"></td>
                                    <td>
                                        <video src="{{asset('video/curso/'.$curso->video_promo)}}" style="width: 200px"
                                               autoplay></video>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Opciones
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="perfil_curso/{{$curso->id}}">Perfil</a>
                                                <a class="dropdown-item" href="instructor_curso/{{$curso->id}}">Asignar instructor</a>
                                                <a class="dropdown-item" href="curso/{{$curso->id}}/editar">Editar</a>
                                                <a class="dropdown-item" href="habilitar_curso/{{$curso->id}}">Habilitar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td >{{$curso->nombre}}</td>
                                    <td>{{$curso->nombre_cate}}</td>
                                    <td>{{$curso->precio}}</td>
                                    <td><img src="{{asset('img/usuario/'.$curso->imagen)}}" style="width: 60px"></td>
                                    <td>
                                        <video src="{{asset('video/curso/'.$curso->video_promo)}}" style="width: 200px"
                                               autoplay></video>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Opciones
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="perfil_curso/{{$curso->id}}">Perfil</a>
                                                @if(Auth::user()->rol =='administrador')
                                                <a class="dropdown-item" href="instructor_curso/{{$curso->id}}">Asignar instructor</a>
                                                @endif
                                                <a class="dropdown-item" href="curso/{{$curso->id}}/editar">Editar</a>
                                                <a class="dropdown-item" href="eliminar_curso/{{$curso->id}}">Inhabilitar</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif

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


@stop
