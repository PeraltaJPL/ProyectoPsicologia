<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $items = Note::all();
        return view('Inicio.home', compact('items'));
    }
}
