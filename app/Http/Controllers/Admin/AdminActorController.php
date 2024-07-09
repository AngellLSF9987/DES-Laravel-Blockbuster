<?php

namespace App\Http\Controllers\Admin;
use \App\Models\Actor;
use App\Http\Controllers\Controller;
use \App\Http\Controllers\ActorController;
use Illuminate\Http\Request;

class AdminActorController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Actors";
        $viewData["actor"] = ActorController::$actor;

        return view('admin.actor.show')->with("viewData", $viewData);
    }
}