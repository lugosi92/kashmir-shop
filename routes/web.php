<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorController;
use App\Http\Controllers\OpcionesController;



// Logo
Route::get('/', [ControladorController::class, 'index'])->name('index');



//Controlador de opciones
Route::match(['get', 'post'], '/opcion/{opcion}', [OpcionesController::class, 'elegirOpcion'])->name('opcion');
