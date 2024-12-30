<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
   // Muestra la vista de login
   public function login()
   {
       return view('InicioSesion.inisioSesion'); // Cambia al nombre correcto si es diferente
   }

   // Procesa el inicio de sesión
   public function attempt(Request $request)
   {
       // Obtiene las credenciales del formulario
       $credentials = $request->only('email', 'password');

       // Verifica las credenciales
       if (Auth::attempt($credentials)) {
           // Si son correctas, redirige al home
           $request->session()->regenerate();
           return redirect()->route('Inicio.home');
       }

       // Si no coinciden, regresa con un mensaje de error
       return back()->withErrors([
           'email' => 'Las credenciales no son válidas.',
       ]);
   }


    // // Muestra la vista de login
    // public function login()
    // {
    //     return view('InicioSesion.inisioSesion'); // Cambia al nombre correcto si es diferente
    // }

    // // Redirige al inicio sin validación (por ahora)
    // public function redirectToHome()
    // {
    //     return redirect()->route('Inicio.home');
    // }


}