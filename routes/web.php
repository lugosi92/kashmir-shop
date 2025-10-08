<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorController;
use App\Http\Controllers\OpcionesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;



// Logo
Route::get('/', [ControladorController::class, 'index'])->name('index');

// Login-Registro
Route::get('/login', [LoginController::class, 'mostrarFormulario'])->name('login');
Route::get('/registro', [RegistroController::class, 'mostrarFormulario'])->name('registro');

//Controlador de opciones
Route::match(['get', 'post'], '/opcion/{opcion}', [OpcionesController::class, 'elegirOpcion'])->name('opcion');
