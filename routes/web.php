<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/actors', 'App\Http\Controllers\ActorController@index')->name('actors.index');
Route::get('/actors/{id}', 'App\Http\Controllers\ActorController@show')->name('actors.show');
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/actor/{id}', 'App\Http\Controllers\Admin\AdminActorController@show')->name("admin.actor.show");

/*
Route::get('/', function () {
    return view('welcome');
});
*/