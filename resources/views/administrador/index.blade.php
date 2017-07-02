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

    $user = new \App\User;
    $users = $user->allOnline();

    $counterIn = 0;
    $counterAd= 0;
    $counterEm= 0;
    $counterUs= 0;
    foreach ($users as $users2){
        if ($users2->rol == 'instructor'){
            $counterIn = count($users2);
        }
        if ($users2->rol == 'administrador'){
            $counterAd = count($users2);
        }
        if ($users2->rol == 'usuario'){
            $counterUs = count($users2);
        }
        if ($users2->rol == 'empresa'){
            $counterEm = count($users2);
        }
    }


    ?>

        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">Dashboard Administrador</h6>
                    <div class="element-content">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="element-box el-tablo">
                                    <div class="label">Cursos creados</div>
                                    <div class="value">{{$cursos}}</div>
                                   <!-- <div class="trending trending-up"><span></span><i
                                                class="os-icon os-icon-arrow-up2"></i></div>-->
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="element-box el-tablo">
                                    <div class="label">Usuarios</div>
                                    <div class="value">{{$usuarios}}</div>
                                    <div class="trending trending-up"><span>{{$counterUs}}</span><i
                                                class="os-icon os-icon-arrow-up2"></i></div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="element-box el-tablo">
                                    <div class="label">Instructores</div>
                                    <div class="value">{{$instructores}}</div>
                                    <div class="trending trending-up"><span>{{$counterIn}}</span><i
                                                class="os-icon os-icon-arrow-up2"></i></div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="element-box el-tablo">
                                    <div class="label">Empresas</div>
                                    <div class="value">{{$empresas}}</div>
                                    <div class="trending trending-up"><span>{{$counterEm}}</span><i
                                                class="os-icon os-icon-arrow-up2"></i></div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="element-box el-tablo">
                                    <div class="label">Administradores</div>
                                    <div class="value">{{$administrador}}</div>
                                    <div class="trending trending-up"><span>{{$counterAd}}</span><i
                                                class="os-icon os-icon-arrow-up2"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper"><h6 class="element-header">Compras de cursos</h6>
                <div class="element-box">
                    <div class="os-tabs-w">
                        <div class="os-tabs-controls">
                            <ul class="nav nav-tabs smaller">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                        href="#tab_overview">Overview</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                        href="#tab_sales">Sales</a></li>
                            </ul>
                            <ul class="nav nav-pills smaller hidden-sm-down">
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Today</a>
                                </li>
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                        href="#">7 Days</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">14
                                        Days</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Last
                                        Month</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_overview">
                                <div class="el-tablo">
                                    <div class="label">Compras realizadas</div>
                                    <div class="value">12,537</div>
                                </div>
                                <div class="el-chart-w">
                                    <canvas height="150px" id="lineChart" width="600px"></canvas>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_sales"></div>
                            <div class="tab-pane" id="tab_conversion"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@stop