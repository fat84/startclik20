<!doctype html>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ========== VIEWPORT META ========== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- ========== PAGE TITLE ========== -->
    <title>StartClik | Plataforma Educativa</title>

    <!-- ========== META TAGS ========== -->
    <meta name="description" content="HTML template for Software, Mobile App & SaaS applications.">
    <meta name="keywords" content="software, mobile app, saas">
    <meta name="author" content="ThemesEase">

    <!-- ========== FAVICON & APPLE ICONS ========== -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

    <!-- ========== MINIFIED VENDOR CSS ========== -->
    <link rel="stylesheet" href="{{asset('styles/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('styles/main.css')}}">

    <!-- ========== MODERNIZR ========== -->
    <script src="{{asset('scripts/vendor/modernizr.js')}}"></script>
</head>

<!-- ========== BODY ==========
.light-header: for light colored header
.dark-header: for dark colored header
==========  ========== -->
<body class="light-header animsition">

<!-- ========== NAVIGATION ========== -->
<nav class="navbar yamm navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> <!-- end navbar-toggle -->

            <a class="navbar-brand" href="index.html">
                <img src="img/logo_startclik.png" alt="SoftEase Logo"  class="light-logo" style="width: 190px;height:70px;margin-top: -10px">
                <img src="img/logo_startclik.png" alt="SoftEase Logo"  class="dark-logo" style="width: 190px;height:70px;margin-top: -10px">
               <!-- <img src="images/light-logo.svg" alt="SoftEase Logo" class="light-logo">
                <img src="images/dark-logo.svg" alt="SoftEase Logo" class="dark-logo">-->
            </a> <!-- end navbar-brand -->
        </div> <!-- end navbar-header -->

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="">
                    <a href="#" class="" >Cursos </a>
                </li>
                <li class="">
                    <a href="#" class="" >Contactenos</a>
                </li>

                @if (Route::has('login'))
                    @if (Auth::check())
                        <li class="active dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeIn">
                                <li>
                                    <div class="yamm-content">
                                        <div class="nav-col">
                                            <ul>
                                                <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                                                <li><a href="{{url('miperfil')}}">Mi perfil</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Cerrar Sesión
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>

                                                </li>
                                            </ul>
                                        </div> <!-- end nav-col -->
                                    </div> <!-- end yamm-content -->
                                </li>
                            </ul> <!-- end dropdown-menu -->
                        </li>
                    @else
                    <li class="nav-btn-wrap">
                        <span class="nav-btn"><a href="{{url('/login')}}" class="btn se-btn-black btn-rounded">Acceder</a></span>
                    </li>
                    <li class="nav-btn-wrap">
                        <span class="nav-btn"><a href="{{url('/register')}}" class="btn se-btn-black btn-rounded">Registrarse</a></span>
                    </li>
                    @endif
                @endif

            </ul> <!-- end navbar-nav -->

        </div> <!--end nav-collapse -->
    </div> <!-- end container -->
</nav>

<!-- ========== HEADER ========== -->
<header class="header main-header parallax-bg" data-parallax="scroll" data-image-src="images/bg-img-3.jpg" data-speed="0.4" >
    <div class="primary-trans-bg">
        <div class="container">
            <!-- For centering the content vertically -->
            <div class="outer">
                <div class="inner text-center">
                    <h1 class="white-color">Aprende con los mejores profesionales.</h1>
                    <h5 class="">Educación virtual avanzada.</h5>
                    <a href="{{url('/register')}}" class="btn se-btn-white btn-rounded">Registrarme</a>
                </div> <!-- end inner -->
            </div> <!-- end outer -->
        </div> <!-- end container -->
    </div> <!-- end primary-trans-bg -->
</header>

<!-- ========== OFFER SECTION ========== -->
<section class="se-section offer-section gray-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p> <!--<span class="badge">FREE</span> -->Este es el mejor lugar para mejor tus habilidades y adquirir nuevos conocimientos de una forma practica y rapida.Este es el mejor lugar para mejor tus habilidades y adquirir nuevos conocimientos de una forma práctica y rápida.<!--<a href="#" class="learn-more">Leer Más</a></p>-->
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

