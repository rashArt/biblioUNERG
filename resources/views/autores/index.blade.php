@extends('base.main')
@section('title', 'Autores')
@section('content')


  <!--outter-wp-->
  <div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{{ route('principal') }}">Principal</a></li>
        <li class="active">Autores</li>
      </ol>
    </div>

    <div class="graph-visual tables-main">
      <h2 class="inner-tittle">Listado de Autores</h2>
      @include('flash::message')
      <div class="graph">
        <div class="tables">
          @if(count($autores) > 0)
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Área</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($autores as $autor)
                <tr>
                  <td>{{ $autor->nombre }}</td>
                  <td>
                    <div class="btn-group">

                      <a href="{{ URL::to('autores/' . $autor->id . '/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>

                      {{--<button type="button" class="btn btn-danger  btn-flat btn-xs" data-toggle="modal" data-target="#del{!!$autor->id!!}"><i class="fa fa-trash"></i> Eliminar</button>
                      <!-- Modal -->
                      <div class="modal fade" id="del{!!$autor->id!!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                              <a href="autores/{{$autor->id}}/delete" class="btn red">Eliminar <i class="icon-trash"></i></a>
                            </div>
                          </div>
                        </div>
                      </div> <!-- / Modal --> --}}
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          @else
            <h3>No hay registros</h3>
          @endif
          {!! $autores->render() !!}
        </div>
      </div>
      <!--//graph-visual-->
    </div>
    <!--//outer-wp-->


  </div>
  <!--//outer-wp-->

@stop