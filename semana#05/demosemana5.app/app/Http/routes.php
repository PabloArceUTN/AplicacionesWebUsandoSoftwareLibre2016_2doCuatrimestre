<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {return view('simple');});
Route::get('simple', function(){return View::make('simple');});
Route::get('welcome', 'DemoController@welcome');

// Function redirect to other function

Route::get('first', function()
{
  return Redirect::to('second');
});

Route::get('second', function()
{
  return 'Second route :D';
});

// Return a json structure
Route::get('json', function(){
  return Response::json(['name'=>'Pablo', 'lastname'=>'Arce']);
});

//Download a file
Route::get('download', function(){
  $file = '/home/pablo/localhost_8000_json.pdf';
  return Response::download($file, 'file.pdf',['Content-Type', 'application/pdf']);
});

// Near to blade
Route::get('greet/{name?}', function($name = null){
  $data['name'] = $name;
  $data['lastname'] = "";
  return View::make('greet', $data);
});

Route::get('greet2/{name?}/{lastname?}', function($name = null, $lastname = null){
  $data['name'] = $name;
  $data['lastname'] = $lastname;
  return View::make('greet', $data);
});
