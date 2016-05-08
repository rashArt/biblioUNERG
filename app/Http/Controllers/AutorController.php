<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AutorCreateRequest;
use App\Http\Requests\AutorUpdateRequest;
use App\Http\Controllers\Controller;
use App\Autor;
use Laracasts\Flash\Flash;

class AutorController extends Controller
{

    public function index()
    {
        $autores = Autor::orderBy('nombre', 'ASC')->paginate(5);

        return view('autores.index')
            ->with('autores', $autores);
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(AutorCreateRequest $request)
    {
        $autor = new Autor();
        $autor->nombre = $request->nombre;
        $autor->save();

        Flash::success('Se ha registrado el autor '.$request->nombre.' exitosamente!');

        return redirect()->route('autores.index');
    }

    public function edit($id)
    {
        $autor = Autor::find($id);

        return view('autores.edit')
            ->with('autor',$autor);
    }

    public function update(AutorUpdateRequest $request, $id)
    {
        $autor = Autor::find($id);
        $autor->nombre = $request->nombre;
        $autor->save();

        Flash::success('Se ha editado el autor de '.$autor->name.' exitosamente!');

        return redirect()->route('autores.index');
    }

    public function delete($id)
    {
        Autor::find($id)->delete();

        Flash::error('Se ha eliminado el autor exitosamente!');

        return redirect()->route('autores.index');
    }
}
