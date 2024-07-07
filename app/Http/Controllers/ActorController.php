<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
        // Método para mostrar la lista de actores
        public function index()
        {
            $viewData = [];
            $viewData["title"] = "THE BLOCKBUSTER";
            $viewData["subtitle"] = "Films - Actors && Actress";
            $viewData["actors"] = Actor::all(); // Obtén todos los actores de la base de datos
    
            return view('actors.index')->with("viewData", $viewData);
        }
    
        // Método para mostrar un actor específico por su ID
        public function show($id)
        {
            $viewData = [];
            $actor = Actor::findOrFail($id); // Encuentra el actor por su ID o lanza un error 404 si no se encuentra
            $viewData["title"] = "THE BLOCKBUSTER";
            $viewData["subtitle"] = "Films - Actors && Actress";
            $viewData["actor"] = $actor;
    
            return view('actors.show')->with("viewData", $viewData);
        }
}
