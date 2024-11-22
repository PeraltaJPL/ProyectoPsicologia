<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home(){
        // $items = Note::all();
        // return view('Inicio.home', compact('items'));
        // Obtener todas las notas
        $items = Note::all();

        // Fecha actual
        $today = Carbon::today();

        // Obtener eventos del día de hoy
        $todayEvents = Event::whereDate('start', $today)
            ->orderBy('start', 'asc')
            ->get();

        // Obtener los últimos 3 eventos (antes de hoy)
        $lastThreeEvents = Event::whereDate('start', '<', $today)
            ->orderBy('start', 'desc')
            ->take(3)
            ->get();

        // Obtener los próximos 3 eventos (después de hoy)
        $nextThreeEvents = Event::whereDate('start', '>', $today)
            ->orderBy('start', 'asc')
            ->take(3)
            ->get();

        // Pasar las variables a la vista
        return view('Inicio.home', compact('items', 'todayEvents', 'lastThreeEvents', 'nextThreeEvents'));
    }
}
