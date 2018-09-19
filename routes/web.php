<?php

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

/*Route::get('/', 'HomeController@index');
Route::get('/send', 'HomeController@send');*/
Route::get('/', function (){
    return view('welcome');
});

Route::get('/about', function (){
    $name ="John Mark";
    return view('about', compact('name'));
});

Route::get('/services', function (){
    $items=["Cleaning","Repairing","Building","Washing","Cooking"];
    return view('services', compact('items'));
});