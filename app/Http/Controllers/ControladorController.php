<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorController extends Controller
{
      public function index()
    {
        if (session()->has('usuario')) {
            return view('index', ['usuario' => session('usuario')]);
        }
        return view('index');
    }
}
