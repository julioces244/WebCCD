<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Educenter</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{asset('plugins/venobox/venobox.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

</head>
<body>
<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>Teléfono</strong> (01) 688-3302</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <!--
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
            -->
            <!--
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">Registrarse</a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>



  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="{{asset('inicio')}}"><img src="images/banner/logoccd.png" alt="logo" height="50px" width="80%"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('inicio')}}">Inicio</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="{{asset('nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="{{asset('servicios')}}">Servicios</a>
            </li><!--
            <li class="nav-item @@events">
              <a class="nav-link" href="events.html">Consultores</a>
            </li>



            <li class="nav-item @@blog">
              <a class="nav-link" href="blog.html">BLOG</a>
            </li>


            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="teacher.html">Teacher</a>
                <a class="dropdown-item" href="teacher-single.html">Teacher Single</a>
                <a class="dropdown-item" href="notice.html">Notice</a>
                <a class="dropdown-item" href="notice-single.html">Notice Details</a>
                <a class="dropdown-item" href="research.html">Research</a>
                <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                <a class="dropdown-item" href="course-single.html">Course Details</a>
                <a class="dropdown-item" href="event-single.html">Event Details</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
            -->
            <li class="nav-item @@courses">
              <a class="nav-link" href="{{asset('experiencia')}}">Experiencia</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{asset('miespacio')}}">Mi espacio</a>
            </li>

            <li class="nav-item @@contact">
              <a class="nav-link" href="{{asset('contacto')}}">Contacto</a>
            </li>
            <li class="nav-item"><a class="nav-link">|</a></li>

            <li class="nav-item"><a class="nav-link">ES</a></li>
            <li class="nav-item"><a class="nav-link">EN</a></li>




          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>


<!-- SECTION-->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Plataforma Virtual</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="intranet" class="row" method="post">
                  <!--
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Teléfono">
                    </div>-->
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="email" placeholder="Usuario">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="password" placeholder="Contraseña">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Registro</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupInstitute" name="signupInstitute" placeholder="Institución">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupRuc" name="signupRuc" placeholder="RUC">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Teléfono fijo">
                        </div>
                        <div class="col-12">
                            <input type="tel" class="form-control mb-3" id="signupMobile" name="signupMobile" placeholder="Celular">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupContact" name="signupContact" placeholder="Contacto">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Correo">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupUser" name="signupUser" placeholder="Usuario">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Contraseña">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupRepeatPassword" name="signupRepeatPassword" placeholder="Repetir Contraseña">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!-- hero slider -->
<div class="hero-slider">
      <!-- slider item -->
    <div class="hero-slider-item">
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
    <div class="container">

        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Centro para la competitividad y el desarrollo</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">El centro para la Competitividad y el Desarrollo (CCD) es una institución cuyo fin es promover el desarrollo sostenible
            del país en base al principio de la competitividad y de esta forma mejorar la calidad de vida de los ciudadanos.</p>

            <!--
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>-->

            <a href="{{asset('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Ver más</a>

          </div>
        </div>
      </div>
    </section>
    </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <section class="hero-section overlay bg-cover" data-background="{{asset('images/banner/banner-4.jpg')}}">
        <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Fomentando el desarrollo en los lugares más alejados</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">El centro para la Competitividad y el Desarrollo (CCD) es una institución cuyo fin es promover el desarrollo sostenible
            del país en base al principio de la competitividad y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
            <a href="{{asset('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Ver más</a>
          </div>
        </div>
      </div>
    </section>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <section class="hero-section overlay bg-cover" data-background="images/banner/banner-5.jpg">
        <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Gestionando proyectos de desarrollo efectivamente</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">El centro para la Competitividad y el Desarrollo (CCD) es una institución cuyo fin es promover el desarrollo sostenible
            del país en base al principio de la competitividad y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
            <a href="{{asset('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Ver más</a>
          </div>
        </div>
      </div>
    </section>
      </div>

      <div class="hero-slider-item">
        <section class="hero-section overlay bg-cover" data-background="images/banner/banner-3.jpg">
        <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Llevando a cabo estudios económicos en el país</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">El centro para la Competitividad y el Desarrollo (CCD) es una institución cuyo fin es promover el desarrollo sostenible
            del país en base al principio de la competitividad y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
            <a href="{{asset('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Ver más</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  </section>
  </div>

<!-- /hero slider -->

<!-- banner-feature -->
<!--
<section class="bg-gray">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/about/person.png" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Scholorship News</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Notice Board</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Achievements</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Admission Now</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">Nosotros</h2>
        <p align="justify-content-center">En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.
        También trabajamos lo relacionado con la atención de la agenda social, medioambiental y promoción de la inversión privada.
        Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.
          </p>
        <p>Contáctenos en Miraflores, atendemos a organismos del estado; como gobiernos regionales, locales, de cooperación internacional, entre otros.</p>
        <a href="{{asset('nosotros')}}" class="btn btn-primary-outline">Saber más</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/about-us3.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Nuestros Servicios</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="{{asset('servicios')}}" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">Ver todos</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->

  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/services/srv_competitividad.jpg" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="{{asset('servicios/servicio_competitividad')}}">
          <h4 class="card-title">Desarrollo y Competitividad</h4>
        </a>
        <p class="card-text mb-4"> Alcance comunal, distrital, provincial y regional. Competitividad y planes de desarrollo. Instituciones
         Públicas y negocios así como sectores económicos.</p>
        <a href="{{asset('servicios/servicio_competitividad')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>


  <!-- course item -->

  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/services/srv_politicas.jpg" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="{{asset('servicios/gestion_politica')}}">
          <h4 class="card-title">Política y Gestión Pública</h4>
        </a>
        <p class="card-text mb-4"> Políticas públicas, estrategias y acciones sustentables en educación, salud e infraestructura. Sustentabilidad
         y finanzas públicas.</p>
        <a href="{{asset('servicios/gestion_politica')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>

  <!-- CAMBIAR IMAGEN TAMAÑO IGUAL PARA TODOS LOS ITEMSS -->

  <!-- course item -->

  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/services/srv_estudios.jpg" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        -->
        <a href="{{asset('servicios/estudios_economicos')}}">
          <h4 class="card-title">Estudios Económicos</h4>
        </a>
        <p class="card-text mb-4"> Promover el desarrollo sostenible del país en base al principio de la competitividad y de esta forma mejorar
        la calidad de vida de los ciudadanos.</p>
        <br>
        <a href="{{asset('servicios/estudios_economicos')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>

  <!-- course item -->
   <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/services/srv_inversion.jpg" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        -->
        <a href="{{asset('servicios/inversion')}}">
          <h4 class="card-title">Inversiones</h4>
        </a>
        <p class="card-text mb-4"> Público y privados, trabajos por impuestos, Apps. Ips e Inverite.pe. Así como financiamiento e instrumentos
        de innovación.</p>
        <a href="{{asset('servicios/inversion')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/services/srv_leyes3.jpg" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        -->
        <a href="{{asset('servicios/legal')}}">
          <h4 class="card-title">Legal</h4>
        </a>
        <p class="card-text mb-4"> Administración política y pública, regulación, inversión y fondos sociales.</p>
        <br>
        <br>
        <br>

        <a href="{{asset('servicios/legal')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>


  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/services/srv_tech.jpg" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        -->
        <a href="{{asset('servicios/tech')}}">
          <h4 class="card-title">CCD Tech</h4>
        </a>
        <p class="card-text mb-4"> Colocar descripción</p>
        <br>
        <br>
        <br>

        <a href="{{asset('servicios/tech')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <!--
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-6.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        <a href="course-single.html">
          <h4 class="card-title">Art Design</h4>
        </a>
        <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>-->
</div>
<!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0">Expertos en el desarrollo y competitividad</h6>
        <h2 class="section-title text-white">Únete a nosotros y vive la experiencia</h2>
        <a href="{{asset('contacto')}}" class="btn btn-secondary">Contáctanos!</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/office-2.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">¿Quiénes somos?</h2>
          <p>En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.
          </p>
          <p>Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->



<!-- teachers esta parte conforma el equipo de trabajo de cdd -->
<!-- -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title">Nuestro equipo</h2>
      </div>
      <!-- teacher -->

      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/rudy_laguna.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Rudy Laguna</h4>
            </a>
            <p>Ex superintendente Nacional de la SUNAT y se ha desempeñado como director General de la oficina Jurídica del
            Ministerio de Economía y Finanzas. Miembro del directorio de la Superintendencia del Mercado de Valores (ex Censase)
            y negociador de la sección de servicios financieros en el TLC con los Estados Unidos.</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/viviana_sanchez.jpg" alt="teacher" height=265px>
          <div class="card-body">
            <a>
              <h4 class="card-title">Viviana Sánchez</h4>
            </a>
            <p>Abogada de la Pontificia Universidad Católica del Perú y Máster (LLM) de Georgetown University. Fellow del Institute of International Economic Law (IIEL) Washington D.C. Post Grado en las Universidad de Salamanca España, Universidad Adolfo Ibañez (Chile), UPC, ESAN, GERENS, International Law Institute Washington DC. Becaria Fullbright y PEO Scholarship. Ejerció docencia en la UPC y en la Universidad de Lima. Trabajó en el Ministerio de Economía y Finanzas, Instituto Nacional de Defensa de de la Competencia y de la Protección de la Propiedad Intelectual y la Universidad San Martín Porres. Realizó su SECIGRA en el Ministerio de Relaciones Exteriores.  Actualmente es abogada y directora de empresas privadas y asociaciones civiles. Estudiante de intercambio con AFS Finlandia Perú y miembro de la Asociación Civil ius et veritas. </p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/sergio_villegas.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Sergio Villegas</h4>
            </a>
            <p>Jefe de Proyectos del Centro para la Competitividad y el Desarrollo (CCD). MBA (ESAN) – Especialidad en Dirección Avanzada de Proyectos y Economista (UNMSM), con más de 30 años de experiencia profesional en los cargos de Jefe de Proyecto, Coordinador, Especialista e Investigador, en entidades públicas y privadas como Superintendencia del Mercado de Valores, Superintendencia de Banca, Seguros y AFP, ONPE, MEF, Municipalidades, Universidades, Ministerio de Cultura, Apoyo Consultoría S.A., entre otras. Posee experiencia en monitoreo y asistencia técnica en gestión de inversiones públicas dentro del marco del SNIP e Invierte.pe al gobierno nacional y los regionales y locales de proyectos de infraestructura de riego y productivos, fortalecimiento institucional, salud, saneamiento, educación universitaria y básica regular, patrimonio cultural y desarrollo urbano; así como, monitoreo y asistencia de la ejecución de proyectos bajo el mecanismo “Obras x Impuestos” y Asociación Público Privadas; clasificación de riesgo de inversiones; regulación y supervisión de fondos institucionales (pensiones y colectivos) así como a sus administradoras. Docente de los Programas de Maestría relacionados con la gestión de proyectos de inversión en las universidades: Universidad Nacional de San Cristóbal de Huamanga UUNSCH), EUCIM Business School y la Universidad San Martín de Porres (USMP), Pontificia Universidad Católica del Perú (PUCP), Universidad Nacional Federico Villarreal (UNFV) y Universidad Nacional Mayor de San Marcos (UNMSM).</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>

      <!-- teacher -->
      <br>

      <!-- teacher -->

    </div>
  </div>
</section>

<!-- events -->

<!-- -->

<!-- /events -->
<!-- /teachers -->

<!-- blog -->
<!--
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Latest News</h2>
      </div>
    </div>
    <div class="row justify-content-center">
 blog post

  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
      <div class="card-body">
       post meta
        <ul class="list-inline mb-3">
         post date
          <li class="list-inline-item mr-3 ml-0">August 28, 2019</li>
          author
          <li class="list-inline-item mr-3 ml-0">By Jonathon</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">The Expenses You Are Thinking.</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
  blog post
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-2.jpg" alt="Post thumb">
      <div class="card-body">
       post meta
        <ul class="list-inline mb-3">
          post date
          <li class="list-inline-item mr-3 ml-0">August 13, 2019</li>
           author
          <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">Tips to Succeed in an Online Course</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
   blog post
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
      <div class="card-body">
         post meta
        <ul class="list-inline mb-3">
           post date
          <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
           author
          <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">Orientation Program for the new students</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
</div>
  </div>
</section>-->
<!-- /blog -->

<!-- footer -->
<footer>
  <!-- newsletter -->
  <!--
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  -->
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <!--
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/banner/logoccd.png" alt="logo"></a>-->
          <ul class="list-unstyled">
            <li class="mb-2 letra">Av. del Pinar 124, Urb. Chacarilla del Estanque, SANTIAGO DE SURCO, LIMA (Lima)</li>
            <li class="mb-2 letra"> (01) 688-3302</li>
            <li class="mb-2 letra">fatima.cabrera@ccdcompetitividad.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">CENTRO</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="about.html">Nosotros</a></li>
            <li class="mb-3"><a class="text-color letra" href="courses.html">Servicios</a></li>
            <li class="mb-3"><a class="text-color letra" href="contact.html">Contacto</a></li>
            <!--
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>-->
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="courses.html">Courses</a></li>
            <li class="mb-3"><a class="text-color letra" href="event.html">Events</a></li>
            <li class="mb-3"><a class="text-color letra" href="gallary.html">Gallary</a></li>
            <li class="mb-3"><a class="text-color letra" href="faqs.html">FAQs</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">SUPPORT</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="#">Forums</a></li>
            <li class="mb-3"><a class="text-color letra" href="#">Documentation</a></li>
            <li class="mb-3"><a class="text-color letra" href="#">Language</a></li>
            <li class="mb-3"><a class="text-color letra" href="#">Release Status</a></li>
          </ul>
        </div>
        <!-- support -->
        <!--
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">LearnPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">WooCommerce</a></li>
            <li class="mb-3"><a class="text-color" href="#">bbPress</a></li>
          </ul>
        </div>-->
      </div>
    </div>
  </div>
  <!-- copyright -->

</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{asset('plugins/aos/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{asset('plugins/venobox/venobox.min.js')}}"></script>
<!-- mixitup filter -->
<script src="{{asset('plugins/mixitup/mixitup.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{asset('plugins/google-map/gmap.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
