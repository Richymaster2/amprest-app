<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     // return view('welcome');
//     return "<h1>Hello Amprest Technolories</h1>";
// });
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/testIndex', 'App\Http\Controllers\PagesController@testIndex');
Route::get('/about', 'App\Http\Controllers\PagesController@about');


// Route::get('/about', function(){
//     return view('pages.about');
// });

// Route::get('/user/{id}/{name}', function($id, $name){
//     return 'This user id is '.$id .'name is '.$name;
// });