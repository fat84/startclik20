@extends('layouts.login')

@section('content')

    <div class="auth-box-w">
        <div class="logo-w"><a href="{{url('/')}}"><img alt="" src="img/logo-start.png" style="width: 300px"></a></div>
        <h4 class="auth-header">Inicio de sesión</h4>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="">E-mail</label>
                <input class="form-control" name="email" placeholder="Ingresa tu Email" value="{{old('email')}}" type="text">
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Contraseña</label>
                <input class="form-control" placeholder="Ingresa tu contraseña" type="password" name="password">
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
                @if ($errors->has('password'))
                    <span class="help-block">
                       <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary">Iniciar sesión</button>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">Recordar</label>
                </div><br><br>
              <center><a href="{{ route('password.request') }}">¿Olvidaste la contraseña?</a>
              <br><br>
                 ¿No tienes una cuenta? <a href="{{url('/register')}}">Registrate</a>
              </center>
            </div>
        </form>
    </div>
@endsection
