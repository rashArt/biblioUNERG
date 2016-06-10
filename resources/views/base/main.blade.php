<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Biblioteca | @yield('title')</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="" />

  <!-- Bootstrap Core CSS -->
  <link href="{{asset ('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="{{asset ('css/style.css')}}" rel='stylesheet' type='text/css' />
  <!-- Graph CSS -->
  <link href="{{asset ('css/font-awesome.css')}}" rel="stylesheet">
  <!-- jQuery -->
  <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
  <!-- lined-icons -->
  <link rel="stylesheet" href="{{asset ('css/icon-font.min.css')}}" type='text/css' />
  @yield('css')
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-2.1.2.js"></script>
  {{--<script src="{{asset ('js/jquery-1.10.2.min.js')}}"></script>--}}

</head>
<body>
  <div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
      <div class="inner-content">
        <!-- header-starts -->
        <div class="header-section">
          <!--menu-right-->
          <div class="top_menu">
            <!--/profile_details-->
            <div class="profile_details_left">
              <ul class="nofitications-dropdown">
                <li class="dropdown note dra-down">
                  <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                    <span>Italy</span>
                      <ul class="dropdown">
                        <li><a class="deutsch">France</a></li>
                        <li><a class="english"> Italy</a></li>
                        <li><a class="espana">Brazil</a></li>
                        <li><a class="russian">Usa</a></li>
                      </ul>
                    </div>
                    <script type="text/javascript">

                      function DropDown(el) {
                          this.dd = el;
                          this.placeholder = this.dd.children('span');
                          this.opts = this.dd.find('ul.dropdown > li');
                          this.val = '';
                          this.index = -1;
                          this.initEvents();
                      }
                      DropDown.prototype = {
                          initEvents : function() {
                              var obj = this;

                              obj.dd.on('click', function(event){
                                  $(this).toggleClass('active');
                                  return false;
                              });

                              obj.opts.on('click',function(){
                                  var opt = $(this);
                                  obj.val = opt.text();
                                  obj.index = opt.index();
                                  obj.placeholder.text(obj.val);
                              });
                          },
                          getValue : function() {
                              return this.val;
                          },
                          getIndex : function() {
                              return this.index;
                          }
                      }

                      $(function() {

                          var dd = new DropDown( $('#dd') );

                          $(document).click(function() {
                              // all dropdowns
                              $('.wrapper-dropdown-3').removeClass('active');
                          });

                      });
                    </script>
                </li>

                <li class="dropdown note">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>
                  <ul class="dropdown-menu two first">
                    <li>
                        <div class="notification_header">
                            <h3>You have 3 new messages  </h3> 
                        </div>
                    </li>
                    <li><a href="#">
                       <div class="user_img"><img src="images/1.jpg" alt=""></div>
                       <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                       <div class="clearfix"></div> 
                     </a></li>
                     <li class="odd"><a href="#">
                        <div class="user_img"><img src="images/in.jpg" alt=""></div>
                       <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <p><span>1 hour ago</span></p>
                        </div>
                      <div class="clearfix"></div>  
                     </a></li>
                    <li><a href="#">
                       <div class="user_img"><img src="images/in1.jpg" alt=""></div>
                       <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <p><span>1 hour ago</span></p>
                        </div>
                       <div class="clearfix"></div> 
                    </a></li>
                    <li>
                        <div class="notification_bottom">
                            <a href="#">See all messages</a>
                        </div> 
                    </li>
                  </ul>
                </li>

                <li class="dropdown note">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

                  <ul class="dropdown-menu two">
                      <li>
                          <div class="notification_header">
                              <h3>You have 5 new notification</h3>
                          </div>
                      </li>
                      <li><a href="#">
                          <div class="user_img"><img src="images/in.jpg" alt=""></div>
                         <div class="notification_desc">
                          <p>Lorem ipsum dolor sit amet</p>
                          <p><span>1 hour ago</span></p>
                          </div>
                        <div class="clearfix"></div>  
                       </a></li>
                       <li class="odd"><a href="#">
                          <div class="user_img"><img src="images/in5.jpg" alt=""></div>
                         <div class="notification_desc">
                          <p>Lorem ipsum dolor sit amet </p>
                          <p><span>1 hour ago</span></p>
                          </div>
                         <div class="clearfix"></div> 
                       </a></li>
                       <li><a href="#">
                          <div class="user_img"><img src="images/in8.jpg" alt=""></div>
                         <div class="notification_desc">
                          <p>Lorem ipsum dolor sit amet </p>
                          <p><span>1 hour ago</span></p>
                          </div>
                         <div class="clearfix"></div> 
                       </a></li>
                       <li>
                          <div class="notification_bottom">
                              <a href="#">See all notification</a>
                          </div> 
                      </li>
                  </ul>
                </li>
                <li class="dropdown note">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
                  <ul class="dropdown-menu two">
                    <li>
                      <div class="notification_header">
                        <h3>You have 9 pending task</h3>
                      </div>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <span class="task-desc">Database update</span><span class="percentage">40%</span>
                          <div class="clearfix"></div>
                        </div>
                        <div class="progress progress-striped active">
                          <div class="bar yellow" style="width:40%;"></div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <div class="clearfix"></div>
              </ul>
            </div>
            <div class="clearfix"></div>
            <!--//profile_details-->
          </div> 
          <!--//menu-right-->
          <div class="clearfix"></div>
        </div>
        <!-- //header-ends -->

        @yield('content')


        <!--footer section start-->
        <footer>
          <p>UNERG | Trabajo de Grado 2016 | Desarrollado por <a href="#" target="_blank">Jonathan Pacheco</a></p>
        </footer>
        <!--footer section end-->
      </div>
    </div>
    <!--//content-inner-->
    <!--/sidebar-menu-->
    <div class="sidebar-menu">
      <header class="logo">
        <a href="#" class="sidebar-icon">
          <span class="fa fa-bars"></span>
        </a> 
        <a href="index.html">
          <span id="logo"> <h1>Biblioteca</h1></span>
          <!--<img id="logo" src="" alt="Logo"/>-->
        </a>
      </header>
      <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
      <!--/down-->
      <div class="down">
        <a href="{{ route('principal') }}">
          <span class=" name-caret">
            {{Auth::user()->nombres}} {{Auth::user()->apellidos}}
          </span>
        </a>
        <p>{{Auth::user()->cargo->nombre}}</p>
        <ul>
          <li><a class="tooltips" href="{{route('logout')}}"><span>Salir</span><i class="lnr lnr-power-switch"></i></a></li>
        </ul>
      </div>
      <!--//down-->
      <div class="menu">
        <ul id="menu" >
          <li class="@yield('principal')">
            <a href="{{ route('principal') }}">
              <i class="fa fa-tachometer"></i>
              <span>Principal</span>
            </a>
          </li>
          <li id="" ><a href="#"><i class="fa fa-circle-o"></i> <span>Areas</span> <span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="-sub" >
              <li id="" ><a href="{{ route('areas.create') }}">Nuevo</a></li>
              <li id="" ><a href="{{ route('areas.index') }}">Listado</a></li>
            </ul>
          </li>
          <li id="" ><a href="#"><i class="fa fa-circle-o"></i> <span>Autores</span> <span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="-sub" >
              <li id="" ><a href="{{ route('autores.create') }}">Nuevo</a></li>
              <li id="" ><a href="{{ route('autores.index') }}">Listado</a></li>
            </ul>
          </li>
          <li id="" ><a href="#"><i class="fa fa-tag"></i> <span> Editoriales</span> <span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="-sub" >
              <li id="" ><a href="{{ route('editoriales.create') }}">Nuevo</a></li>
              <li id="" ><a href="{{ route('editoriales.index') }}">Listado</a></li>
            </ul>
          </li>
          <li id="" ><a href="#"><i class="fa fa-tag"></i> <span> Especialidades</span> <span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="-sub" >
              <li id="" ><a href="{{ route('especialidades.create') }}">Nuevo</a></li>
              <li id="" ><a href="{{ route('especialidades.index') }}">Listado</a></li>
            </ul>
          </li>
          <li id="" ><a href="#"><i class="fa fa-graduation-cap"></i> <span> Tesis</span> <span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="-sub" >
              <li id="" ><a href="{{ route('grados.create') }}">Nuevo</a></li>
              <li id="" ><a href="{{ route('grados.index') }}">Listado</a></li>
              <li id="" ><a href="{{ URL('grados/descarga') }}">Descarga</a></li>
            </ul>
          </li>
          <li id="" ><a href="#"><i class="fa fa-book"></i> <span> Texto</span> <span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="-sub" >
              <li id="" ><a href="{{ route('libros.create') }}">Nuevo</a></li>
              <li id="" ><a href="{{ route('libros.index') }}">Listado</a></li>
              <li id="" ><a href="{{ URL('libros/descarga') }}">Descarga</a></li>
            </ul>
          </li>
          @if (Auth::user()->admin())
          <li id="" ><a href="#"><i class="fa fa-angle-double-up"></i> <span> Cargos</span> <span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="-sub" >
              <li id="" ><a href="{{ route('cargos.create') }}">Nuevo</a></li>
              <li id="" ><a href="{{ route('cargos.index') }}">Listado</a></li>
            </ul>
          </li>
          <li id="" ><a href="#"><i class="fa fa-users"></i> <span>Usuarios</span> <span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="-sub" >
              <li id="" ><a href="{{ route('users.create') }}">Nuevo</a></li>
              <li id="" ><a href="{{ route('users.index') }}">Listado</a></li>
            </ul>
          </li>
          @endif
          <li><a href=""><i class="fa fa-download"></i>Descargas</a></li>
          <li><a href=""><i class="fa fa-file-pdf-o"></i>Manual</a></li>
        </ul>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
      if (toggle)
      {
        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
        $("#menu span").css({"position":"absolute"});
      }
      else
      {
        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
        setTimeout(function() {
          $("#menu span").css({"position":"relative"});
        }, 400);
      }

      toggle = !toggle;
    });
  </script>
  <!--js -->
  <script src="{{asset ('js/scripts.js')}}"></script>
  <script src="{{asset ('js/custom.js')}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{asset ('js/bootstrap.min.js')}}"></script>
  <script src="{{asset ('js/moment.js')}}"></script>
  <script src="{{asset('js/bootstrap-datetimepicker.js')}}"></script>

  @yield('js')

</body>
</html>