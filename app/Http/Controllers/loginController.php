<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function register(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email= $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('Inicio.home'));
    }

    public function login(Request $request){
        // $credentials = $request->only('username', 'password');

        // if (Auth::attempt($credentials)) {
        //     // Autenticación exitosa
        //     return redirect()->route('Inicio.home');
        // }

        // // Autenticación fallida
        // return back()->withErrors([
        //     'message' => 'Las credenciales no son correctas.',
        // ]);
        
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        // return redirect()->intended(route('Inicio.home'));
        // }

        // return back()->withErrors([
        //     'email' => 'Las credenciales no coinciden con nuestros registros.',
        // ]);

        // Validar los datos del formulario
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('Inicio.home')); // Redirigir al home
        }

        // Si falla la autenticación
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('InicioSesion.inisioSesion'));
    }
}