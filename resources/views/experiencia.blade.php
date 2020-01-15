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
  <link rel="stylesheet" href="{{asset('css/imagetext.css')}}">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <style>
        .dot {
      height: 20px;
      width: 20px;
      border-radius: 50%;
      display: inline-block;
      }
  </style>

</head>

<body>


<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>Teléfono</strong>241-4273</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">

          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="{{asset('inicio')}}"><img class="imgnav" src="images/banner/logoccd.png" alt="logo" height="50px" width="80%"></a>
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
            <li class="nav-item @@courses">
              <a class="nav-link" href="{{asset('servicios')}}">Servicios</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('experiencia')}}">Experiencia</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{asset('miespacio')}}">Mi espacio</a>
            </li>

            <li class="nav-item @@contact">
              <a class="nav-link" href="{{asset('contacto')}}">Contacto</a>
            </li>
            <li class=""><a class="nav-link">|</a></li>

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
                <h3>Registrarse</h3>
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
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{asset('experiencia')}}">Experiencia</a></li>
          <!-- -->
          <li class="list-inline-item text-white h3 font-secondary nasted">Nacional e Internacional</li>
        </ul>
        <!--
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>-->
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- section -->
<section class="section-sm">
  <div class="container">

    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>Experiencia Nacional</h2>
      </div>

      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>


    <div class="row">
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">

                <figure class="snip0015">
                  <img src="{{asset('images/images/img_mapnac2.jpg')}}" class="img-fluid w-100">
                	<figcaption>
                    <h2 style="color:#890524; font-size:30px">"Centro Para la Competitividad y el Desarrollo"</h2>
                		<h2><span></span></h2>
                		<p style="color:#fff; font-size:30px">"Los mejores profesionales se encuentran aquí."</p>
                		<a></a>
                	</figcaption>
                </figure>



              </div>
              <div class="col-3">

                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><span class="dot" style="background-color: #890524;"></span></th>
      <th scope="col">Experiencia de profesionales</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #7A2599;"></span></th>
      <td>Competitividad y Desarrollo</td>

    </tr>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #C00000;"></span></th>
      <td>Política y Gestión Pública</td>

    </tr>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #00B050;"></span></th>
      <td>Estudios Económicos</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #E46C0A;"></span></th>
      <td>Inversiones</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #0070C0;"></span></th>
      <td>Legal</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #31859C;"></span></th>
      <td>CCD Tech</td>

    </tr>
  </tbody>
</table>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4">
        <h3>Sobre el servicio</h3>
        <p>Poner algo referido a la experiencia nacional.</p>
      </div><!--
      <div class="col-12 mb-4">
        <h3 class="mb-3">Elaboración de planes de competitividad</h3>
        <div class="col-12 px-0">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-styled">
                <li>Estudio de Competitividad de la Minería en el Perú.</li>
                <li>Plan de Competitividad de Moquegua, Loreto, Piura (Sechura) y Apurímac.</li>

              </ul>
            </div>

            <div class="col-md-6">
              <ul class="list-styled">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>-->

      <!--
      <div class="col-12 mb-4">
        <h3 class="mb-3">Obras por impuestos: Asistencia técnica especializada</h3>
        <ul class="list-styled">
          <li>Gobierno regional y municipios de Ancash por S./336 millones (edificaciones, saneamiento, salud y vial)</li>
          <li>Provincia de Mariscal Nieto, Moquegua(instalación del sistema de agua potable y alcantarillado).</li>
          <li>Gobierno regional de Moquegua y municipalidades de la región.</li>
          <li>Estructuración de un mecanismo para financiar proyectos de inversión pública en la región Apurímac.</li>
        </ul>
      </div>-->



    </div>
  </div>
</section>


<!-- section -->
<section class="section-sm">
  <div class="container">

    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>Experiencia Internacional</h2>
      </div>

      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 mb-4">

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">

                <figure class="snip0015">
                  <img src="{{asset('images/images/img_mapinter2.jpg')}}" class="img-fluid w-100">
                	<figcaption>
                    <h2 style="color:#890524; font-size:30px">"Centro Para la Competitividad y el Desarrollo"</h2>
                		<h2><span></span></h2>
                		<p style="color:#fff; font-size:30px">"Los mejores profesionales se encuentran aquí."</p>
                		<a href="#"></a>
                	</figcaption>
                </figure>



              </div>
              <div class="col-3">

                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><span class="dot" style="background-color: #890524;"></span></th>
      <th scope="col">Experiencia de profesionales</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #7A2599;"></span></th>
      <td>Competitividad y Desarrollo</td>

    </tr>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #C00000;"></span></th>
      <td>Política y Gestión Pública</td>

    </tr>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #00B050;"></span></th>
      <td>Estudios Económicos</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #E46C0A;"></span></th>
      <td>Inversiones</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #0070C0;"></span></th>
      <td>Legal</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #31859C;"></span></th>
      <td>CCD Tech</td>

    </tr>
  </tbody>
</table>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4">
        <h3>Sobre el servicio</h3>
        <p>Poner algo referido a la experiencia internacional.</p>
      </div>

    </div>
  </div>
</section>

<footer>

  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <!--
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>-->
          <ul class="list-unstyled">
            <li class="mb-2 letra">Av. del Pinar 124, Urb. Chacarilla del Estanque, SANTIAGO DE SURCO, LIMA (Lima)</li>
            <li class="mb-2 letra"> (01) 688-3302</li>
            <li class="mb-2 letra">fatima.cabrera@ccdcompetitividad.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">COMPANY</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="about.html">Nosotros</a></li>
            <li class="mb-3"><a class="text-color letra" href="courses.html">Servicios</a></li>
            <li class="mb-3"><a class="text-color letra" href="contact.html">Contacto</a></li>
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
            <li class="mb-3"><a class="text-color letra letra" href="#">Release Status</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="#">WordPress</a></li>
            <li class="mb-3"><a class="text-color letra" href="#">LearnPress</a></li>
            <li class="mb-3"><a class="text-color letra" href="#">WooCommerce</a></li>
            <li class="mb-3"><a class="text-color letra" href="#">bbPress</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

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
