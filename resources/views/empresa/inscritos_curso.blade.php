@extends('layouts.app')
@section('content')
    <div class="mdk-drawer-layout__content">


        <!--   <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="fixed-student-dashboard.html">Home</a></li>
               <li class="breadcrumb-item active">Edit Account</li>
           </ol>-->
        @if($message=Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                {{Session::get('message')}}
            </div>
        @endif

        <div class="row">
            <div class="col-md-12" style="padding-bottom: 2rem;">
                <div class="card" align="center">
                    <div class="card-block">
                        @foreach($cursos as $curso)
                            <h3>Curso: <b style="text-transform: uppercase;">{{$curso->nombre}}</b></h3>
                        @endforeach
                        <span style="text-transform: uppercase;">ROL:  <b>{{Auth::user()->rol}}</b></span>
                        <br>
                        <a href="{{ url()->previous() }}">Volver al Panel anterior</a>

                    </div>
                </div>
            </div>

            <br>

            <div class="col-md-12" style="padding-bottom: 2rem; ">
                <div class="row">

                    <br>

                    @if(Auth::user()->rol == 'empresa' or Auth::user()->rol == 'administrador')
                        <div class="col-md-6">
                            <div class="card" style="background-color: #F43F3A !important; border-radius: 15px !important;">
                                <div class="card-block">
                                    <center>
                                        <h3>Total de Inscritos al Curso</h3>
                                        <h5><b>{{$contauser}}</b></h5>
                                    </center>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card" style="background-color: #BCC02D !important; border-radius: 15px !important;">
                                <div class="card-block">
                                    <center>
                                        <h3>Dinero Recaudado por el Curso</h3>
                                        @foreach($curso2 as $curso1)
                                            <h5><b>$ {{number_format($curso1->dinero, 0, ',', '.')}}</b></h5>
                                        @endforeach
                                    </center>
                                </div>
                            </div>
                        </div>

                    @elseif(Auth::user()->rol == 'instructor')

                        <div class="col-md-12">
                            <div class="card" style="background-color: #F43F3A !important; border-radius: 15px !important;">
                                <div class="card-block">
                                    <center>
                                        <h3>Total de Inscritos al Curso</h3>
                                        <h5><b>{{$contauser}}</b></h5>
                                    </center>
                                </div>
                            </div>
                        </div>

                    @endif




                </div>
            </div>

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lista de Cursos con # de Inscritos</h4>
                    </div>
                    <div class="card-block">
                        <div>

                            <br>
                            <table id="dataTable2" class="table table-striped table-lightfont" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Tipo de Documento</th>
                                    <th>Documento</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Fecha Vinculación</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Tipo de Documento</th>
                                    <th>Documento</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Fecha Vinculación</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($users as $user2)
                                    <tr>
                                        <td><a>{{$user2->tipo_documento}}</a></td>
                                        <td>{{$user2->documento}}</td>
                                        <td>{{$user2->name}}</td>
                                        <td>{{$user2->apellidos}}</td>
                                        <td>{{$user2->creacion}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{url('perfil_estudiante/'.$user2->id)}}">Perfil estudiante</a>
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
    </div>
@stop
