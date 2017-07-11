@extends('layouts.app')
@section('content')
    <div class="mdk-drawer-layout__content">
        <div class="container-fluid">
            <div class="container">

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
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-block">
                                <h3>Bienvenidos, {{Auth::user()->name}} {{Auth::user()->apellidos}}</h3>
                                <span style="text-transform: uppercase;">{{Auth::user()->rol}}</span>
                            </div>
                        </div>


                    </div>
                </div>









            </div>

            <br><br>

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Mis cursos asignados</h4>
                    </div>
                    <div class="card-block">
                        <div>

                            <br>
                            <table id="dataTable2" class="table table-striped table-lightfont" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Nombre Curso</th>
                                    <th># de Inscritos</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nombre Curso</th>
                                    <th># de Inscritos</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($cursos as $curso)
                                    <tr>
                                        <td><a>{{$curso->nombre}}</a></td>
                                        <td>{{$curso->contador}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{url('inscritos/'.$curso->id)}}">Lista de Inscritos</a>
                                                    <a class="dropdown-item" href="{{url('perfil_curso/'.$curso->id)}}">Perfil del Curso</a>
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