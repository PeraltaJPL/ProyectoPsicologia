<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GruposController extends Controller
{

    public function GruposL()
    {
        return view('pacientes.grupos'); 
    }
}