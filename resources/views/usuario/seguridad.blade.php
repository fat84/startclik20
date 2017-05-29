@extends('layouts.app')
@section('content')
    @if($message=Session::has('message'))
        <script>
            $( document ).ready(function() {
                swal(
                    'Algo salio mal!',
                    '{{Session::get('message')}}',
                    'error'
                )});
        </script>
    @endif
    @if($message=Session::has('status'))
        <script>
            $( document ).ready(function() {
                swal(
                    'En hora buena!',
                    '{{Session::get('status')}}',
                    'success'
                )});
        </script>
    @endif


    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper"><h6 class="element-header">Cambio de contrseña</h6>
                    <div class="element-box">
                        <form action="actualizarPass" method="post">
                            {{csrf_field()}}
                            <fieldset class="form-group{{ $errors->has('passwordActual') ? ' has-error' : '' }}">
                                <label for="exampleInputPassword1">Contraseña Actual</label>
                                <input type="password" class="form-control" id="passwordActual" name="mypassword" placeholder="Contraseña Actual">
                                @if ($errors->has('mypassword'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('mypassword') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="exampleInputPassword1">Nueva Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Nueva ccontraseña">

                                @if ($errors->has('password'))
                                    <span class="help-block" style="color: red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputPassword1">Confirmar Nueva contraseña</label>
                                <input  id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Nueva ccontraseña">
                            </fieldset>
                            <button type="submit" class="btn btn-success">Actualizar contraseña</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
