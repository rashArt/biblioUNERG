<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AreaCreateRequest;
use App\Http\Requests\AreaUpdateRequest;
use App\Http\Controllers\Controller;
use App\Area;
use Laracasts\Flash\Flash;

class AreaController extends Controller
{

    public function index()
    {
        $areas = Area::orderBy('nombre', 'ASC')->paginate(5);

        return view('areas.index')
            ->with('areas', $areas);
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(AreaCreateRequest $request)
    {

        $area = new Area();
        $area->nombre = $request->nombre;
        $area->save();

        Flash::success('Se ha registrado el área '.$request->name.' exitosamente!');

        return redirect()->route('areas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $area = Area::find($id);

        return view('areas.edit')
            ->with('area',$area);
    }

    public function update(AreaCreateRequest $request, $id)
    {
        $area = Area::find($id);
        $area->nombre = $request->nombre;
        $area->save();

        Flash::success('Se ha editado el área de '.$area->nombre.' exitosamente!');

        return redirect()->route('areas.index');
    }

    public function delete($id)
    {

        Area::find($id)->delete();

        Flash::error('Se ha eliminado el Área exitosamente!');

        return redirect()->route('areas.index');
    }
}
