<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Centro para la Competitividad y el Desarrollo</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>


<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3"><strong>Teléfono</strong> (01) 688-3302</a>
          <a class="text-color mr-3"><strong>Celular o WhatsApp</strong> 941707779</a>

        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <!--
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
            -->

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
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="{{asset('servicios')}}">Servicios</a>
            </li><!--
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
            </li>-->
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
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
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
                <h3>Ingresar</h3>
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
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Sobre Nosotros</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Somos una institución cuyo fin es promover el desarrollo sostenible del país en base al principio de la competitividad
        y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img class="img-fluid w-100 mb-4" src="images/images/img_workplace.jpg" alt="about image">
        <h2 class="section-title">Sobre nuestro trabajo</h2>
        <p>En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.
        También trabajamos lo relacionado con la atención de la agenda social, medioambiental y promoción de la inversión privada.</p>
        <p>El Centro para la Competitividad y el Desarrollo nos enfocamos en la prestación de servicios las cuales comprenden los siguientes:</p>
        <ul>
          <li type="disc">Servicio de Competitividad y Desarrollo</li>
          <li type="disc">Políticas y administración pública</li>
          <li type="disc">Estudios Económicos</li>
          <li type="disc">Inversión</li>
          <li type="disc">Leyes</li>
          <li type="disc">CCD Tech</li>
        </ul>
        <br>
        <p>Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- funfacts -->

<!--
<section class="section-sm bg-primary">
  <div class="container">
    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="60">0</h2>
          <h5 class="text-white">EMPLEADOS</h5>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="50">0</h2>
          <h5 class="text-white">PROYECTOS</h5>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="20">0</h2>
          <h5 class="text-white">CLIENTES</h5>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="3">0</h2>
          <h5 class="text-white">AÑOS</h5>
        </div>
      </div>
    </div>
  </div>