<!-- ========== FEATURES ========== -->
<section class="se-section features-section">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 se-feature">
                <i class="icon ion-ios-analytics-outline"></i>
                <h5>A tu ritmo</h5>
                <p>Capacítate con contenido de calidad al ritmo que más se adecue a tu horario, tú eliges cuando y donde.</p>
            </div> <!-- end se-feature -->

            <div class="col-md-3 col-sm-6 se-feature">
                <i class="icon ion-ios-paper-outline"></i>
                <h5>Contenido Actualizado</h5>
                <p>Encuentre en cada uno de nuestros cursos la información reciente referente a los temas tratados dentro de ellos.</p>
            </div> <!-- end se-feature -->

            <div class="col-md-3 col-sm-6 se-feature">
                <i class="icon ion-ios-lightbulb-outline"></i>
                <h5>Fácil de Usar</h5>
                <p>Nuestra interfaz centrada al usuario le permite navegar a través de los cursos y menús de una forma rápida y fácil.</p>
            </div> <!-- end se-feature -->

            <div class="col-md-3 col-sm-6 se-feature">
                <i class="icon ion-ios-speedometer-outline"></i>
                <h5>Capacítate Rápidamente</h5>
                <p>Gracias a nuestras metodologías y practicidad, puedes aprender de una forma rápida y segura.</p>
            </div> <!-- end se-feature -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

<!-- ========== SINGLE FEATURE SECTION ========== -->
<section class="se-section single-feature">

    <div class="col-md-6 zero-padding col-md-push-6 side-img">
        <img src="https://scontent-mia1-2.xx.fbcdn.net/v/t1.0-9/18033000_184416232077981_636685566532903009_n.png?oh=f5f9ae13a636ded58017445f235b356b&oe=59E1BA6D" alt="" class="img-responsive">
    </div> <!-- end side-img -->

    <div class="container feature-desc">
        <div class="row">
            <div class="col-md-5 feature-info">
                <h2>Educación de calidad y al alcance</h2>
                <p>Por medio de nuestra plataforma podrás encontrar variedad de cursos para mejorar tus habilidades laborales y personales, con contenidos de tendencia y actualizados.</p>
                <p>Gracias a su metodología puedes elegir el momento y lugar en el cual tú quieras mejorar y adquirir nuevos conocimientos, de una forma rápida, sencilla y eficaz</p>
                <a href="https://www.facebook.com/STARTCLIK/" target="_blank" class="btn se-btn btn-rounded">Visitános</a>
            </div>

        </div> <!-- end row -->
    </div> <!-- end container -->

</section>

<!-- ========== SINGLE FEATURE SECTION ========== -->
<section class="se-section single-feature">

    <div class="col-md-6 zero-padding side-img">
        <img src="https://scontent-mia1-2.xx.fbcdn.net/v/t1.0-9/983992_173319696520968_111344089795323219_n.jpg?oh=55df2a00be173c2065bcd350de64d5ea&oe=59E5A785" alt="" class="img-responsive">
    </div> <!-- end side-img -->

  <!--  <div class="container feature-desc">
        <div class="row">
            <div class="col-md-5 col-md-push-7 feature-info">
                <h2>Con Paso a la U</h2>
                <p>Junto a <b>Paso a la U</b> ofrecemos a toda la comunidad, conocimientos de gran calidad que generan y fortalecen, habilidades y destrezas identificadas como requisito en el proceso de estudio y de pruebas de admisión.</p>
                <p style="font-style: italic">"<b>PASO A LA U</b>, es una institución que prepara y brinda todos los servicios necesarios al estudiante para el buen desarrollo de ingreso a la educación formal superior; dándoles las herramientas suficientes y necesarias que crean en el estudiante la autonomía de conseguir el éxito en este ámbito competitivo."</p>
                <a href="http://pasoalau.org/" target="_blank" class="btn se-btn btn-rounded">Leer Más</a>
            </div>
        </div> <!-- end row ->
    </div> <!-- end container -->
</section>

