@extends('base.main')
@section('title', 'Tesis')

@section('css')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css') }}">
@stop

@section('content')

  <!--outter-wp-->
  <div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{{ route('principal') }}">Principal</a></li>
        <li class="active">Tesis</li>
      </ol>
    </div>

    <div class="graph-visual tables-main">
      <h2 class="inner-tittle">Listado de Tesis</h2>
      @include('flash::message')
      <div class="graph">
        <div class="tables">
          @if(count($tesis) > 0)
            <table class="table table-bordered" id="dataTables-example">
              <thead>
                <tr>
                  <th>Titulo</th>
                  <th>Especialidad</th>
                  <th>Autor</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tesis as $grado)
                <tr>
                  <td>{{ $grado->titulo }}</td>
                  <td>{{ $grado->especialidad->nombre }}</td>
                  <td>{{ $grado->autor }}</td>
                  <td>
                    <div class="btn-group">

                      <a href="{{ URL::to('grados/' . $grado->id ) }}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>

                      <a href="{{ URL::to('grados/' . $grado->id . '/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>

                      <button type="button" class="btn btn-danger  btn-flat btn-xs" data-toggle="modal" data-target="#del{!!$grado->id!!}"><i class="fa fa-trash"></i> </button>

                      <a href="{{ URL::to('grados/descarga/' . $grado->id ) }}" class="btn btn-xs"><i class="fa fa-download"></i></a>

                      <!-- Modal -->
                      <div class="modal fade" id="del{!!$grado->id!!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Desea Eliminar?</h4>
                            </div>
                            <div class="modal-body">
                              Se eliminará de forma permanente
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn green pull-right" data-dismiss="modal">Cancelar</button>
                              <a href="grados/{{$grado->id}}/delete" class="btn red">Eliminar <i class="icon-trash"></i></a>
                            </div>
                          </div>
                        </div>
                      </div> <!-- / Modal -->
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          @else
            <h3>No hay registros</h3>
          @endif
          {!! $tesis->render() !!}
        </div>
      </div>
      <!--//graph-visual-->
    </div>
    <!--//outer-wp-->


  </div>
  <!--//outer-wp-->
@stop

@section('js')
  <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#dataTables-example').dataTable();
    });
  </script>
@stop