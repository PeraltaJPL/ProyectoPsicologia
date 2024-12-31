<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Mostrar el perfil
    public function showProfile()
    {
    //     $user = auth()->user();
         return view('perfil.perfil');
    }

    // // Mostrar formulario para editar información
    // public function editProfile()
    // {
    //     $user = auth()->user();
    //     return view('perfil.edit', compact('user'));
    // }

    // // Mostrar formulario para cambiar imagen
    // public function changeImage()
    // {
    //     return view('perfil.image');
    // }

    // // Actualizar la información del usuario
    // public function updateProfile(Request $request)
    // {
    //     $user = auth()->user();
    //     $user->update($request->only(['name', 'email', 'phone']));
    //     return redirect()->route('perfil')->with('success', 'Información actualizada correctamente.');
    // }

    // // Actualizar la imagen del usuario
    // public function updateImage(Request $request)
    // {
    //     $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
    //     $path = $request->file('image')->store('profiles', 'public');
        
    //     $user = auth()->user();
    //     $user->update(['profile_image' => $path]);

    //     return redirect()->route('perfil')->with('success', 'Imagen actualizada correctamente.');
    // }
}