<!-- ========== STEPS ========== -->
<section class="se-section se-steps" style="background-color: #666">
    <div class="container">
        <div class="row text-center">
            <h2 class="underline mtn" style="color: white !important;">Comienza con 3 sencillos pasos!</h2>
        </div> <!-- end row -->

        <div class="row">
            <div class="col-md-4 col-sm-4 one-step">
                <h4>Regístrate</h4>
                <p>Llena el formulario de registro para acceder a nuestra plataforma y todos sus cursos</p>
            </div>

            <div class="col-md-4 col-sm-4 one-step">
                <h4>Selecciona un Curso</h4>
                <p>Busca entre la variedad de cursos que tenemos y selecciona el más se adapte a tus necesidades.</p>
            </div>

            <div class="col-md-4 col-sm-4 one-step">
                <h4>Aprende Online</h4>
                <p>Accede a tu curso seleccionado y aborda cada uno de los temas y conceptos de una forma práctica y fácil.</p>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

<!--
<section class="se-section features-section parallax-bg" data-parallax="scroll" data-image-src="images/bg-img-3.jpg" data-speed="0.4">
    <div class="black-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 se-feature-style-2 mb60">
                    <div class="left">
                        <i class="icon ion-arrow-expand"></i>
                    </div>
                    <div class="right">
                        <h5>Fully Responsive</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 se-feature-style-2 mb60">
                    <div class="left">
                        <i class="icon ion-android-search"></i>
                    </div>
                    <div class="right">
                        <h5>Retina Ready</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 se-feature-style-2 mb60">
                    <div class="left">
                        <i class="icon ion-ios-bolt"></i>
                    </div>
                    <div class="right">
                        <h5>Lightning Fast</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 se-feature-style-2 mb60">
                    <div class="left">
                        <i class="icon ion-information"></i>
                    </div>
                    <div class="right">
                        <h5>Google Fonts</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 se-feature-style-2">
                    <div class="left">
                        <i class="icon ion-checkmark"></i>
                    </div>
                    <div class="right">
                        <h5>Light Weight</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 se-feature-style-2">
                    <div class="left">
                        <i class="icon ion-settings"></i>
                    </div>
                    <div class="right">
                        <h5>Easy To Edit</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> -->

<!-- ========== CTA SECTION ========== -->
<section class="se-section primary-bg">
    <div class="container">
        <div class="row text-center">
            <h3>Registrate Ahora!</h3>
            <p>Registrate para poder acceder a los cursos que tenemos para ti.</p>
            <a href="{{url('/register')}}" class="btn se-btn-black btn-rounded">Registrarse</a>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

<!-- ========== FOOTER ========== -->
<footer class="light-footer">
    <div class="container">
        <!--
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="images/dark-logo.svg" alt="" class="footer-logo">
            </div>

            <div class="col-md-2 col-sm-3 col-xs-6">
                <h6 class="mtn">HOME</h6>
                <ul>
                    <li><a href="#">Parallax Background</a></li>
                    <li><a href="#">Animated Background</a></li>
                    <li><a href="#">Solid Color</a></li>
                    <li><a href="#">Gradient Background</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-6">
                <h6 class="mtn">PAGES</h6>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Features</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-6">
                <h6 class="mtn">OTHER</h6>
                <ul>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0">
                <h6 class="mtn">SUBSCRIBE</h6>
                <div class="input-group">
                    <input type="email" class="form-control inp-rounded" placeholder="Enter your email id">
                    <span class="input-group-btn">
                                <button class="btn se-btn btn-rounded" type="button">Subscribe!</button>
                            </span>
                </div>
                <p class="text-center text-muted">We don't spam!</p>
            </div>
        </div>-->

        <div class="row footer-bottom">
            <div class="col-md-6">
                <p>Copyright &copy; StartClik. 2017. Todos los Derechos Reservados.</p>
            </div>

            <div class="col-md-6 text-right">
                <h6><a href="https://www.facebook.com/STARTCLIK/" target="_blank">FACEBOOK</a></h6>
               <!-- <h6><a href="#">TWITTER</a></h6>
                <h6><a href="#">LINKEDIN</a></h6>
                <h6><a href="#">GOOGLE PLUS</a></h6> -->
            </div>
        </div> <!-- end footer-bottom -->
    </div> <!-- end container -->
</footer>


<script src="{{asset('scripts/vendor.js')}}"></script>

<!-- ========== MINIFIED PLUGINS JS ========== -->
<script src="{{asset('scripts/plugins.js')}}"></script>

<script src="{{asset('scripts/main.js')}}"></script>
</body>

</html>
