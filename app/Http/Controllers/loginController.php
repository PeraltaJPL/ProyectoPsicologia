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
        
    }

    public function logout(Request $request){
        
    }
}