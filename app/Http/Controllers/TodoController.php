<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        $todos = auth()->user()->todos;
        return view('todos.index', ['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
            'title' => 'required',
        ]);

        \App\Todo::create($request->all());
        return \Redirect::back()->with('msg', 'Cadastrado com sucesso!');
    }

    public function show(Todo $todo)
    {
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo)
    {

        $this->validate($request, [
            'body' => 'required',
            'title' => 'required',
        ]);

        $todo->fill($request->all())->save();
        return \Redirect::back()->with('msg', 'Dados atualizados com sucesso!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return \Redirect::back()->with('msg', 'Excluido com sucesso!');
    }
}
