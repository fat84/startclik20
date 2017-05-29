@extends('layouts.login')
@section('content')
    <div class="auth-box-w wider">
        <div class="logo-w"><a href="{{url('/')}}"><img alt="" src="img/logo-start.png" style="width: 300px"></a></div>
        <h4 class="auth-header">Crear una cuenta</h4>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for=""> Nombres</label>
                <input type="text" name="name" class="form-control" placeholder="Nombres" value="{{ old('name') }}" required>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                <label for=""> Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="{{ old('apellidos') }}" required>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                @if ($errors->has('apellidos'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group">
                <select class="form-control" name="tipo_documento">
                    <option>CEDULA</option>
                    <option>TARJETA IDENTIDAD</option>
                </select>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
            </div>

            <div class="form-group{{ $errors->has('documento') ? ' has-error' : '' }}">
                <label for="">Numero de documento</label>
                <input type="text" name="documento" class="form-control" placeholder="Numero Documento" value="{{ old('documento') }}" required>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                @if ($errors->has('documento'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('documento') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for=""> E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" required>
                <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for=""> Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Confirmar Contraseña</label>
                        <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">
                    </div>
                </div>
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary">Registrarme</button>
                <br><br>
               ¿Ya tienes una cuenta? <a href="{{url('/login')}}">Inicia Sesión</a>
            </div>
        </form>
    </div>











@endsection
