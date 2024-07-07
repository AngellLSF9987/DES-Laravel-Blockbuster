<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "THE BLOCKBUSTER";
        $viewData["subtitle"] = "El Mundo del Cine hasta tú quieras";
        $viewData["author"] = "Developed by: Angel Luis Saorin Faura";
        return view('home.index')->with("viewData", $viewData);
    }
}
