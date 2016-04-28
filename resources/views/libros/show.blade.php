@extends('base.main')
@section('title', 'Ver Libros')
@section('content')

<!--outter-wp-->
  <div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{{ route('principal') }}">Principal</a></li>
        <li><a href="{{ route('libros.index') }}">Libros</a></li>
        <li class="active">Ver</li>
      </ol>
    </div>

    <!--/profile-inner-->
    <div class="graph-visual tables-main">
      <div class="col-md-6 profile-info">
        @if(count($libro) > 0)
        <h3 class="inner-tittle">Información detallada </h3>
        <div class="main-grid3">
          <div class="p-20">
            <div class="about-info-p">
              <strong>Titulo</strong>
              <br>
              <p class="text-muted">{{ $libro->titulo }}</p>
            </div>
            <div class="about-info-p">
              <strong>Descripcion</strong>
              <br>
              <p class="text-muted">{{ $libro->descripcion }}</p>
            </div>
            <div class="about-info-p">
              <strong>Autor</strong>
              <br>
              <p class="text-muted">{{ $libro->autor }}</p>
            </div>
            <div class="about-info-p">
              <strong>Editorial</strong>
              <br>
              <p class="text-muted">{{ $libro->editorial }}</p>
            </div>
            <div class="about-info-p">
              <strong>Año de Edición</strong>
              <br>
              <p class="text-muted">{{ $libro->ano_edicion }}</p>
            </div>
            <div class="about-info-p">
              <strong>Ejemplares</strong>
              <br>
              <p class="text-muted">{{ $libro->ejemplares }}</p>
            </div>
            <div class="about-info-p">
              <strong>Registrada por</strong>
              <br>
              <p class="text-muted">{{ $libro->user->nombres }} {{ $libro->user->apellidos }}</p>
            </div>
            <div class="about-info-p">
              <strong>Hora y Fecha de Registro</strong>
              <br>
              <p class="text-muted">{{ $libro->created_at }}</p>
            </div>
            <div class="about-info-p">
              <strong>Hora y Fecha de Actualización</strong>
              <br>
              <p class="text-muted">{{ $libro->updated_at }}</p>
            </div>
          </div>
        </div>
        @else
          <h3>No hay registros</h3>
        @endif
      </div>
    </div>
    <div class="clearfix"></div>

  </div>
  <!--//outer-wp-->

@stop