<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apuesta;

class ApuestaController extends Controller
{
    public function index()
    {

        $apuestas = Apuesta::all();

        return view('apuesta.index', [
            'apuestas' => $apuestas
        ]);

       
    }
  

    public function show(Apuesta $apuesta)
    {

        return view('apuestas.show', [
            'apuesta' => $apuesta
        ]);
    }    
}
