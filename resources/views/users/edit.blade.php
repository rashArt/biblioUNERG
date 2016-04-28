@extends('base.main')
@section('title', 'Editar Usuarios')
@section('content')

  <!--outter-wp-->
  <div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{{ route('principal') }}">Principal</a></li>
        <li><a href="{{ route('users.index') }}">Usuario</a></li>
        <li class="active">Editar</li>
      </ol>
    </div>
    <!--/forms-->
    <div class="forms-main">
      <h2 class="inner-tittle">Editar Usuarios</h2>

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
          @if(count($usuario) > 0)
            {!! Form::model($usuario, array('route' => array('users.update', $usuario->id), 'method' => 'PUT')) !!}

              <div class="vali-form vali-form1">
                <div class="col-md-6 form-group">
                  {!! Form::label('cargo', 'Seleccione Área') !!}
                  {!! Form::select('cargo_id', $cargos, null, ['class' => 'form-control1']) !!}
                </div>
                <div class="col-md-6 form-group">
                  {!! Form::label('cedula', 'Ingrese Cedula') !!}
                  {!! Form::number('cedula', null, ['class' => 'form-control1']) !!}
                </div>
                <div class="col-md-6 form-group">
                  {!! Form::label('nombres', 'Ingrese Nombres') !!}
                  {!! Form::text('nombres', null, ['class' => 'form-control1']) !!}
                </div>
                <div class="col-md-6 form-group">
                  {!! Form::label('apellidos', 'Ingrese Apellidos') !!}
                  {!! Form::text('apellidos', null, ['class' => 'form-control1']) !!}
                </div>
                <div class="col-md-5 form-group">
                  {!! Form::label('telefono', 'Ingrese Telefono') !!}
                  {!! Form::number('telefono', null, ['class' => 'form-control1']) !!}
                </div>
                <div class="col-md-7 form-group">
                  {!! Form::label('email', 'Ingrese Correo Electrónico') !!}
                  {!! Form::email('email', null, ['class' => 'form-control1']) !!}
                </div>
                  <div class="clearfix"> </div>
              </div>

              <button type="submit" class="btn blue">Guardar</button>
            {!! Form::close() !!}
          @else
            <h3>No hay registros</h3>
          @endif
        </div>
      </div>
    </div>

  </div>
  <!--//outer-wp-->

@stop