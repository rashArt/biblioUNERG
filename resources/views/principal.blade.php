@extends('base.main')
@section('title', 'Principal')
@section('principal', 'active')

@section('content')

  <!--outter-wp-->
  <div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{{ route('principal') }}">Principal</a></li>
      </ol>
    </div>
    <!--custom-widgets-->
    <div class="custom-widgets">
       <div class="row-one">
        <div class="col-md-3 widget">
          <div class="stats-left ">
            <h5>Trabajos de Grado</h5>
            <a href="{{route('grados.index')}}"><h4><i class="fa fa-graduation-cap"></i></h4></a>
          </div>
          <div class="stats-right">
            <label>{{$tesis}}</label>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 widget states-mdl">
          <div class="stats-left">
            <h5>Transcriptores</h5>
            <a href="{{route('users.index')}}"><h4><i class="fa fa-user-plus"></i></h4></a>
          </div>
          <div class="stats-right">
            <label>{{$asistentes}}</label>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 widget states-thrd">
          <div class="stats-left">
            <h5>Libros</h5>
            <a href="{{route('libros.index')}}"><h4><i class="fa fa-book"></i></h4></a>
          </div>
          <div class="stats-right">
            <label>{{$libros}}</label>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 widget states-last">
          <div class="stats-left">
            <h5>Administradores</h5>
            <a href="{{route('users.index')}}"><h4><i class="fa fa-user"></i></h4></a>
          </div>
          <div class="stats-right">
            <label>{{$moderadores}}</label>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <!--//custom-widgets-->
    <!--//sub-heard-part-->
    <div class="graph-visual tables-main">
      <h2 class="inner-tittle">Blank Page</h2>
      <div class="graph">
        <div class="block-page">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
        </div>
      </div>
    </div>
    <!--//graph-visual-->
  </div>
  <!--//outer-wp-->

@stop