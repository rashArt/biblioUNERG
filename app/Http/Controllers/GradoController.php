<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Requests\GradoCreateRequest;
use App\Http\Requests\GradoUpdateRequest;
use App\Http\Controllers\Controller;
use App\Grado;
use App\User;
use App\Area;
use App\Especialidad;
use Laracasts\Flash\Flash;

class GradoController extends Controller
{
    //tesis sera la variable a utilizar dentro del controlador

    public function index()
    {
        $tesis = Grado::orderBy('titulo', 'ASC')->paginate(10);

        return view('grados.index')
            ->with('tesis', $tesis);
    }

    public function create()
    {
        $areas = Area::lists('nombre', 'id');
        // alternativa a placeholder dentro del select
        $areas->prepend('-- Seleccionar --', 0);
        $especialidades = Especialidad::lists('nombre', 'id');

        return view('grados.create')
            ->with('areas', $areas)
            ->with('especialidades', $especialidades);
    }

    public function getSelect(Request $request, $id){
        if ($request->ajax()) {
            $especialidades = Especialidad::especialidad($id);
            return response()->json($especialidades);
        }
    }

    public function store(GradoCreateRequest $request)
    {
        /* usuario logueado */
        $id_logueado = Auth::user()->id;

        /* registro */
        $tesis = new Grado();
        $tesis->titulo = $request->titulo;
        $tesis->autor = $request->autor;
        $tesis->tutor = $request->tutor;
        $tesis->area_id = $request->area_id;
        $tesis->especialidad_id = $request->especialidad_id;
        $tesis->user_id = $id_logueado;
        $tesis->save();

        Flash::success('Se ha registrado la Tesis exitosamente!');

        return redirect()->route('grados.index');
    }

    public function show($id)
    {
        $tesis = Grado::find($id);

        return view('grados.show')
            ->with('tesis', $tesis);
    }

    public function edit($id)
    {
        $tesis = Grado::find($id);
        $areas = Area::lists('nombre', 'id');
        $especialidades = Especialidad::lists('nombre', 'id');

        return view('grados.edit')
            ->with('areas', $areas)
            ->with('especialidades', $especialidades)
            ->with('tesis', $tesis);
    }

    public function update(GradoUpdateRequest $request, $id)
    {
        $tesis = Grado::find($id);
        $tesis->titulo = $request->titulo;
        $tesis->autor = $request->autor;
        $tesis->tutor = $request->tutor;
        $tesis->area_id = $request->area_id;
        $tesis->especialidad_id = $request->especialidad_id;
        $tesis->save();

        Flash::success('Se ha editado la Tesis exitosamente!');

        return redirect()->route('grados.index');
    }

    public function delete($id)
    {
        Grado::find($id)->delete();

        Flash::error('Se ha eliminado la Tesis exitosamente!');

        return redirect()->route('grados.index');
    }
}
