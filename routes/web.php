<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return Redirect::to('planets');
});
Route::get('/planets',function (){
    return "All planets";
});
Route::get('planets/{id}',function ($id){
    return "Planet #$id";
})->where('id','[0-9]+');
Route::get('/about',function(){
    return View::make('about')->with('numberOfPlanets',5);
});