<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('general.iniciarSesion.iniciar'); // Tu vista personalizada
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        
            $usuario = Auth::user();
        
            if ($usuario->rol === 'admin') {
                return redirect()->route('administrador.panel');
            } elseif ($usuario->rol === 'cliente') {
                return redirect()->route('home');
            }
        
            Auth::logout();
            return redirect()->route('login')->withErrors([
                'rol' => 'Rol no autorizado.',
            ]);
            // dd('Login exitoso', Auth::user());

        }
    }
}
        

      

