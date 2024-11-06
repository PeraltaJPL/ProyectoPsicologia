<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    // Función para mostrar la vista del calendario
    public function index()
    {
        return view('calendario.calendarioEventos');
    }
    
    // Función para mostrar el calendario personal
    public function eventos()
    {
        return view('calendario.cEventos'); // Vista el calendario
    }
}
