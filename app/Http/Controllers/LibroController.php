<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Requests\LibroCreateRequest;
use App\Http\Requests\LibroUpdateRequest;
use App\Http\Controllers\Controller;
use App\Libro;
use App\Autor;
use App\Editorial;
use Laracasts\Flash\Flash;
use Carbon\Carbon;


class LibroController extends Controller
{

    public function index()
    {
        $libros = Libro::orderBy('ano_edicion', 'DESC')->paginate(10);

        return view('libros.index')
            ->with('libros', $libros);
    }

    public function create()
    {
        $autores = Autor::lists('nombre', 'id');
        $editoriales = Editorial::lists('nombre', 'id');

        return view('libros.create')
            ->with('autores', $autores)
            ->with('editoriales', $editoriales);
    }

    public function store(LibroCreateRequest $request)
    {
        /* usuario logueado */
        $id_logueado = Auth::user()->id;

        /* registro */
        $libro = new Libro();
        $libro->isbn = $request->isbn;
        $libro->titulo = $request->titulo;
        $libro->clasificacion = $request->clasificacion;
        $libro->pie = $request->pie;
        $libro->nota = $request->nota;
        $libro->serie = $request->serie;
        $libro->fisica = $request->fisica;
        $libro->descripcion = $request->descripcion;
        $libro->editorial_id = $request->editorial_id;
        $libro->autor_id = $request->autor_id;
        $libro->ano_edicion = $request->ano_edicion;
        $libro->ejemplares = $request->ejemplares;
        $libro->user_id = $id_logueado;
        $libro->save();

        Flash::success('Se ha registrado el Libro '. $libro->titulo .' exitosamente!');

        return redirect()->route('libros.index');
    }

    public function show($id)
    {
        $libro = Libro::find($id);
        return view('libros.show')
            ->with('libro', $libro);
    }

    public function edit($id)
    {
        $libro = Libro::find($id);
        $editoriales = Editorial::lists('nombre', 'id');
        $autores = Autor::lists('nombre', 'id');

        return view('libros.edit')
            ->with('libro', $libro)
            ->with('editoriales', $editoriales)
            ->with('autores', $autores);
    }

    public function update(LibroUpdateRequest $request, $id)
    {
        $libro = Libro::find($id);
        $libro->isbn = $request->isbn;
        $libro->titulo = $request->titulo;
        $libro->clasificacion = $request->clasificacion;
        $libro->pie = $request->pie;
        $libro->nota = $request->nota;
        $libro->serie = $request->serie;
        $libro->fisica = $request->fisica;
        $libro->descripcion = $request->descripcion;
        $libro->editorial_id = $request->editorial_id;
        $libro->autor_id = $request->autor_id;
        $libro->ano_edicion = $request->ano_edicion;
        $libro->ejemplares = $request->ejemplares;
        $libro->save();

        Flash::success('Se ha Actualizado el Libro '. $libro->titulo .' exitosamente!');

        return redirect()->route('libros.index');
    }

    public function delete($id)
    {
        Libro::find($id)->delete();

        Flash::error('Se ha eliminado el Libro exitosamente!');

        return redirect()->route('libros.index');
    }

    public function download()
    {
        $libros = Libro::orderBy('titulo','ASC')->get();
        $fecha = Carbon::now();

        $pdf = \PDF::loadView('libros.download', ['libros' => $libros]);
        return $pdf->download('Total_Libros_'.$fecha->toDateString().'.pfd');
    }
}
