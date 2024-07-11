<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApuestaController extends Controller
{
    public function index()
    {

        $juegos = Game::all();

        return view('juegos.index', [
            'juegos' => $juegos
        ]);
    }
  

        
    

    public function show(Game $juego)
    {

        return view('juegos.show', [
            'juego' => $juego
        ]);
    }

    public function store()
    {

        
        $data = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
        ]);

        Task::create($data);

        return redirect('/tasks');
    }

    public function edit(Game $juego)
    {

        return view('juegos.edit', [
            'juego' => $juego
        ]);
    }

    public function update(Task $task)
    {

        $data = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
        ]);

       $task->fill($data)->save();
       //$task->update($data);

        return redirect('/tasks/' . $task->id);
    }
}
