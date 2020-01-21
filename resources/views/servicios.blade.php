@extends('.layouts/mainlayout')

@section('content')


<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>Teléfono</strong> (01) 688-3302</a>
          <a class="text-color mr-3" href="callto:+443003030266"><strong>Celular o WhatsApp</strong> 941707779</a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <!--
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
          -->
          <!-- -->
          <!--
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">Ingresar</a></li>-->
            <!--
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">Registrrarse</a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="{{asset('inicio')}}"><img src="images/banner/logoccd.png" alt="logo" height="50px" width="90%"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@home">
              <a class="nav-link" href="{{asset('inicio')}}">Inicio</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="{{asset('nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('servicios')}}">Servicios</a>
            </li>
            <!--
            <li class="nav-item @@events">
              <a class="nav-link" href="events.html">EVENTS</a>
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
<!-- /header -->
<!-- Modal -->
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
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Usuario">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Contraseña">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="courses.html">Nuestros Servicios</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
        <p class="text-lighten">Nuestro servicios.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_competitividad.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="course-single.html">
          <h4 class="card-title">Competitividad y Desarrollo</h4>
        </a>
        <p class="card-text mb-4">  Alcance comunal, distrital, provincial y regional. Competitividad y planes de desarrollo. Instituciones
         Públicas y negocios así como sectores económicos</p>
        <a href="{{asset('servicios/competitividad_desarrollo')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_politicas.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->

          <h4 class="card-title">Gestión pública y política</h4>

        <p class="card-text mb-4">  Políticas públicas, estrategias y acciones sustentables en educación, salud e infraestructura. Sustentabilidad
         y finanzas públicas.</p>
        <a href="{{asset('servicios/gestion_politica')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_estudios.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="service_estudios.html">
          <h4 class="card-title">Estudios Económicos</h4>
        </a>
        <p class="card-text mb-4"> Promover el desarrollo sostenible del país en base al principio de la competitividad y de esta forma mejorar
        la calidad de vida de los ciudadanos.</p>
        <a href="{{asset('servicios/estudios_economicos')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_inversion.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="service_inversiones.html">
          <h4 class="card-title">Inversión</h4>
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
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_leyes3.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="service_legal.html">
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
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_tech.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="service_legal.html">
          <h4 class="card-title">CCD Tech</h4>
        </a>
        <p class="card-text mb-4"> Página web para la competitividad y el desarrollo, aplicativos android e iOS para gestión y desarrollo y plataformas virtuales.</p>
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
  </div>
</div>
 /course list
     course list
<div class="row justify-content-center">
   course item
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-1.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        <a href="course-single.html">
          <h4 class="card-title">Photography</h4>
        </a>
        <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
   course item
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-2.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        <a href="course-single.html">
          <h4 class="card-title">Programming</h4>
        </a>
        <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
   course item
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-3.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        <a href="course-single.html">
          <h4 class="card-title">Lifestyle Archives</h4>
        </a>
        <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
   course item
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-4.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        <a href="course-single.html">
          <h4 class="card-title">Complete Freelancing</h4>
        </a>
        <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
   course item
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-5.jpg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>
        <a href="course-single.html">
          <h4 class="card-title">Branding Design</h4>
        </a>
        <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
   course item
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
  </div>
</div>
-->
<!-- /course list -->
  </div>
</section>
<!-- /courses -->

<!-- footer -->
@endsection
