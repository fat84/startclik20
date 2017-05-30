
<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:56:31 GMT -->
<head><title>Admin Dashboard HTML Template</title>
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
    --><link href="{{asset('bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/mainbfdf.css?version=2.3')}}" rel="stylesheet">
    <link href="{{asset('js/sweetalert.css')}}" rel="stylesheet">
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Material Design Icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="all-wrapper menu-side with-side-panel">
    <div class="layout-w">
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w"><a class="mm-logo" href="/home"><img src="{{asset('img/logo-start.png')}}" style="width: 200px"><span>Clean Admin</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="{{asset('img/avatar1.jpg')}}"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Maria Gomez</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                </div>
                <ul class="main-menu">
                    <li><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>User Profiles</span></a>
                        <ul class="sub-menu">
                            <li><a href="users_profile_big.html">Big Profile</a></li>
                            <li><a href="users_profile_small.html">Compact Profile</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Forms</span></a>
                        <ul class="sub-menu">
                            <li><a href="forms_regular.html">Regular Forms</a></li>
                            <li><a href="forms_validation.html">Form Validation</a></li>
                            <li><a href="forms_wizard.html">Form Wizard</a></li>
                            <li><a href="forms_uploads.html">File Uploads</a></li>
                            <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid-squares"></div>
                            </div>
                            <span>Tables</span></a>
                        <ul class="sub-menu">
                            <li><a href="tables_regular.html">Regular Tables</a></li>
                            <li><a href="tables_datatables.html">Data Tables</a></li>
                            <li><a href="tables_editable.html">Editable Tables</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-hierarchy-structure-2"></div>
                            </div>
                            <span>Menu Styles</span></a>
                        <ul class="sub-menu">
                            <li><a href="layouts_menu_side.html">Side Menu</a></li>
                            <li><a href="layouts_menu_side_dark.html">Side Menu Dark</a></li>
                            <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                            <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                            <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                            <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                            <li><a href="layouts_menu_top_image.html">Top Menu Image</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-robot-1"></div>
                            </div>
                            <span>Icons</span></a>
                        <ul class="sub-menu">
                            <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                            <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                            <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                            <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                            <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                            <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                            <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                            <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                            <li><a href="icon_fonts_ligature_symbols.html">Ligature Symbols</a></li>
                            <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                            <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                            <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                            <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                            <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                            <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_charts.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-donut-chart-2"></div>
                            </div>
                            <span>Charts</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-newspaper"></div>
                            </div>
                            <span>Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="misc_invoice.html">Invoice</a></li>
                            <li><a href="auth_login.html">Login</a></li>
                            <li><a href="auth_register.html">Register</a></li>
                            <li><a href="auth_lock.html">Lock Screen</a></li>
                            <li><a href="misc_chat.html">Popup Chat</a></li>
                            <li><a href="misc_error_404.html">Error 404</a></li>
                            <li><a href="misc_error_500.html">Error 500</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_calendar.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-calendar-time"></div>
                            </div>
                            <span>Calendar</span></a></li>
                </ul>
                <div class="mobile-menu-magic"><h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded"
                                          href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                          target="_blank">Purchase Now</a></div>
                </div>
            </div>
        </div>

        <div class="desktop-menu menu-side-w menu-activated-on-click">
            <div class="logo-w"><a class="logo" href="{{url('/')}}"><img src="{{asset('img/logo-start.png')}}" style="width: 200px"><span></span></a>
            </div>
            <div class="menu-and-user">
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
                            <li><a href="#"><i class="os-icon os-icon-mail-01"></i><span>Mail</span></a></li>
                            <li><a href="{{url('miperfil')}}"><i class="os-icon os-icon-user-male-circle2"></i><span>Perfil</span></a>
                            </li>
                            <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Compras</span></a>
                            </li>
                            <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notificaciones</span></a></li>
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
                            <li><a href="#">Diseño de examenes</a></li>
                        </ul>
                    </li>
                    @endif

                    <li><a href="{{url('dashboard')}}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-crown"></div>
                            </div>
                            <span>Cursos</span></a>
                    </li>
                    <li><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Mis cursos</span></a>
                    </li>

                    <li><a href="index.html">
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
                    <li><a href="index.html">
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
                @yield('content')






                <div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Chat</span></div>
                <div class="floated-chat-w">
                    <div class="floated-chat-i">
                        <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
                        <div class="chat-head">
                            <div class="user-w with-status status-green">
                                <div class="user-avatar-w">
                                    <div class="user-avatar"><img alt="" src="{{asset('img/avatar1.jpg')}}"></div>
                                </div>
                                <div class="user-name"><h6 class="user-title">Juan Carlos</h6>
                                    <div class="user-role">Soprte</div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-messages">
                            <div class="message">
                                <div class="message-content">¿Hola, como puedo ayudarte?</div>
                            </div>
                            <div class="date-break">Mon 10:20am</div>
                            <div class="message">
                                <div class="message-content">Hola, mi nombre es Mike, voy a estar encantados de ayudarle
                                </div>
                            </div>
                            <div class="message self">
                                <div class="message-content">Hola, He intentado ordenar este curso y me sigue mostrando el código de error.
                                </div>
                            </div>
                        </div>
                        <div class="chat-controls"><input class="message-input"
                                                          placeholder="Escribir mensaje..." type="text">
                            <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach Document</span><i
                                            class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                                            class="extra-tooltip">Insert Photo</span><i
                                            class="os-icon os-icon-others-29"></i></a><a href="#"><span
                                            class="extra-tooltip">Upload Video</span><i
                                            class="os-icon os-icon-ui-51"></i></a></div>
                        </div>
                    </div>
                </div>








            </div>
        </div>
    </div>
</div>
<script src="{{asset('bower_components/moment/moment.js')}}"></script>
<script src="{{asset('bower_components/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('bower_components/dropzone/dist/dropzone.js')}}"></script>
<script src="{{asset('bower_components/editable-table/mindmup-editabletable.js')}}"></script>
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('js/mainbfdf.js?version=2.3')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
</body>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:57:06 GMT -->
</html>









