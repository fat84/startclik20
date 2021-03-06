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
    <div class="element-wrapper"><h6 class="element-header">Creación de Usuarios</h6>
        <div class="element-box">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h3>Crear Usuario</h3>
                                {!! Form::open(['route'=>'usuario.store','method'=>'POST']) !!}
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group xs-pt-10">
                                            <label>Nombres</label>
                                            <input type="text" placeholder="Nombre" name="name" class="form-control" value="{{ old('name') }}" >
                                        </div>
                                        <div class="form-group xs-pt-10">
                                            <label>Apellidos</label>
                                            <input type="text" placeholder="Apellidos" name="apellidos" class="form-control" value="{{ old('apellidos') }}" >
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo Documento</label>
                                            <select class="form-control" name="tipo_documento">
                                                <option>Cedula ciudadania</option>
                                                <option>Cedula extranjera</option>
                                                <option>Nit</option>
                                            </select>
                                        </div>
                                        <div class="form-group xs-pt-10">
                                            <label>Documento</label>
                                            <input type="text" placeholder="Numero documento" name="documento" value="{{ old('documento') }}"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Departamento</label>
                                            <select class="form-control" name="departamento" id="departamento"
                                                    onchange="LoadCities(this.value)">
                                                <option>Seleccione un departamento</option>
                                                @foreach($departamento as $departamentos)
                                                    <option value="{{$departamentos->id}}">{{$departamentos->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <script>
                                            function LoadCities(departamento_id) {
                                                //alert(departamento_id);
                                                $.get('home/' + departamento_id, function (respuesta) {
                                                    //console.log(respuesta);
                                                    $("#ciudad").empty();
                                                    $("#ciudad").append(new Option("Seleccione una Ciudad"));
                                                    $.each(respuesta, function (index, value) {
                                                        //console.log(value.nombre);
                                                        $("#ciudad").append(new Option(value.nombre, value.id));
                                                    });
                                                });
                                            }
                                        </script>
                                        <div class="form-group">
                                            <label>Ciudad</label>
                                            <select class="form-control" name="ciudad" id="ciudad">
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group xs-pt-10">
                                            <label>Dirección</label>
                                            <input type="text" placeholder="Dirección" name="direccion" value="{{ old('direccion') }}"  class="form-control">
                                        </div>
                                        <div class="form-group xs-pt-10">
                                            <label>Telefono</label>
                                            <input type="text" placeholder="Telefono" value="{{ old('telefono1') }}"  name="telefono" class="form-control">
                                        </div>
                                        <div class="form-group xs-pt-10">
                                            <label>Correo eléctronico</label>
                                            <input type="text" placeholder="Correo electronico" value="{{ old('email') }}"  name="email" class="form-control">
                                        </div>
                                        <div class="form-group xs-pt-10">
                                            <label>Contraseña</label>
                                            <input type="password" placeholder="Contraseña" name="password" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-space">Crear Usuario</button>
                                    </div>
                                    <div>
                                        <div></div>
                                    </div>
                                </div>
                                {!! Form::close() !!}



                            </div>
                        </div>

                        <div class="card">
                            <div class="card-block">
                                <div>

                                    <br>
                                    <div class="table-responsive">
                                        <table id="dataTable2" class="table table-striped table-lightfont" cellspacing="0" width="100%">
                                            <thead>
                                        <tr>
                                            <th>Creado</th>
                                            <th>documento</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Email</th>
                                            <th>Telefono</th>
                                            <th>Acción</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Creado</th>
                                            <th>documento</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Email</th>
                                            <th>Telefono</th>
                                            <th>Acción</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($usuarios as $usuario)
                                            <tr>
                                                <td>{{$usuario->created_at}}</td>
                                                <td>{{$usuario->documento}}</td>
                                                <td>{{$usuario->name}}</td>
                                                <td>{{$usuario->apellidos}}</td>
                                                <td>{{$usuario->email}}</td>
                                                <td>{{$usuario->telefono}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Acción
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="usuario/{{$usuario->id}}/edit">Editar</a>
                                                            <a class="dropdown-item"  onclick="eliminarUsuario{{$usuario->id}}()">
                                                                Eliminar
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        function eliminarUsuario{{$usuario->id}}() {
                                                            swal({
                                                                    title: "¿Esta seguro?",
                                                                    text: "Desea eliminar este usuario",
                                                                    type: "warning",
                                                                    showCancelButton: true,
                                                                    confirmButtonColor: "#DD6B55",
                                                                    confirmButtonText: "Si, eliminar!",
                                                                    cancelButtonText: "No, Cancelar!",
                                                                    closeOnConfirm: false,
                                                                    closeOnCancel: false
                                                                },
                                                                function(isConfirm){
                                                                    if (isConfirm) {
                                                                        swal("Anulada!", "Usuario eliminado", "success");
                                                                        $('#eliminarUsuario{{$usuario->id}}').submit();

                                                                    } else {
                                                                        swal("Cancelado", "Ha sido cancelado :)", "error");
                                                                    }
                                                                });
                                                        }
                                                    </script>

                                                    {!!Form::open(['route'=>['usuario.destroy',$usuario->id],'method'=>'DELETE','id'=>'eliminarUsuario'.$usuario->id])!!}
                                                    {!! Form::close() !!}

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
        </div>

@stop