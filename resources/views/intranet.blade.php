@extends('.layouts/intranetlayout')

@section('content')

  <div id="my-sidebar-context" class="widget-sidebar-context">
      <header id="this-header" class="navbar justify-content-start align-items-center  page-header">




          <a href="#" class="navbar-toggler widget-sidebar-toggler">
              <i class="fas fa-bars"></i>
          </a>

          <center>
            <a class="navbar-brand" href="#">
              <img src="{{asset('images/banner/logoccd.png')}}" alt="" width="300px" height= relative>
            </a>
          </center>



      </header>
      <div class="page-body">
          <nav class="widget-sidebar">
              <ul class="list-unstyled mt-2">
                  <li class="active">
                      <a href="intranet">
                          <img src="../images/logos/ic_home.png" style="width:20px; height:20px; margin-right:5px;"><span> Inicio </span>
                      </a>
                  </li>
                  <li class="active">
                      <a href="intranet">
                          <i class="fas fa-pencil-alt"></i><span> Documentos </span>
                      </a>
                  </li>
                  <li class="active">
                      <a href="./">
                          <img src="../images/logos/ic_logout.png" style="width:25px; height:25px; margin-right:5px;"></i><span>Salir</span>
                      </a>
                  </li>


                  <!--
                  <li>
                      <a href="#sidebar-link-mycomponents" data-toggle="collapse"
                         aria-expanded="true"
                         class="dropdown-toggle">
                          <i class="fas fa-shapes"></i><span> Proyectos </span>
                      </a>
                      <ul class="collapse list-unstyled show"
                          id="sidebar-link-mycomponents">
                          <li>
                              <a href="#">Alerts</a>
                          </li>
                      </ul>
                  </li>-->
              </ul>
          </nav>


          <div class="page-main">
            <center><div class="container-fluid">
                <div class="row">
                    <div class="col">
                      <br>
                        <h3 style="color:#fff; margin-bottom:30px;">Documentación</h3>

                    </div>
                </div>
            </div></center>

              <div class="container">

                <p class="o"><a class="unico" href="">Año</a></p>

                @foreach($years as $year)
              <form class="" action="/intranet/{{$year->idYear}}" method="post">

                <div class="card" style="color:#890524; margin-top:50px;">
                  <div class="card-header" style="background-color: black;">
                    {{$year->name}}
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <p>Proyectos correspondientes al año {{$year->name}}</p>
                      <a href="/intranet/{{$year->name}}" class="btn btn-outline-info" value="">Entrar</a>
                    </blockquote>
                  </div>
                </div>

              </form>
              @endforeach

              </div>
          </div>

      </div>
@endsection
