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



  @yield('content')




<footer>

    <div class="footer bg-footer section border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">

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
              <li class="mb-3"><a class="text-color letra" href="#">Release Status</a></li>
            </ul>
          </div>
          <!-- support
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
  <script src="plugins/google-map/gmap.js"></script>

  <!-- Main Script -->
  <script src="{{asset('js/script.js')}}"></script>

  </body>
  </html>