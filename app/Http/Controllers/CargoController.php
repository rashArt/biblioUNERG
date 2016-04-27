<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CargoCreateRequest;
use App\Http\Requests\CargoUpdateRequest;
use App\Http\Controllers\Controller;
use App\Cargo;
use Laracasts\Flash\Flash;

class CargoController extends Controller
{

    public function index()
    {
        $cargos = Cargo::orderBy('nombre', 'ASC')->paginate(5);

        return view('cargos.index')
            ->with('cargos', $cargos);
    }

    public function create()
    {
        return view('cargos.create');
    }

    public function store(CargoCreateRequest $request)
    {
        $cargo = new Cargo();
        $cargo->nombre = $request->nombre;
        $cargo->save();

        Flash::success('Se ha registrado el cargo '.$request->name.' exitosamente!');

        return redirect()->route('cargos.index');
    }

    public function edit($id)
    {
        $cargo = Cargo::find($id);

        return view('cargos.edit')
            ->with('cargo',$cargo);
    }

    public function update(CargoUpdateRequest $request, $id)
    {
        $cargo = Cargo::find($id);
        $cargo->nombre = $request->nombre;
        $cargo->save();

        Flash::success('Se ha editado el cargo de '.$cargo->name.' exitosamente!');

        return redirect()->route('cargos.index');
    }

    public function delete($id)
    {
        Cargo::find($id)->delete();

        Flash::error('Se ha eliminado el Cargo exitosamente!');

        return redirect()->route('cargos.index');
    }
}
