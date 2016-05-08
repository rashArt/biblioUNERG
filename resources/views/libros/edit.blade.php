@extends('base.main')
@section('title', 'Editar Libros')
@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
@stop
@section('content')

<!--outter-wp-->
  <div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{{ route('principal') }}">Principal</a></li>
        <li><a href="{{ route('libros.index') }}">Libros</a></li>
        <li class="active">Editar</li>
      </ol>
    </div>
    <!--/forms-->
    <div class="forms-main">
      <h2 class="inner-tittle">Editar Libros</h2>

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
          {!! Form::model($libro, array('route' => array('libros.update', $libro->id), 'method' => 'PUT')) !!}

            <div class="form-group">
              {!! Form::label('isbn', 'ISBN') !!}
              {!! Form::text('isbn', null, ['class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('titulo', 'Titulo') !!}
              {!! Form::text('titulo', null, ['class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('descripcion', 'Descripción') !!}
              {!! Form::text('descripcion', null, ['class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('editorial', 'Editorial') !!}
              {!! Form::select('editorial', $editoriales, null, ['class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('autor', 'Autor') !!}
              {!! Form::select('autor', $autores, null, ['class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('idioma', 'Seleccione Idioma') !!}
              {!! Form::select('idioma', ['Espanol'=>'Español', 'Ingles'=>'Ingles', 'Frances'=>'Frances'], null, ['id' => 'area', 'class' => 'form-control1']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('año', 'Año de Edición') !!}
              <div class='input-group date' id='datetimepicker'>
                {!! Form::text('ano_edicion', null, ['class' => 'form-control1 icon']) !!}
                <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
                </span>
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('ejemplares', 'Cantidad de ejemplares') !!}
              {!! Form::number('ejemplares', null, ['class' => 'form-control1']) !!}
            </div>


            <button type="submit" class="btn blue">Guardar</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>

  </div>
  <!--//outer-wp-->

@stop

@section('js')
<script type="text/javascript">
  $(function () {
      $('#datetimepicker').datetimepicker({
        format: 'Y'
      });
  });
</script>
@stop