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
    <div class="element-wrapper"><h6 class="element-header">Edición de empresa</h6>
        <div class="element-box">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-block">
                                Editar Empresa
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-block">
                                {!! Form::model($empresa,['route'=>['empresa.update',$empresa->id],'method'=>'PUT']) !!}
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
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">Razón social</label>
                                        {!! Form::text('razon_social',null,['class'=>'form-control','placeholder'=>'Razon social']) !!}
                                    </fieldset>
                                    <div class="form-group">
                                        <label>Tipo Documento</label>
                                        {!! Form::select('tipo_documento', [
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
                                <div class="col-lg-6">

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
                                    <button type="submit" class="btn btn-primary btn-space">Actualizar Empresa</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop