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
                      <a href="../">
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
                        <h3 style="color:#fff;">Documentación</h3>
                            <img src="../images/logos/ic_home.png" alt="">
                    </div>
                </div>
            </div></center>


              <div class="container">

                <p class="o" style="margin-top:10px;"><a class="unico" href="./">Año</a></p>
                <p class="o" style="margin-top:10px; margin-left: 100px;"><a class="unico" href="./">Proyectos</a></p>
                <p class="o" style="margin-top:10px; margin-left: 210px;"><a class="unico" href="">Documentos</a></p>

                  <div class="row justify-content-center justify-content-md-center">



                <table class="table table-dark" style="margin: 10px; margin-top:50px;">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Archivo</th>
                      <th scope="col">Subido</th>
                      <th scope="col">Descargar</th>
                    </tr>
                  </thead>
                    @foreach($documents as $document)
                  <tbody>
                    <tr>
                      <th>{{$document->idDocument}}</th>
                      <td>{{$document->name}}ss</td>
                      <td>{{$document->file}}</td>
                      <td>ss</td>
                      <td>
                        <a href="#" download>
                          <button type="submit" name="button" class="myButton"></button>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>


            </div>

              </div>
          </div>

      </div>
@endsection
