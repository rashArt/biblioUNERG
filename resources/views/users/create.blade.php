@extends('base.main')
@section('title', 'Registrar Usuario')
@section('content')


  <!--outter-wp-->
  <div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{{ route('principal') }}">Principal</a></li>
        <li><a href="{{ route('users.index') }}">Usuario</a></li>
        <li class="active">Registrar</li>
      </ol>
    </div>
    <!--/forms-->
    <div class="forms-main">
      <h2 class="inner-tittle">Registrar Usuarios</h2>

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
          {!! Form::open(['route' => 'users.store', 'method' =>'POST']) !!}

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
                <div class="col-md-6 form-group1">
                  {!! Form::label('password', 'Ingrese Contraseña') !!}
                  {!! Form::password('password', null, ['class' => 'form-control1']) !!}
                </div>
                <div class="col-md-6 form-group1 form-last">
                  {!! Form::label('password_confirmation', 'Confirme Contraseña') !!}
                  {!! Form::password('password_confirmation', null, ['class' => 'form-control1']) !!}
                </div>
                <div class="clearfix"> </div>
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