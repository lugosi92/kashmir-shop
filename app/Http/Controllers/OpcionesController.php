<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpcionesController extends Controller
{
    public function elegirOpcion($opcion){
        if($opcion == 'showroom'){
            return view ('showroom');
        }elseif ($opcion == 'home') {
        return view('home');
        }elseif ($opcion == 'login') {
        return view('login');
        }elseif ($opcion == 'carrito') {
        return view('carrito');
        } else {
        abort(404); // Si no reconoce la opción, muestra error 404
        }
    }
}
