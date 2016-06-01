a<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function(){return "Hello World :)";});

Route::get('demo', 'DemoController@index');
Route::get('demoview', 'DemoController@demoview');

Route::get('/movies/{genre?}',
  function ($genre = null){
    if ($genre == null) {
      return 'Movies Index.';
    }
    return "Movies is the {$genre} category.";
  }
);

Route::get('/magazines/{type?}', 'DemoController@magazine');
