
<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:56:31 GMT -->
<head><title>Startclik - Plataforma educativa avanzada</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
<!--  <link href="{{asset('fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css')}}" rel="stylesheet" type="text/css">
    -->
    <link href="{{asset('bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/mainbfdf.css?version=2.3')}}" rel="stylesheet">
    <link href="{{asset('js/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('summernote/summernote.css')}}" rel="stylesheet">


    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Material Design Icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Aqui son para las graficas -->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <!-- Aqui son para las graficas -->

</head>
<body>
<div class="all-wrapper menu-side with-side-panel">
    <div class="layout-w">
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w"><a class="mm-logo" href="/home"><img src="{{asset('img/logo-start.png')}}" style="width: 200px"><span> </span></a>
                <div class="mm-buttons">
                   <!-- <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>-->
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                @if(Auth::user()->rol == 'empresa')
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="{{asset('img/usuario/'.Auth::user()->avatar)}}"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">{{Auth::user()->razon_social}}</div>
                            <div class="logged-user-role">{{Auth::user()->rol}}</div>
                        </div>
                    </div>
                @else
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="{{asset('img/usuario/'.Auth::user()->avatar)}}"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">{{Auth::user()->name}} {{Auth::user()->apellidos}}</div>
                            <div class="logged-user-role">{{Auth::user()->rol}}</div>
                        </div>
                    </div>
                @endif
                <ul class="main-menu">
                    <li><a href="{{url('dashboard')}}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a>
                    </li>
                    @if(Auth::user()->rol == 'usuario' or Auth::user()->rol == 'empresa' or Auth::user()->rol == 'instructor')
                    @elseif(Auth::user()->rol == 'administrador')
                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-user-male-circle"></div>
                                </div>
                                <span>Creador de usuarios</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{url('administrador')}}">Administradores</a></li>
                                <li><a href="{{url('instructores')}}">Instructores</a></li>
                                <li><a href="{{url('empresas')}}">Empresas</a></li>
                                <li><a href="{{url('usuarios')}}">Usuarios</a></li>
                            </ul>
                        </li>
                    @else
                    @endif
                    @if(Auth::user()->rol == 'usuario' or Auth::user()->rol == 'empresa' )
                    @else
                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-pencil-2"></div>
                                </div>
                                <span>Diseño de cursos</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{url('curso')}}">Diseño de cursos</a></li>
                                <li><a href="{{url('modulo')}}">Diseño de modulos</a></li>
                                <li><a href="{{url('materia')}}">Diseño de materias</a></li>
                                <li><a href="{{url('leccion')}}">Diseño de lecciones</a></li>
                                <li><a href="{{url('quiz_leccion')}}">Diseño de quiz</a></li>
                                <li><a href="{{url('categorias')}}">Crear categorias</a></li>
                            </ul>
                        </li>

                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon os-icon-tasks-checked"></div>
                                </div>
                                <span>Material de Apoyo</span></a>
                            <ul class="sub-menu">

                                <li><a href="{{url('subirmaterialdeapoyo_curso')}}">Material para cursos</a></li>
                                <li><a href="{{url('subirmaterialdeapoyo_modulo')}}">Material para modulos</a></li>
                                <li><a href="{{url('subirmaterialdeapoyo')}}">Material para materias</a></li>
                                <li><a href="{{url('subirmaterialdeapoyo_leccion')}}">Material para lecciones</a></li>

                            </ul>
                        </li>
                    @endif

                    <li><a href="{{url('dashboard')}}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-crown"></div>
                            </div>
                            <span>Cursos</span></a>
                    </li>
                  <!--  <li><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Mis cursos</span></a>
                    </li>-->

                    <li><a href="{{url('foros')}}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-text-input"></div>
                            </div>
                            <span>Foros</span></a>
                    </li>
                    <li><a href="{{url('miperfil')}}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>Mi perfil</span></a>
                    </li>
                    <li><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Certificados</span></a>
                    </li>
                    <!--  <li class="has-sub-menu"><a href="#">
                              <div class="icon-w">
                                  <div class="os-icon os-icon-user-male-circle"></div>
                              </div>
                              <span>User Profiles</span></a>
                          <ul class="sub-menu">
                              <li><a href="users_profile_big.html">Big Profile</a></li>
                              <li><a href="users_profile_small.html">Compact Profile</a></li>
                          </ul>
                      </li>-->

                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="icon-w">
                                <div class="os-icon os-icon-signs-11"></div>
                            </div>
                            <span>Cerrar sesión</span></a>
                    </li>
                </ul>
               <!-- <div class="mobile-menu-magic"><h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded"
                                          href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                          target="_blank">Purchase Now</a></div>
                </div>-->
            </div>
        </div>

        <div class="desktop-menu menu-side-w menu-activated-on-click">
            <div class="logo-w"><a class="logo" href="{{url('/')}}"><img src="{{asset('img/logo-start.png')}}" style="width: 200px"><span></span></a>
            </div>
            <div class="menu-and-user">
                @if(Auth::user()->rol == 'empresa')
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="{{asset('img/usuario/'.Auth::user()->avatar)}}"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">{{Auth::user()->razon_social}}</div>
                            <div class="logged-user-role">{{Auth::user()->rol}}</div>
                        </div>
                        <div class="logged-user-menu">
                            <div class="avatar-w"><img alt="" src="{{asset('img/usuario/'.Auth::user()->avatar)}}"></div>
                            <div class="logged-user-info-w">
                                <div class="logged-user-name">{{Auth::user()->razon_social}}</div>
                                <div class="logged-user-role">{{Auth::user()->rol}}</div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                              <!--  <li><a href="#"><i class="os-icon os-icon-mail-01"></i><span>Mail</span></a></li>-->
                                <li><a href="{{url('miperfil')}}"><i class="os-icon os-icon-user-male-circle2"></i><span>Perfil</span></a>
                                </li>
                              <!--  <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Compras</span></a>
                                </li>
                                <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notificaciones</span></a></li>-->
                                <li>
                                    <a  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i>
                                        <span>Cerrar sesión</span></a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </div>
                    </div>
                    @else
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="{{asset('img/usuario/'.Auth::user()->avatar)}}"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">{{Auth::user()->name}} {{Auth::user()->apellidos}}</div>
                            <div class="logged-user-role">{{Auth::user()->rol}}</div>
                        </div>
                        <div class="logged-user-menu">
                            <div class="avatar-w"><img alt="" src="{{asset('img/usuario/'.Auth::user()->avatar)}}"></div>
                            <div class="logged-user-info-w">
                                <div class="logged-user-name">{{Auth::user()->name}} {{Auth::user()->apellidos}}</div>
                                <div class="logged-user-role">{{Auth::user()->rol}}</div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                              <!--  <li><a href="#"><i class="os-icon os-icon-mail-01"></i><span>Mail</span></a></li>-->
                                <li><a href="{{url('miperfil')}}"><i class="os-icon os-icon-user-male-circle2"></i><span>Perfil</span></a>
                                </li>
                              <!--  <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Compras</span></a>
                                </li>
                                <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notificaciones</span></a></li>-->
                                <li>
                                    <a  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i>
                                        <span>Cerrar sesión</span></a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </div>
                    </div>
                @endif

                <ul class="main-menu">
                    <li><a href="{{url('dashboard')}}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a>
                    </li>
                    @if(Auth::user()->rol == 'usuario' or Auth::user()->rol == 'empresa' or Auth::user()->rol == 'instructor')
                    @elseif(Auth::user()->rol == 'administrador')
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>Creador de usuarios</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{url('administrador')}}">Administradores</a></li>
                            <li><a href="{{url('instructores')}}">Instructores</a></li>
                            <li><a href="{{url('empresas')}}">Empresas</a></li>
                            <li><a href="{{url('usuarios')}}">Usuarios</a></li>
                        </ul>
                    </li>
                    @else
                    @endif
                    @if(Auth::user()->rol == 'usuario' or Auth::user()->rol == 'empresa' )
                    @else
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-pencil-2"></div>
                            </div>
                            <span>Diseño de cursos</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{url('curso')}}">Diseño de cursos</a></li>
                            <li><a href="{{url('modulo')}}">Diseño de modulos</a></li>
                            <li><a href="{{url('materia')}}">Diseño de materias</a></li>
                            <li><a href="{{url('leccion')}}">Diseño de lecciones</a></li>
                            <li><a href="{{url('quiz_leccion')}}">Diseño de quiz</a></li>
                            <li><a href="{{url('categorias')}}">Crear categorias</a></li>
                        </ul>
                    </li>

                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon os-icon-tasks-checked"></div>
                                </div>
                                <span>Material de Apoyo</span></a>
                            <ul class="sub-menu">

                                <li><a href="{{url('subirmaterialdeapoyo_curso')}}">Material para cursos</a></li>
                                <li><a href="{{url('subirmaterialdeapoyo_modulo')}}">Material para modulos</a></li>
                                <li><a href="{{url('subirmaterialdeapoyo')}}">Material para materias</a></li>
                                <li><a href="{{url('subirmaterialdeapoyo_leccion')}}">Material para lecciones</a></li>

                            </ul>
                        </li>
                    @endif

                    <li><a href="{{url('dashboard')}}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-crown"></div>
                            </div>
                            <span>Cursos</span></a>
                    </li>
                   <!-- <li><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Mis cursos</span></a>
                    </li>-->

                    <li><a href="{{url('foros')}}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-text-input"></div>
                            </div>
                            <span>Foros</span></a>
                    </li>
                    <li><a href="{{url('miperfil')}}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>Mi perfil</span></a>
                    </li>
                    <li><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Certificados</span></a>
                    </li>
                  <!--  <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>User Profiles</span></a>
                        <ul class="sub-menu">
                            <li><a href="users_profile_big.html">Big Profile</a></li>
                            <li><a href="users_profile_small.html">Compact Profile</a></li>
                        </ul>
                    </li>-->

                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="icon-w">
                                <div class="os-icon os-icon-signs-11"></div>
                            </div>
                            <span>Cerrar sesión</span></a>
                    </li>
                </ul>

               <!-- <div class="side-menu-magic"><h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded"
                                          href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                          target="_blank">Purchase Now</a></div>
                </div>-->
            </div>
        </div>



        <div class="content-w">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="@yield('titulo')">@yield('titulo')</a></li>
            </ul>
            <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
            <div class="content-i">
                <div class="content-box">
                    @yield('content')

                    @include('usuario.chat')

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#dataTable2').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por pagina",
                "zeroRecords": "No se encuentran registros",
                "search": "Buscar:",
                "info": "Monstrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrando enre _MAX_ registros totales)",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
            }
        });
    });
</script>

<script src="{{asset('bower_components/moment/moment.js')}}"></script>
<script src="{{asset('bower_components/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('bower_components/dropzone/dist/dropzone.js')}}"></script>
<script src="{{asset('bower_components/editable-table/mindmup-editabletable.js')}}"></script>
<script src="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script src="{{asset('js/mainbfdf.js?version=2.3')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script src="{{asset('js/quiz.js')}}"></script>
<script src="{{asset('summernote/summernote.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

</body>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:57:06 GMT -->
</html>









