@extends('layouts.app')
@section('content')

   <script type="text/javascript">
        $(function () {
            Highcharts.createElement('link', {
                href: 'https://fonts.googleapis.com/css?family=Unica+One',
                rel: 'stylesheet',
                type: 'text/css'
            }, null, document.getElementsByTagName('head')[0]);


            var chart = new Highcharts.Chart({
                    chart: {
                        type: 'column',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '18px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        },
                        options3d: {
                            enabled: false,
                            alpha: 10,
                            beta: 25,
                            depth: 70
                        },
                        renderTo: 'container'
                    },

                    title: {
                        text: 'Total de Cursos'
                    },
                    subtitle: {
                        text: 'Mes a Mes'
                    },
                    xAxis: {
                        categories: [
                            @foreach($cursosxmes as $consul)
                                '<?php
                                $mes = $consul->mes;
                                if ($mes == 1) {
                                    $mesactual = "Enero";
                                } else if ($mes == 2) {
                                    $mesactual = "Febrero";
                                } else if ($mes == 3) {
                                    $mesactual = "Marzo";
                                } else if ($mes == 4) {
                                    $mesactual = "Abril";
                                } else if ($mes == 5) {
                                    $mesactual = "Mayo";
                                } else if ($mes == 6) {
                                    $mesactual = "Junio";
                                } else if ($mes == 7) {
                                    $mesactual = "Julio";
                                } else if ($mes == 8) {
                                    $mesactual = "Agosto";
                                } else if ($mes == 9) {
                                    $mesactual = "Septiembre";
                                } else if ($mes == 10) {
                                    $mesactual = "Octubre";
                                } else if ($mes == 11) {
                                    $mesactual = "Noviembre";
                                } else if ($mes == 12) {
                                    $mesactual = "Diciembre";
                                };
                                echo $mesactual;
                                ?>',
                            @endforeach
                        ]

                        ,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Cantidad de Cursos'
                        }
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{

                        name: 'Cantidad de Cursos',
                        data: [
                            @foreach ($cursosxmes as $consul)
                            {{$consul->cuantos}},
                            @endforeach
                        ]


                    }]
                });
        });
    </script>

   <script type="text/javascript">
       $(function () {
           Highcharts.createElement('link', {
               href: 'https://fonts.googleapis.com/css?family=Unica+One',
               rel: 'stylesheet',
               type: 'text/css'
           }, null, document.getElementsByTagName('head')[0]);


           var chart = new Highcharts.Chart({
                   chart: {
                       type: 'column',
                       labels: {
                           rotation: -45,
                           style: {
                               fontSize: '18px',
                               fontFamily: 'Verdana, sans-serif'
                           }
                       },
                       options3d: {
                           enabled: false,
                           alpha: 10,
                           beta: 25,
                           depth: 70
                       },
                       renderTo: 'años'
                   },

                   title: {
                       text: 'Total de Cursos'
                   },
                   subtitle: {
                       text: 'Año a Año'
                   },
                   xAxis: {
                       categories: [
                           @foreach($cursosxaño as $consul)
                               '<?php
                               $año = $consul->año;

                               echo $año;
                               ?>',
                           @endforeach
                       ]

                       ,
                       crosshair: true
                   },
                   yAxis: {
                       min: 0,
                       title: {
                           text: 'Cantidad de Cursos'
                       }
                   },
                   plotOptions: {
                       column: {
                           pointPadding: 0.2,
                           borderWidth: 0
                       }
                   },
                   series: [{

                       name: 'Cantidad de Cursos',
                       data: [
                           @foreach ($cursosxaño as $consul)
                           {{$consul->cuantos}},
                           @endforeach
                       ]


                   }]
               });
       });
   </script>


   <script type="text/javascript">
       $(function () {
           Highcharts.createElement('link', {
               href: 'https://fonts.googleapis.com/css?family=Unica+One',
               rel: 'stylesheet',
               type: 'text/css'
           }, null, document.getElementsByTagName('head')[0]);


           var chart = new Highcharts.Chart({
               chart: {
                   type: 'column',
                   labels: {
                       rotation: -45,
                       style: {
                           fontSize: '18px',
                           fontFamily: 'Verdana, sans-serif'
                       }
                   },
                   options3d: {
                       enabled: false,
                       alpha: 10,
                       beta: 25,
                       depth: 70
                   },
                   renderTo: 'inscritoxmes'
               },

               title: {
                   text: 'Total de Inscritos'
               },
               subtitle: {
                   text: 'Mes a Mes'
               },
               xAxis: {
                   categories: [
                       @foreach($inscritosxmes as $consul)
                           '<?php
                           $mes = $consul->mes;
                           if ($mes == 1) {
                               $mesactual = "Enero";
                           } else if ($mes == 2) {
                               $mesactual = "Febrero";
                           } else if ($mes == 3) {
                               $mesactual = "Marzo";
                           } else if ($mes == 4) {
                               $mesactual = "Abril";
                           } else if ($mes == 5) {
                               $mesactual = "Mayo";
                           } else if ($mes == 6) {
                               $mesactual = "Junio";
                           } else if ($mes == 7) {
                               $mesactual = "Julio";
                           } else if ($mes == 8) {
                               $mesactual = "Agosto";
                           } else if ($mes == 9) {
                               $mesactual = "Septiembre";
                           } else if ($mes == 10) {
                               $mesactual = "Octubre";
                           } else if ($mes == 11) {
                               $mesactual = "Noviembre";
                           } else if ($mes == 12) {
                               $mesactual = "Diciembre";
                           };
                           echo $mesactual;
                           ?>',
                       @endforeach
                   ]

                   ,
                   crosshair: true
               },
               yAxis: {
                   min: 0,
                   title: {
                       text: 'Cantidad de Inscritos'
                   }
               },
               plotOptions: {
                   column: {
                       pointPadding: 0.2,
                       borderWidth: 0
                   }
               },
               series: [{

                   name: 'Cantidad de Inscrtios',
                   data: [
                       @foreach ($inscritosxmes as $consul)
                       {{$consul->cuantos}},
                       @endforeach
                   ]


               }]
           });
       });
   </script>

   <script type="text/javascript">
       $(function () {
           Highcharts.createElement('link', {
               href: 'https://fonts.googleapis.com/css?family=Unica+One',
               rel: 'stylesheet',
               type: 'text/css'
           }, null, document.getElementsByTagName('head')[0]);


           var chart = new Highcharts.Chart({
               chart: {
                   type: 'column',
                   labels: {
                       rotation: -45,
                       style: {
                           fontSize: '18px',
                           fontFamily: 'Verdana, sans-serif'
                       }
                   },
                   options3d: {
                       enabled: false,
                       alpha: 10,
                       beta: 25,
                       depth: 70
                   },
                   renderTo: 'inscritoxaño'
               },

               title: {
                   text: 'Total de Cursos'
               },
               subtitle: {
                   text: 'Año a Año'
               },
               xAxis: {
                   categories: [
                       @foreach($inscritosxaño as $consul)
                           '<?php
                           $año = $consul->año;

                           echo $año;
                           ?>',
                       @endforeach
                   ]

                   ,
                   crosshair: true
               },
               yAxis: {
                   min: 0,
                   title: {
                       text: 'Cantidad de Inscritos'
                   }
               },
               plotOptions: {
                   column: {
                       pointPadding: 0.2,
                       borderWidth: 0
                   }
               },
               series: [{

                   name: 'Cantidad de Inscritos',
                   data: [
                       @foreach ($inscritosxaño as $consul)
                       {{$consul->cuantos}},
                       @endforeach
                   ]


               }]
           });
       });
   </script>

   <script type="text/javascript">
       $(function () {
           Highcharts.createElement('link', {
               href: 'https://fonts.googleapis.com/css?family=Unica+One',
               rel: 'stylesheet',
               type: 'text/css'
           }, null, document.getElementsByTagName('head')[0]);


           var chart = new Highcharts.Chart({
               chart: {
                   type: 'column',
                   labels: {
                       rotation: -45,
                       style: {
                           fontSize: '18px',
                           fontFamily: 'Verdana, sans-serif'
                       }
                   },
                   options3d: {
                       enabled: false,
                       alpha: 10,
                       beta: 25,
                       depth: 70
                   },
                   renderTo: 'pagoxaño'
               },

               title: {
                   text: 'Total Recaudado'
               },
               subtitle: {
                   text: 'Año a Año'
               },
               xAxis: {
                   categories: [
                       @foreach($pagoxaño as $consul)
                           '<?php
                           $año = $consul->año;

                           echo $año;
                           ?>',
                       @endforeach
                   ]

                   ,
                   crosshair: true
               },
               yAxis: {
                   min: 0,
                   title: {
                       text: 'Cantidad en dinero'
                   }
               },
               plotOptions: {
                   column: {
                       pointPadding: 0.2,
                       borderWidth: 0
                   }
               },
               series: [{

                   name: 'Cantidad en dinero',
                   data: [
                       @foreach ($pagoxaño as $consul)
                       {{$consul->dinero}},
                       @endforeach
                   ]


               }]
           });
       });
   </script>

   <script type="text/javascript">
       $(function () {
           Highcharts.createElement('link', {
               href: 'https://fonts.googleapis.com/css?family=Unica+One',
               rel: 'stylesheet',
               type: 'text/css'
           }, null, document.getElementsByTagName('head')[0]);


           var chart = new Highcharts.Chart({
               chart: {
                   type: 'column',
                   labels: {
                       rotation: -45,
                       style: {
                           fontSize: '18px',
                           fontFamily: 'Verdana, sans-serif'
                       }
                   },
                   options3d: {
                       enabled: false,
                       alpha: 10,
                       beta: 25,
                       depth: 70
                   },
                   renderTo: 'pagoxmes'
               },

               title: {
                   text: 'Total Recaudado'
               },
               subtitle: {
                   text: 'Mes a Mes'
               },
               xAxis: {
                   categories: [
                       @foreach($pagoxmes as $consul)
                           '<?php
                           $mes = $consul->mes;
                           if ($mes == 1) {
                               $mesactual = "Enero";
                           } else if ($mes == 2) {
                               $mesactual = "Febrero";
                           } else if ($mes == 3) {
                               $mesactual = "Marzo";
                           } else if ($mes == 4) {
                               $mesactual = "Abril";
                           } else if ($mes == 5) {
                               $mesactual = "Mayo";
                           } else if ($mes == 6) {
                               $mesactual = "Junio";
                           } else if ($mes == 7) {
                               $mesactual = "Julio";
                           } else if ($mes == 8) {
                               $mesactual = "Agosto";
                           } else if ($mes == 9) {
                               $mesactual = "Septiembre";
                           } else if ($mes == 10) {
                               $mesactual = "Octubre";
                           } else if ($mes == 11) {
                               $mesactual = "Noviembre";
                           } else if ($mes == 12) {
                               $mesactual = "Diciembre";
                           };
                           echo $mesactual;
                           ?>',
                       @endforeach
                   ]

                   ,
                   crosshair: true
               },
               yAxis: {
                   min: 0,
                   title: {
                       text: 'Cantidad en dinero'
                   }
               },
               plotOptions: {
                   column: {
                       pointPadding: 0.2,
                       borderWidth: 0
                   }
               },
               series: [{

                   name: 'Cantidad en dinero',
                   data: [
                       @foreach ($pagoxmes as $consul)
                       {{$consul->dinero}},
                       @endforeach
                   ]


               }]
           });
       });
   </script>
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
                        <h3>BIENVENIDO, {{Auth::user()->razon_social}}</h3>
                        <span style="text-transform: uppercase;">ROL:  <b>{{Auth::user()->rol}}</b></span>
                    </div>
                </div>
            </div>

            <br>

           <h2 style="padding-bottom: 2rem;">ESTADISITICAS</h2>



            <div class="container">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#inicial" role="tab">Principal</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none !important;">
                            Total cursos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="true" style="text-decoration: none !important;">Por meses</a>
                            <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-toggle="tab" aria-controls="dropdown2" aria-expanded="true" style="text-decoration: none !important;">Por años</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none !important;">
                            Total inscritos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="dropdown3-tab" href="#dropdown3" role="tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="true" style="text-decoration: none !important;">Por meses</a>
                            <a class="dropdown-item" id="dropdown4-tab" href="#dropdown4" role="tab" data-toggle="tab" aria-controls="dropdown2" aria-expanded="true" style="text-decoration: none !important;">Por años</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none !important;">
                            Total Dinero
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="dropdown5-tab" href="#dropdown5" role="tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="true" style="text-decoration: none !important;">Por meses</a>
                            <a class="dropdown-item" id="dropdown6-tab" href="#dropdown6" role="tab" data-toggle="tab" aria-controls="dropdown2" aria-expanded="true" style="text-decoration: none !important;">Por años</a>
                        </div>
                    </li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="inicial" role="tabpanel">
                    <br>
                    <div class="col-md-12" style="padding-bottom: 2rem; ">
                        <div class="row">

                            <br>


                            <div class="col-md-4">
                                <div class="card" style="background-color: #2196F3 !important; border-radius: 15px !important;" >
                                    <div class="card-block">
                                        <center>

                                            <h3>Total Cursos Creados</h3><h5><b>{{$contadorCurso}}</b></h5>
                                        </center>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card" style="background-color: #F43F3A !important; border-radius: 15px !important;">
                                    <div class="card-block">
                                        <center>
                                            <h3>Total de Inscritos</h3>
                                            <h5><b>{{$contadorIns}}</b></h5>
                                        </center>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card" style="background-color: #BCC02D !important; border-radius: 15px !important;">
                                    <div class="card-block">
                                        <center>
                                            <h3>Dinero Recaudado</h3>
                                            @foreach($recibido as $reci)
                                                <h5><b>$ {{number_format($reci->dinero, 0, ',', '.')}}</b></h5>
                                            @endforeach
                                        </center>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                    </div>

                    <div class="tab-pane" id="dropdown1" role="tabpanel">

                        <div class="element-box" style="background-color: #eff2f7 !important;">
                            <div class="os-tabs-w">
                                <div class="tab-content">

                                    <div id="container" style="	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="dropdown2" role="tabpanel">

                        <div class="element-box" style="background-color: #eff2f7 !important;">
                            <div class="os-tabs-w">
                                <div class="tab-content">


                                    <div id="años" style="	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="dropdown3" role="tabpane2">

                        <div class="element-box" style="background-color: #eff2f7 !important;">
                            <div class="os-tabs-w">
                                <div class="tab-content">

                                    <div id="inscritoxmes" style="	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="dropdown4" role="tabpanel">

                        <div class="element-box" style="background-color: #eff2f7 !important;">
                            <div class="os-tabs-w">
                                <div class="tab-content">

                                    <div id="inscritoxaño" style="	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="dropdown5" role="tabpanel">

                        <div class="element-box" style="background-color: #eff2f7 !important;">
                            <div class="os-tabs-w">
                                <div class="tab-content">

                                    <div id="pagoxmes" style="	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="dropdown6" role="tabpanel">

                        <div class="element-box" style="background-color: #eff2f7 !important;">
                            <div class="os-tabs-w">
                                <div class="tab-content">

                                    <div id="pagoxaño" style="	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto"></div>

                                </div>
                            </div>
                        </div>
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
                                    <th>Nombre Curso</th>
                                    <th>Precio</th>
                                    <th>Inscritos</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nombre Curso</th>
                                    <th>Precio</th>
                                    <th>Inscritos</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($cursos as $curso)
                                    <tr>
                                        <td><a>{{$curso->nombre}}</a></td>
                                        <td>$ {{number_format($curso->precio, 0, ',', '.')}}</td>
                                        <td>{{$curso->contador}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="inscritos/{{$curso->id}}">Lista de Inscritos</a>
                                                <!--<a class="dropdown-item" href="eliminar_material_curso/{{$curso->id}}">Informe de Suscripciones</a> -->
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
