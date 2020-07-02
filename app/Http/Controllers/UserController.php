<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserEditFormRequest;
use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;

use App\User;
use App\Role;

class UserController extends Controller
{
   //metodo qeu valida si un usuario está logueado
   public function __construct(){
    $this->middleware('auth');
}

//metodo que muestra una lista de la BD
public function index(Request $request)
{
        $users = User::all();

        return view('usuarios.index', ['users' => $users] );


    //$user = User::all();
    //return view('usuarios.index', ['users' => $user]);
}


 //metodo que muestra el formulario para crear registros de la BD
public function create()
{
    $roles = Role::all();
    return view('usuarios.create', ['roles'=>$roles]);
}

 //metodo que sirve para almacenar los registros recien creados
public function store(UserFormRequest $request)
{
    $usuario = new User();

    //campos del name de los imputs qeu se capturan dentro de la variable usuario
    $usuario->name = request('name');
    $usuario->email = request('email');
    $usuario->userName = request('userName');
    $usuario->user_estado = request('estado');
    $usuario->password = bcrypt(request('password'));
    if($request->hasFile('imagen'))
    {
        $file = $request->imagen;
        $file->move(public_path().'/imagenes', $file->getClientOriginalName());
        $usuario->image = $file->getClientOriginalName();
    }

    $usuario->save(); //linea que salva los datos capturados
    $usuario->asignarRol($request->get('rol')); //asigna el rol desde el formulario
    return redirect('/usuarios')->with('flash', 'Elemento guardado con exito');//retorna la vista usuarios despues de enviados los datos
}

 //metodo que srive para mostrar un registro especifico
public function show($id)
{
    //
}

 //metodo que muestra el formulario para editar registros especificos
public function edit($id)
{
    $user = User::findOrfail($id);
    $roles = Role::all();
    return view('usuarios.edit', ['user' => $user, 'roles' => $roles]);
}

 //metodo que sirve para actualizar registros especificos
public function update(UserEditFormRequest $request, $id)
{
    $this->validate(request(), ['email'=>['required', 'email', 'max:30', 'unique:users,email,' . $id]]);

    $usuario =  User::findOrFail($id);

    //campos del name de los imputs qeu se capturan dentro de la variable usuario
    $usuario->name = $request->get('name');
    $usuario->email = $request->get('email');
    $usuario->userName = $request->get('userName');
    $usuario->user_estado = $request->get('estado');

    $role = $usuario->roles;
    if(count($role) > 0)
    {
        $role_id = $role[0]->id;
    }
    User::find($id)->roles()->updateExistingPivot($role_id, ['role_id' => $request->get('rol')]);

    $usuario->update(); //linea que actualiza los datos capturados

    return redirect('/usuarios')->with('flash', 'Elemento actualizado con exito');//retorna la vista usuarios despues de enviados los datos
}

 //metodo que sirve para borrar registros especificos
public function destroy($id)
{
    $usuario = User::findOrFail($id);

    $usuario->delete();

    return redirect('/usuarios')->with('flash', 'Elemento eliminado con exito');
}
}
