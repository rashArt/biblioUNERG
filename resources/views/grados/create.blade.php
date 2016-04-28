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
        <li class="active">Registrar</li>
      </ol>
    </div>
    <!--/forms-->
    <div class="forms-main">
      <h2 class="inner-tittle">Registrar Tesis</h2>

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
          {!! Form::open(['route' => 'grados.store', 'method' =>'POST']) !!}
            <div class="form-group">
              {!! Form::label('titulo', 'Titulo de la Tesis') !!}
              {!! Form::text('titulo', null, ['class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('autor', 'Nombre y Apellido del Autor') !!}
              {!! Form::text('autor', null, ['class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('tutor', 'Nombre y Apellido del Tutor') !!}
              {!! Form::text('tutor', null, ['class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('area', 'Seleccione Área') !!}
              {!! Form::select('area_id', $areas, null, ['id' => 'area', 'class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('especialidad', 'Seleccione Especialidad') !!}
              {!! Form::select('especialidad_id', ['0'=>'selecciona'], null, ['id' => 'especialidad', 'class' => 'form-control1']) !!}
            </div>

            <button type="submit" class="btn blue">Guardar</button>
            <input type="reset" class="btn red" value="Limpiar">
          {!! Form::close() !!}
        </div>
      </div>
    </div>

  </div>
  <!--//outer-wp-->

@stop
@section('js')
<script>
  $("#area").change(event => {
    $.get(`/especialidad/${event.target.value}`, function(res, sta){
        $("#especialidad").empty();
        res.forEach(element => {
            $("#especialidad").append(`<option value=${element.id}>${element.nombre}</option>`);
        });
    });
});
</script>
@stop