<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DemoController extends Controller
{
    // COntroller contruct
    // public function __construct(Type $foo = null)
    // {
    //   // $this->foo = $foo;
    // }

    public function index()
    {
      return '<h1>Demo action</h1><br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
    }

    public function demoview()
    {
      return view('demo');
    }
}
