<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function show($id){
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'confirmed',
        ]);

        $current_password = User::find($id)->password;

        User::find($id)->fill(['name' => $request->name, 'email' => $request->email, 'password' => !$request->password ? $current_password : bcrypt($request->password)])->save();
        return \Redirect::back()->with('msg', 'Dados atualizados com sucesso!');
    }
}
