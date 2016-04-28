@extends('base.main')
@section('title', 'Tesis')
@section('content')

<!--outter-wp-->
  <div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{{ route('principal') }}">Principal</a></li>
        <li><a href="{{ route('grados.index') }}">Tesis</a></li>
        <li class="active">Ver</li>
      </ol>
    </div>

    <!--/profile-inner-->
    <div class="graph-visual tables-main">
      <div class="col-md-6 profile-info">
        @if(count($tesis) > 0)
        <h3 class="inner-tittle">Información detallada </h3>
        <div class="main-grid3">
          <div class="p-20">
            <div class="about-info-p">
              <strong>Titulo</strong>
              <br>
              <p class="text-muted">{{ $tesis->titulo }}</p>
            </div>
            <div class="about-info-p">
              <strong>Autor</strong>
              <br>
              <p class="text-muted">{{ $tesis->autor }}</p>
            </div>
            <div class="about-info-p">
              <strong>Tutor</strong>
              <br>
              <p class="text-muted">{{ $tesis->tutor }}</p>
            </div>
            <div class="about-info-p">
              <strong>Área</strong>
              <br>
              <p class="text-muted">{{ $tesis->area->nombre }}</p>
            </div>
            <div class="about-info-p">
              <strong>Especialidad</strong>
              <br>
              <p class="text-muted">{{ $tesis->especialidad->nombre }}</p>
            </div>
            <div class="about-info-p">
              <strong>Registrada por</strong>
              <br>
              <p class="text-muted">{{ $tesis->user->nombres }} {{ $tesis->user->apellidos }}</p>
            </div>
            <div class="about-info-p">
              <strong>Hora y Fecha de Registro</strong>
              <br>
              <p class="text-muted">{{ $tesis->created_at }}</p>
            </div>
            <div class="about-info-p">
              <strong>Hora y Fecha de Actualización</strong>
              <br>
              <p class="text-muted">{{ $tesis->updated_at }}</p>
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