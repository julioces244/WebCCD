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
                      <a href="#">
                          <i class="fas fa-bars"></i><span> Inicio </span>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fas fa-pencil-alt"></i><span> Documentos </span>
                      </a>
                  </li>
                  <li>
                      <a href="/">
                          <img src="{{asset('../images/logos/ic_logout.png')}}" style="width:25px; height:25px; margin-right:5px;"></i><span>Salir</span>
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
                <p class="o" style="margin-top:10px;"><a class="unico" href="../../intranet">Año</a></p>
                <p class="o" style="margin-top:10px; margin-left: 100px;"><a class="unico" href="">Proyectos</a></p>
                  <div class="row justify-content-center justify-content-md-center">
                @foreach($projects as $project)

                <div class="card" style="width: 20rem; margin: 10px; margin-top:50px;">
                  <img style="display: block; margin-left: auto; margin-right: auto; width: 100%;" src="../images/logos/{{$project->image}}" class="card-img-top" alt="...">
                  <div class="card-body" style="padding:20px;">
                    <h5 class="card-title">{{$project->name}}</h5>
                    <p class="card-text">{{$project->description}}</p>
                    <a href="/intranet/{{$project->year->name}}/{{$project->abbreviation}}" class="btn btn-primary">Entrar</a>
                  </div>
                </div>

              @endforeach
            </div>

              </div>
          </div>

      </div>
@endsection
