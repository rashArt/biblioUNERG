<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

  <title>Login</title>

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
  <!-- //lined-icons -->
  <script src="{{asset ('js/jquery-1.10.2.min.js')}}"></script>
  <!--clock init-->
</head>
<body>
<!--/login-->

  <div class="error_page">
    <!--/login-top-->

    <div class="error-top">
      <h2 class="inner-tittle page">Biblioteca</h2>
      <div class="login">
        <h3 class="inner-tittle t-inner">Acceder</h3>

        @include('flash::message')

        @if (count($errors) > 0)
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
          </div>
        @endif

        {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}

          {!! Form::email('email', null, ['class' => 'text', 'placeholder' => 'Correo Electronico', 'autofocus']) !!}

          {!! Form::password('password', ['placeholder' => 'Contraseña']) !!}

          <div class="submit">
            <input type="submit" value="Entrar" >
          </div>
          <div class="clearfix"></div>
        {!! Form::close() !!}

      </div>
    </div>
    <!--//login-top-->
  </div>

  <!--//login-->
  <!--footer section start-->
  <div class="footer">
     <p>UNERG | Trabajo de Grado 2016 | Desarrollado por <a href="#" target="_blank">Jonathan Pacheco</a></p>
  </div>
  <!--footer section end-->
  <!--/404-->
  <!--js -->
  <script src="{{asset ('js/scripts.js')}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{asset ('js/bootstrap.min.js')}}"></script>
</body>
</html>