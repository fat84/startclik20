@extends('layouts.app')
@section('title','miperfil')
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


        <div class="row">
            <div class="col-sm-10">
                <div class="element-wrapper"><h6 class="element-header">Datos de perfil </h6>

                    <div class="element-box">
                        <form action="ActualizarPerfil/{{Auth::user()->id}}" method="post" class="form-horizontal"
                              accept-charset="UTF-8" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="avatar" class="col-sm-3 col-form-label">Avatar</label>
                                <div class="col-sm-9">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon-block rounded">
                                                <img src="{{asset('img/usuario/'.Auth::user()->avatar)}}"
                                                     style="width: 60px">
                                            </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <label class="custom-file m-0">
                                                <input type="file" name="avatar" id="file">
                                                <!--<span class="custom-file-control"></span>-->
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Nombres</label>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Nombre"
                                                   value="{{Auth::user()->name}}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="apellidos" class="form-control"
                                                   placeholder="Apellidos" value="{{Auth::user()->apellidos}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Documento</label>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control" name="tipo_documento">
                                                <option selected>{{Auth::user()->tipo_documento}}</option>
                                                <option>CEDULA</option>
                                                <option>TARETA IDENTIDAD</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                        <input name="eldocumento" value="{{Auth::user()->documento}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Correo Electronico</label>
                                <div class="col-sm-6 col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="E-mail"
                                               value="{{Auth::user()->email}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="website" class="col-sm-3 col-form-label">Telefono</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input name="telefono" type="text" class="form-control" placeholder="566588"
                                               value="{{Auth::user()->telefono}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="website" class="col-sm-3 col-form-label">Dirección</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input name="direccion" type="text" class="form-control"
                                               placeholder="Av 12 #12-12"
                                               value="{{Auth::user()->direccion}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 offset-sm-3">
                                    <div class="media">
                                        <div class="media-left">
                                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                        </div>
                                        <div class="media-body media-middle pl-1">
                                            <label class="custom-control custom-checkbox m-0">
                                                <input type="checkbox" class="custom-control-input" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Recibir Contenido</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('seguridad')}}">Cambiar contraseña</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!--<div class="content-panel">
        <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
        <div class="element-wrapper"><h6 class="element-header">Cursos destacados</h6>
            <div class="element-box-tp">
                <div class="profile-tile">
                    <div class="profile-tile-box">
                        <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                        <div class="pt-user-name">Mark Parson</div>
                    </div>
                    <div class="profile-tile-meta">
                        <ul>
                            <li>Last Login:<strong>Online Now</strong></li>
                            <li>Tickets:<strong>12</strong></li>
                            <li>Response Time:<strong>2 hours</strong></li>
                        </ul>
                        <div class="pt-btn"><a class="btn btn-success btn-sm" href="#">Send Message</a>
                        </div>
                    </div>
                </div>
                <div class="profile-tile">
                    <div class="profile-tile-box">
                        <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                        <div class="pt-user-name">Mark Parson</div>
                    </div>
                    <div class="profile-tile-meta">
                        <ul>
                            <li>Last Login:<strong>Online Now</strong></li>
                            <li>Tickets:<strong>12</strong></li>
                            <li>Response Time:<strong>2 hours</strong></li>
                        </ul>
                        <div class="pt-btn"><a class="btn btn-secondary btn-sm" href="#">Send Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->




@stop