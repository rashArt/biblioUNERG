@extends('base.main')
@section('title', 'Editar Especialidad')
@section('content')

  <!--outter-wp-->
  <div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{{ route('principal') }}">Principal</a></li>
        <li><a href="{{ route('especialidades.index') }}">Especialidades</a></li>
        <li class="active">Editar</li>
      </ol>
    </div>
    <!--/forms-->
    <div class="forms-main">
      <h2 class="inner-tittle">Editar Especialidad</h2>

      @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          <ul>
            @foreach($errors->all() as $error)
              <li>{!! $error !!}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="graph-form">
        <div class="form-body">

          {!! Form::model($especialidad, array('route' => array('especialidades.update', $especialidad->id), 'method' => 'PUT')) !!}
            <div class="form-group">
              {!! Form::label('area', 'Seleccione Área') !!}
              {!! Form::select('area_id', $areas, null, ['class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('nombre', 'Ingrese la Especialidad') !!}
              {!! Form::text('nombre', null, ['class' => 'form-control1']) !!}
            </div>

            <button type="submit" class="btn blue">Guardar</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>

  </div>
  <!--//outer-wp-->

@stop