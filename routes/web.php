<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'inisioSesion']);

// Route::get('/post', function(){
//     return "Aquí se mostraran todos los posts";
// });