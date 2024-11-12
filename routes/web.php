<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/home', [HomeController::class, 'home'])->name('Inicio.home');
// Ruta predeterminada personalizada
Route::get('/', [HomeController::class, 'home'])->name('Inicio.home');

//Rutas para el INCIO DE SESION
use App\Http\Controllers\SesionController;

Route::get('/InicioSesion', [SesionController::class, 'sesion'])->name('InicioSesion.inisioSesion');

use App\Http\Controllers\testsController;

Route::get('/listaTests', [testsController::class, 'lTests'])->name('listaTests.aplicacionTest');

//Rutas para CALENDARIOS
use App\Http\Controllers\CalendarioController;

// Ruta para la vista principal del calendario
Route::get('/calendario', [CalendarioController::class, 'index'])->name('calendario.calendarioEventos');

// Ruta para la vista del calendario
Route::get('/calendario/eventos', [CalendarioController::class, 'eventos'])->name('calendario.cEventos');


//Rutas para NOTAS
use App\Http\Controllers\NotasController;

// Ruta para la vista principal de notas
Route::get('/notas', [NotasController::class, 'index'])->name('notas.notas'); 

// Ruta para crear una nueva nota
// Route::get('/notas/create', [NotasController::class, 'create'])->name('notas.create');

// Ruta para editar una nota específica
// Route::get('/notas/edit/{id}', [NotasController::class, 'edit'])->name('notas.edit');

//Prueba
// Route::get('prueba', function (){
//     return 'Hola mundo';
// });

use App\Http\Controllers\PacientesController;

Route::get('/pacientes/crear', [PacientesController::class, 'create'])->name('pacientes.create');
Route::resource('/pacientes', PacientesController::class)->except(['create']);


//Ruta para la lista de grupos
use App\Http\Controllers\GruposController;
Route::get('/grupos', [GruposController::class, 'GruposL'])->name('pacientes.grupos');