<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Not use the global function
// use Illuminate\Support\Fecades\View;

use App\Http\Requests;

class DemoController extends Controller
{
    public function welcome()
    {
      return view('welcome');
      // return View::make('simple');
      // return View::make('welcome');
    }

    public function download_file()
    {
      $file = '/home/pablo/localhost_8000_json.pdf';
      return Response::download($file, 'file.pdf',['Content-Type', 'application/pdf']);
    }
}
