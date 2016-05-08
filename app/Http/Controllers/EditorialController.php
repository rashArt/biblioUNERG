<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EditorialCreateRequest;
use App\Http\Requests\EditorialUpdateRequest;
use App\Http\Controllers\Controller;
use App\Editorial;
use Laracasts\Flash\Flash;

class EditorialController extends Controller
{

    public function index()
    {
        $editoriales = Editorial::orderBy('nombre', 'ASC')->paginate(5);

        return view('editoriales.index')
            ->with('editoriales', $editoriales);
    }

    public function create()
    {
        return view('editoriales.create');
    }

    public function store(EditorialCreateRequest $request)
    {
        $editorial = new Editorial();
        $editorial->nombre = $request->nombre;
        $editorial->save();

        Flash::success('Se ha registrado el editorial '.$request->nombre.' exitosamente!');

        return redirect()->route('editoriales.index');
    }

    public function edit($id)
    {
        $editorial = Editorial::find($id);

        return view('editoriales.edit')
            ->with('editorial',$editorial);
    }

    public function update(EditorialUpdateRequest $request, $id)
    {
        $editorial = Editorial::find($id);
        $editorial->nombre = $request->nombre;
        $editorial->save();

        Flash::success('Se ha editado el editorial de '.$editorial->name.' exitosamente!');

        return redirect()->route('editoriales.index');
    }

    public function delete($id)
    {
        Editorial::find($id)->delete();

        Flash::error('Se ha eliminado el editorial exitosamente!');

        return redirect()->route('editoriales.index');
    }
}