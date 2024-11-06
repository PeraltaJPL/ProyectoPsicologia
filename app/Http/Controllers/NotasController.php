<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    // Función para mostrar la vista de notas
    public function index()
    {
        return view('notas.notas');
    }

    // Función para crear una nueva nota
    public function create()
    {
        return view('notas.create'); // Vista para el formulario de creación de nota
    }

    // Función para editar una nota
    public function edit($id)
    {
        return view('notas.edit', compact('id')); // Vista para editar una nota específica
    }
}
