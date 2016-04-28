<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Cargo;
use Laracasts\Flash\Flash;

class UserController extends Controller
{

    public function index()
    {
        $usuarios = User::orderBy('apellidos', 'ASC')->paginate(5);

        return view('users.index')
            ->with('usuarios', $usuarios);
    }

    public function create()
    {
        $cargos = Cargo::lists('nombre', 'id');

        return view('users.create')
            ->with('cargos', $cargos);
    }


    public function store(UserCreateRequest $request)
    {
        $user = new User();
        $user->cedula    = $request->cedula;
        $user->nombres   = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->telefono  = $request->telefono;
        $user->email     = $request->email;
        $user->password  = bcrypt($request->password);
        $user->cargo_id  = $request->cargo_id;
        $user->save();

        Flash::success('Se ha registrado el Usuario '. $user->cedula .' exitosamente!');

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        $cargos = Cargo::lists('nombre', 'id');

        return view('users.edit')
            ->with('usuario', $usuario)
            ->with('cargos', $cargos);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->cedula    = $request->cedula;
        $user->nombres   = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->telefono  = $request->telefono;
        $user->email     = $request->email;
        $user->cargo_id  = $request->cargo_id;
        $user->save();

        Flash::success('Se ha Actualizado el Usuario '. $user->cedula .' exitosamente!');

        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        $user = User::find($id);
        if (is_null ($user))
        {
            Flash::error('No existe el usuario!');

            return redirect()->route('users.index');
        }
        // registre el cargo administrador de segundo, deberia ser el primero, es decir   == 1
        if ($user->cargo_id == 2)
        {
            Flash::error('No se puede eliminar usuarios administradores!');

            return redirect()->route('users.index');
        }
        else {
            User::find($id)->delete();

            Flash::success('Se ha eliminado el usuario exitosamente!');

            return redirect()->route('users.index');
        }

    }
}
