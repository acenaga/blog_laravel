<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Laracasts\Flash\Flash;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function create ()
    {
    	return view('admin.users.create');
    }


    public function store(UserRequest $request)
    {
    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);
    	$user->save();

    	flash('El Usuario '.$user->name.' se ha registrado con exito', 'success');

    	return redirect()->route('admin.users.index');
    }

    public function index()
    {

    	$users = User::orderBy('id','ASC')->paginate(5);

    	return view('admin.users.index')->with('users', $users);
    }

    public function destroy ($id)
    {
    	$user = User::find($id);
    	$user->delete();

    	flash('El usuario '. $user->name .' ha sido borrado permanentemente de forma exitosa!!', 'danger');
    	return redirect()->route('admin.users.index');
    }

    public function edit ($id)
    {
    	$user = User::find($id);
    	return view('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
    	$user = User::find($id);
        $user->fill($request->all()); //modifica los campos actualizados del formulario
    	//Modifica los campos actualizados en el formulario uno por uno
        //$user->name = $request->name;
    	//$user->email = $request->email;
    	//$user->type = $request->type;
    	$user->save();

    	flash('El usuario '. $user->name .' ha sido modificado de forma exitosa!!', 'warning');

    	return redirect()->route('admin.users.index');
    }
}
