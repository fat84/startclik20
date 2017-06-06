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

        <div class="row">


            <div class="col-md-12" style="padding-bottom: 2rem;">
                <div class="card" align="center" style="background-color: #223883 !important; color: white">
                    <div class="card-block">
                        <h3>BIENVENIDO, {{Auth::user()->name}} {{Auth::user()->apellidos}}</h3>
                        <span style="text-transform: uppercase;">Rol:  <b>{{Auth::user()->rol}}</b></span>
                    </div>
                </div>
            </div>

            <br>

        </div>

            <div class="col-md-12" style="padding-bottom: 2rem; ">
                <h2>Cursos Disponibles</h2>
                <br>
                <div class="row">

                    @foreach($cursos_diferentes as $curso)



                                    <div class="card col-md-6" style="border-radius: 15px !important;">
                                        <div class="card-header bg-white text-xs-center">
                                            <h4 class="card-title"><a
                                                        href="{{url('cursos/'.str_replace(' ', '',$curso->nombre).'/'.$curso->id)}}">{{$curso->nombre}}</a>
                                            </h4>
                                        </div>
                                        <a href="{{url('cursos/'.str_replace(' ', '',$curso->nombre).'/'.$curso->id)}}">
                                            <img src="{{asset('img/usuario/'.$curso->imagen)}}" alt="Card image cap"
                                                 style="width:100%;">
                                        </a>
                                        <div class="card-block">
                                            <small class="text-muted">{{$curso->categoria}}</small>
                                            <br>
                                            @if(strlen($curso->descripcion) > 20)
                                                <?=substr($curso->descripcion, 0, 1000) . "..."?>
                                            @endif
                                            <span class="tag tag-primary"></span>
                                        </div>
                                        <style>
                                            .precio:hover {
                                                background-color: #0a9fe2;
                                                color: white;
                                            }
                                        </style>
                                        <a class="precio"
                                           href="{{url('cursos/'.str_replace(' ', '',$curso->nombre).'/'.$curso->id)}}">
                                            <div class="card-footer precio" style="text-align: center">
                                                <h5>$ {{number_format($curso->precio)}} COP</h5>
                                            </div>
                                        </a>
                                    </div>





                    @endforeach


                </div>
            </div>

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lista de MIS CURSOS</h4>
                    </div>
                    <div class="card-block">
                        <div>

                            <br>
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
                                @foreach($mis_cursos as $curso2)
                                    <tr>
                                        <td>{{$curso2->nombre}}</td>
                                        <td>{{$curso2->categoria}}</td>
                                        <td>{{$curso2->precio}}</td>
                                        <td><img src="{{asset('img/usuario/'.$curso2->imagen)}}" style="width: 60px"></td>
                                        <td>
                                            <video src="{{asset('video/curso/'.$curso2->video_promo)}}" style="width: 200px"
                                                   autoplay></video>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Opciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="perfil_curso/{{$curso2->id}}">Perfil</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>


    </div>
@stop