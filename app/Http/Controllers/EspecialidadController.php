<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EspecialidadCreateRequest;
use App\Http\Requests\EspecialidadUpdateRequest;
use App\Http\Controllers\Controller;
use App\Especialidad;
use App\Area;
use Laracasts\Flash\Flash;

class EspecialidadController extends Controller
{

    public function index()
    {
        $areas = Area::all();
        $especialidades = Especialidad::orderBy('area_id', 'ASC')->paginate(5);

        return view('especialidades.index')
            ->with('areas', $areas)
            ->with('especialidades', $especialidades);
    }

    public function create()
    {
        $areas = Area::lists('nombre', 'id');

        return view('especialidades.create')
            ->with('areas', $areas);
    }

    public function store(EspecialidadCreateRequest $request)
    {
        $especialidad = new Especialidad();
        $especialidad->nombre = $request->nombre;
        $especialidad->area_id = $request->area_id;
        $especialidad->save();

        Flash::success('Se ha registrado la Especialidad '.$request->nombre.' exitosamente!');

        return redirect()->route('especialidades.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $especialidad = Especialidad::find($id);
        $areas = Area::lists('nombre', 'id');

        return view('especialidades.edit')
            ->with('especialidad',$especialidad)
            ->with('areas', $areas);
    }

    public function update(EspecialidadUpdateRequest $request, $id)
    {
        $especialidad = Especialidad::find($id);
        $especialidad->nombre = $request->nombre;
        $especialidad->area_id = $request->area_id;
        $especialidad->save();

        Flash::success('Se ha editado la Especialidad '.$especialidad->nombre.' exitosamente!');

        return redirect()->route('especialidades.index');
    }

    public function delete($id)
    {
        Especialidad::find($id)->delete();

        Flash::error('Se ha eliminado la Especialidad exitosamente!');

        return redirect()->route('especialidades.index');
    }

}