</section>
-->

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
          <h2 class="section-title">Un poco sobre nosotros</h2>
          <p>En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.</p>
          <p>Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title">Nuestra gente</h2>
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
            <p>Director del Centro para la Competitividad y el Desarrollo (CCD). Ha sido director de Electro Sur Este, presidente del Comité Pro Conectividad (energía y telecomunicaciones) de PROINVERSIÓN, consultor del Ministerio de Economía y Finanzas (MEF) y co-líder en proyectos de investigación en tributación y política fiscal para países de América Latina por el Banco Interamericano de Desarrollo (BID). Docente en los cursos Economía Pública y Recursos Naturales en la Universidad de San Martín de Porres (USMP), Mercado y Regulación de Petróleo de la Maestría en Regulación en la Universidad Peruana de Ciencias Aplicadas (UPC) y Econometría  en la Universidad Nacional de Ingeniería (UNI). Ingeniero economista por la UNI, con máster en tributación y política fiscal por la Universidad Autónoma de Madrid de España y la Universidad de Lima.</p>

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
            <p>Jefe de Proyectos del Centro para la Competitividad y el Desarrollo (CCD). MBA (ESAN) – Especialidad en Dirección Avanzada de Proyectos y Economista (UNMSM), con más de 30 años de experiencia profesional en los cargos de Jefe de Proyecto, Coordinador, Especialista e Investigador, en entidades públicas y privadas como Superintendencia del Mercado de Valores, Superintendencia de Banca, Seguros y AFP, ONPE, MEF, Municipalidades, Universidades, Ministerio de Cultura, Apoyo Consultoría S.A., entre otras. Posee experiencia en monitoreo y asistencia técnica en gestión de inversiones públicas dentro del marco del SNIP e Invierte.pe al gobierno nacional y los regionales y locales de proyectos de infraestructura de riego y productivos, fortalecimiento institucional, salud, saneamiento, educación universitaria y básica regular, patrimonio cultural y desarrollo urbano.</p>
            <!--
            <p> Jefe de Proyectos del Centro para la Competitividad y el Desarrollo (CCD). MBA (ESAN) – Especialidad en Dirección Avanzada de Proyectos y Economista (UNMSM), con más de 30 años de experiencia profesional en los cargos de Jefe de Proyecto, Coordinador, Especialista e Investigador, en entidades públicas y privadas como Superintendencia del Mercado de Valores, Superintendencia de Banca, Seguros y AFP, ONPE, MEF, Municipalidades, Universidades, Ministerio de Cultura, Apoyo Consultoría S.A., entre otras. Posee experiencia en monitoreo y asistencia técnica en gestión de inversiones públicas dentro del marco del SNIP e Invierte.pe al gobierno nacional y los regionales y locales de proyectos de infraestructura de riego y productivos, fortalecimiento institucional, salud, saneamiento, educación universitaria y básica regular, patrimonio cultural y desarrollo urbano; así como, monitoreo y asistencia de la ejecución de proyectos bajo el mecanismo “Obras x Impuestos” y Asociación Público Privadas; clasificación de riesgo de inversiones; regulación y supervisión de fondos institucionales (pensiones y colectivos) así como a sus administradoras. Docente de los Programas de Maestría relacionados con la gestión de proyectos de inversión en las universidades: Universidad Nacional de San Cristóbal de Huamanga UUNSCH), EUCIM Business School y la Universidad San Martín de Porres (USMP), Pontificia Universidad Católica del Perú (PUCP), Universidad Nacional Federico Villarreal (UNFV) y Universidad Nacional Mayor de San Marcos (UNMSM).</p>-->
            <!--
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>-->
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>

      <!-- teacher -->

      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_alvaro.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Álvaro Orozco</h4>
            </a>
            <p>Consultor del Centro para la Competitividad y el Desarrollo (CCD). Jefe de proyectos en competitividad y desarrollo del CCD. Experiencia en asesoría y asistencia técnica en competitividad de países, regiones y sectores productivos. Especialista en estudios económicos y análisis sectorial en proyectos de inversión para la mejora de la competitividad de las regiones. Ha elaborado indicadores de competitividad y desarrollo, así como la recopilación, procesamiento y la elaboración de información cuantitativa y de matriz de riesgos. Alta experiencia en la elaboración de líneas de base y planes de competitividad nacional, regional y sectorial. Ha trabajado como técnico estadístico en el Instituto Nacional de Estadística e Informática (INEI). Master of Liberal Arts in Finance, Harvard University y Economista, Universidad San Martín de Porres (USMP).</p>

          </div>
        </div>
        <br>
        <br>
        <br>
      </div>


      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_katherine.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Katherine Piedra</h4>
            </a>
            <p>Jefe de proyectos en competitividad y desarrollo y en políticas públicas del Centro para la Competitividad y el Desarrollo (CCD). Realiza actividades profesionales como asesora y asistencia técnica en políticas, planes y proyectos sobre competitividad nacional, regional y sectorial. Ha elaborado modelos fiscales de mediano plazo y políticas públicas para países de Centroamérica, por encargo del Banco Interamericano de Desarrollo (BID). Maestría en Gestión y Políticas Públicas de la Universidad Católica del Perú y profesional en Ciencias Económicas de la Universidad San Martín de Porres (USMP).</p>

          </div>
        </div>
        <br>
        <br>
        <br>
      </div>


      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_gene.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Gene Eduardo Olarte</h4>
            </a>
            <p>Consultor económico en promoción empresarial del Centro para la Competitividad y el Desarrollo (CCD). Desempeñó como funcionario de negocios y analista de resgos senior para la empresa de arrencamiento financiero Leasing Total SA. Cuenta con maestría en Economía en la mención de Finanzas y Mercado de Capitales de la Universidad Católica del Perú y profesional en Ciencias Económicas de la Universidad San Martín de Porres (USMP).</p>

          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
      <br>

      <!-- teacher -->

    </div>
  </div>
</section>
  <!-- /teachers -->

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
            <li class="mb-3"><a class="text-color letra" href="{{asset('nosotros')}}">Nosotros</a></li>
            <li class="mb-3"><a class="text-color letra" href="{{asset('servicios')}}">Servicios</a></li>
            <li class="mb-3"><a class="text-color letra" href="{{asset('experiencia')}}">Experiencia</a></li>
            <!--
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>-->
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">INTRANET</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="{{asset('miespacio')}}">Mi Espacio</a></li>

          </ul>
        </div>
        <!-- support -->

        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">CONTACTO</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="{{asset('contacto')}}">Contáctanos</a></li>
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
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
