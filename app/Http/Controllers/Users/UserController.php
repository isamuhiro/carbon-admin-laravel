<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('profile.index');
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
