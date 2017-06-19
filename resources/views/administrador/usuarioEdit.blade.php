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

    <div class="element-wrapper"><h6 class="element-header">Editar usuarios</h6>
        <div class="element-box">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-block">
                                Editar Usuario
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-block">
                                {!! Form::model($usuario,['route'=>['usuario.update',$usuario->id],'method'=>'PUT']) !!}
                                {{ csrf_field() }}
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger sing-box" role="alert">
                                        <ul>
                                            @foreach($errors->all() as $errors)
                                                <li>{!! $errors !!}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="col-sm-6">
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">Nombres</label>
                                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombres']) !!}
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">Apellidos</label>
                                        {!! Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Apellidos']) !!}
                                    </fieldset>
                                    <div class="form-group">
                                        <label>Tipo Documento</label>
                                        {!! Form::select('tipo_documento', [
                                          'Cedula ciudadania' => 'Cedula ciudadania',
                                          'Cedula extranjera' => 'Cedula extranjera',
                                          'Nit' => 'Nit',],null,['class' => 'form-control']
                                                              ) !!}
                                    </div>
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">Documento</label>
                                        {!! Form::text('documento',null,['class'=>'form-control','placeholder'=>'Documento']) !!}
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">Correo Electronico</label>
                                        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Correo electronico']) !!}
                                    </fieldset>

                                </div>
                                <div class="col-sm-6">

                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">Direccion</label>
                                        {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Direccion']) !!}
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">Telefono</label>
                                        {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Telefono']) !!}
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">Contraseña</label>
                                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary btn-space">Actualizar Usuario</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>



    <div class="element-wrapper"><h6 class="element-header">Cursos del usuario</h6>
        <div class="element-box">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <button class="btn pull-right" data-toggle="modal" data-target="#myModal">Añadir cursos</button>
                        <div class="card-block">
                            <div>
                                <br>
                                <div class="table-responsive">
                                    <table id="dataTable2" class="table table-striped table-lightfont" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Curso</th>
                                            <th>Tipo</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Curso</th>
                                            <th>Tipo</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($cursosUsuario as $cursoUsuario)
                                        <tr>
                                            <th>{{$cursoUsuario->fechaSuscripcion}}</th>
                                            <th style="text-transform: uppercase">{{$cursoUsuario->nombreCursos}}</th>
                                            @if($cursoUsuario->pagoCurso > 0)
                                            <th>PAGO</th>
                                            @else
                                                <th>GRATIS</th>
                                            @endif
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir cursos a usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('obsequiarCursoUsuario')}}" method="post">
                    {{ csrf_field() }}
                <div class="modal-body">
                        <select required class="form-control" name="cursoAregalar">
                            @if(count($cursosNoUsuario) > 0)

                                <option value="">Seleccione un curso</option>
                                @foreach($cursosNoUsuario as $cursoNoUsuario)
                                    <option value="{{$cursoNoUsuario->id}}">{{$cursoNoUsuario->nombre}}</option>
                                @endforeach
                               <input name="idUsuario" value="{{$usuario->id}}">
                            @else
                                <option value="">El usuario tiene todos los cursos</option>
                            @endif
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@stop