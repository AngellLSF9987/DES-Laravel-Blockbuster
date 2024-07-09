<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin - THE BLOCKBUSTER";
        $viewData["subtitle"] = "El Mundo del Cine hasta tú quieras";
        $viewData["author"] = "Developed by: Angel Luis Saorin Faura";
        
        return view('admin.home.index')->with("viewData", $viewData);
    }
}

?>