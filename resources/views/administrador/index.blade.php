@extends('layouts.app')
@section('content')
    @if($message=Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    <?php
    $cursos = \App\Curso::all()->count();
    $usuarios = \App\User::where('rol','=','usuario')->count();
    $instructores = \App\User::where('rol','=','instructor')->count();
    $empresas = \App\User::where('rol','=','empresa')->count();
    $administrador = \App\User::where('rol','=','administrador')->count();
    ?>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <center>
                            <h4>Cursos</h4><h5><b>{{$cursos}}</b></h5>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <center>
                            <h4>Usuarios</h4><h5><b>{{$usuarios}}</b></h5>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <center>
                            <h4>Instructores</h4><h5><b>{{$instructores}}</b></h5>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-block">
                        <center>
                            <h4>Empresas</h4><h5><b>{{$empresas}}</b></h5>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-block">
                        <center>
                            <h4>Administradores</h4><h5><b>{{$administrador}}</b></h5>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop