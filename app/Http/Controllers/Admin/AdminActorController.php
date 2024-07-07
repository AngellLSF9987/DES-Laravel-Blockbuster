<?php

namespace App\Http\Controllers\Admin;
use App\Models\Actor;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ActorController;
use Illuminate\Http\Request;

class AdminActorController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Actors";
        $viewData["actors"] = ActorController::$actors;

        return view('admin.actor.index')->with("viewData", $viewData);
    }
}