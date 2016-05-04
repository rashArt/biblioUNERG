
<!DOCTYPE HTML>
<html>
<head>
<title>Bilioteca</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="{{asset ('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="{{asset ('css/style.css')}}" rel='stylesheet' type='text/css' />
  <!-- Graph CSS -->
  <link href="{{asset ('css/font-awesome.css')}}" rel="stylesheet">

  <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
  <!-- lined-icons -->
  <link rel="stylesheet" href="{{asset ('css/icon-font.min.css')}}" type='text/css' />
  <!-- jQuery -->
  <script src="{{asset ('js/jquery-1.10.2.min.js')}}"></script>
  <!--clock init-->
</head>
<body>
  <!--/404-->
  <div class="error_page">
    <!--/error-top-->
    <div class="error-top error">
      <h3>500</h3>
      <p class="sorry">Lo sentimos, parece que hay algunos problemas con su solicitud!</p>
      <div class="error-btn">
        <a class="read fourth" href="{{ route('principal') }}">Volver</a>
      </div>
    </div>

  <!--//error-top-->
  </div>
  <!--footer section start-->
  <div class="footer error">
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