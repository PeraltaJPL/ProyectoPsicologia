<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GruposController extends Controller
{

    public function GruposL()
    {
        return view('pacientes.grupos'); 

        $user = Auth::user();

        // Pasar las variables a la vista
        return view('pacientes.grupos', compact('user'));
    }
}